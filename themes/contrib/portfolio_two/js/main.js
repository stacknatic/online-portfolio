const startLiveChatForm = document.querySelector('.start-live-chat-modal');
const declineLiveChat = document.querySelector('.close-live-chat-form');

if(!localStorage.getItem('LiveChatStacknatic')) {

    setTimeout(() => {
        startLiveChatForm.classList.add('active');
    }, 8000);

}
declineLiveChat.addEventListener('click', () => {
    startLiveChatForm.classList.remove('active');
    LetsChatButton.classList.contains('active') ? LetsChatButton.classList.remove('active') : LetsChatButton.classList.add('active');

    localStorage.setItem('LiveChatStacknatic', 'respondedLiveChat');
});


document.querySelector('#room-name-input').focus();
document.querySelector('#room-name-input').onkeyup = function(e) {
    if (e.keyCode === 13) {  // enter, return
        document.querySelector('#room-name-submit').click();
    }
};

document.querySelector('#room-name-submit').addEventListener('click', async function(e) {
    e.preventDefault();
    const visitorName = document.querySelector('#room-name-input').value.trim();
    const cleanedName = cleanInput(visitorName)

    if (visitorName.length < 1) {
        alert('Please enter your name');
        return;
    }

    const randomC = await randomCharacters(30);
    
    createRoom(cleanedName, randomC);
});

async function createRoom(cleanedName, randomC) {
    const chatModal = document.querySelector('.chat-modal-container');
    try {
        const response = await fetch('http://localhost:8000/sign/chat-invitation/', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'AJAX', // custom header
            },
            body: JSON.stringify({
                "invitee": cleanedName,
                "randomC": randomC
            })
        });
        const data = await response.json();
        if (data.invitation_key) {
            localStorage.setItem('room-name', randomC);
            chatModal.classList.add('active');
            startLiveChatForm.classList.remove('active'); 
            LetsChatButton.classList.remove('active');
            openWebSocket();
        } else if (data.feedback) {
            alert(data.feedback);
        }
    } catch (error) {
        alert('Unable to initiate a live chat at the moment. Please try later.');
    }
}



//sanitizes the input
function cleanInput(inputString) {
    // regex to match spaces, special characters, and digits
    const regex = /[\s\d\W_]/g;
    
    // replace the matched characters with an empty string
    const cleanedString = inputString.replace(regex, '');
    
    return cleanedString;
}

//add random characters
async function randomCharacters(length) {
    const characters =
      "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let result = "";
    const charactersLength = characters.length;
  
    if (window.crypto && window.crypto.getRandomValues) {
      const randomValues = new Uint32Array(length);
      window.crypto.getRandomValues(randomValues);
  
      for (let i = 0; i < length; i++) {
        const randomIndex = randomValues[i] % charactersLength;
        result += characters.charAt(randomIndex);
      }
    } else {
      alert(
        "Web Crypto API not available. Please use a modern web browser."
      );
    }
  
    return result;
  }

  //navbar script
  const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li');
const navSlide= () => {

        nav.classList.toggle('nav-active');
        navLinks.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + .5}s`;
            }
    
        //Burger animation
        burger.classList.toggle('toggle');
    });
} 
burger.addEventListener('click', navSlide)



const goUP = document.querySelector(".gototop");
window.addEventListener('scroll', goToTop);
function goToTop(){
    if (this.pageYOffset > 100){
        goUP.classList.add('active');
    }
    else{
        goUP.classList.remove('active');
    }
}
const goUp = () => {
    
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    
  };
goUP.addEventListener('click', goUp)

        const LetsChatButton = document.querySelector(".ChatWithMe");

        const LetsChat = () => {
            if(localStorage.getItem('room-name')){
                chatModal.classList.add('active');
                LetsChatButton.classList.remove('active');
                chatButtonNotification.classList.remove('active');
                return
            }
            startLiveChatForm.classList.add('active');
            LetsChatButton.classList.remove('active');
        };

        LetsChatButton.addEventListener('click', LetsChat)
    
        const consentButton = document.querySelector('.cookie-consent')
        const cookieBanner = document.querySelector('.cookie-banner')
        const banner = () =>{

            if (typeof(Storage) !== "undefined"){
                
                if(!localStorage.getItem('cookieConsent') && window.location.href!='/privacy-policy/'){
                    cookieBanner.classList.add('active')
                    cookieBanner.style.animation = 'banner 2s'

                    consentButton.addEventListener('click', consent)
                }
                
                function consent(){
                    
                    localStorage.setItem('cookieConsent', 'consented')
                    cookieBanner.classList.remove('active')
                }
            }
        }
        setTimeout(banner, 700)

   // open websocket connection

        const chatLogContainer = document.querySelector('.chat-log-container');
        const chatMessageInput = document.querySelector('#chat-message-input');
        const chatMessageSubmit = document.querySelector('#chat-message-submit');
        const typingIndicator = document.querySelector('#typing-indicator');
        const roomParticipant = document.querySelector('#room-participant');
        const closeChat = document.querySelector('.close-chat')
        const chatModal = document.querySelector('.chat-modal-container');
        const chatButtonNotification = document.querySelector('.chat-button-notification');
        const minimizeChat = document.querySelector('#minimize-chat')
        const chatWelcomeMessage = document.querySelector('.chat-welcome-message');

        function openWebSocket(){

        const newRoomName = localStorage.getItem('room-name');


        let chatSocket = new WebSocket(`ws://localhost:8000/ws/chat/${newRoomName}/`) 

        function appendVisitorMessage(visitorMessage) {
        if (visitorMessage.trim() !== '') { // Check if the message is not empty or contains only whitespace
            const messageElement = document.createElement('p');
            messageElement.classList.add('visitor-chat-message');
            messageElement.textContent = visitorMessage;
            chatLogContainer.appendChild(messageElement);
        }
        }
        function appendAdminMessage(adminMessage) {
            if (adminMessage.trim() !== '') { // Check if the message is not empty or contains only whitespace
                const messageElement = document.createElement('p');
                messageElement.classList.add('admin-chat-message');
                messageElement.textContent = adminMessage;
                chatLogContainer.appendChild(messageElement);
            }
        }
        chatSocket.addEventListener('message', (event) => {
            
            const data = JSON.parse(event.data);

            typingIndicator.textContent = data.typing && data.participant !== roomParticipant.textContent
            ? `${data.participant} is typing...`
            : '';
            if (!data.typing && data.participant == 'Me') {
                appendVisitorMessage(data.message);
                scrollToBottom();
            };

            if (!data.typing && data.participant == 'Admin') {
                chatMessageInput.getAttribute('disabled') === 'disabled' && chatMessageInput.removeAttribute('disabled');
                if(chatWelcomeMessage.classList.contains('active')) {
                    chatWelcomeMessage.classList.remove('active');
                }
                appendAdminMessage(data.message);
                scrollToBottom();
            };
            
            if (data.message && data.participant !== roomParticipant.textContent) {
                notificationSound.play();
                if (!chatModal.classList.contains('active')) {
                    chatButtonNotification.classList.add('active');
                }
            };
        });

        
        chatSocket.addEventListener('close', () => {
            console.error('Chat socket closed unexpectedly');
        });
        
        chatMessageInput.focus();
        
        chatMessageInput.addEventListener('keyup', (event) => {
            if (event.keyCode === 13) {
                chatMessageSubmit.click();
            } else {
                chatSocket.send(JSON.stringify({
                    'typing': true,
                    'participant': '{{logged_in}}' ? 'Admin' : 'Me',
                }));
            }
        });
        
        chatMessageSubmit.addEventListener('click', () => {
            const messageInputDom = chatMessageInput;
            const message = messageInputDom.value;
            const participant = '{{logged_in}}' ? 'Admin' : 'Me';
            
            chatSocket.send(JSON.stringify({
                'message': message,
                'participant': participant,
            }));
            
            messageInputDom.value = '';
        });

        }
        function endChat() {
        let text = "The chat will be closed!\nPress Cancel to continue with chat or OK to end chat.";
        if (confirm(text) == true) {
            chatModal.classList.remove('active');
            chatSocket.close();
            LetsChatButton.classList.add('active');
            if(localStorage.getItem('room-name')){
                localStorage.removeItem('room-name')
            };
            chatLogContainer.textContent = null;
        } 
        else {
            return
        }
        }
        // scroll to bottom
        function scrollToBottom() {
            chatLogContainer.scrollTop = chatLogContainer.scrollHeight;
        }
        // remove room-name from localStorage on browser close or page reload
        function removeRoomNameFromLocalStorage() {
            if (localStorage.getItem('room-name')){
                localStorage.removeItem('room-name');
            }
        }

        window.addEventListener('beforeunload', removeRoomNameFromLocalStorage);

        function minimizeChatWindow() {
            chatModal.classList.remove('active');
            LetsChatButton.classList.add('active');
        }
        minimizeChat.addEventListener('click', minimizeChatWindow);

        closeChat.addEventListener('click', endChat);

//native share

const currentURL = window.location.href;
const shareData = {
  title: document.title,
  text: document.title,
  url: currentURL
}

const btn = document.getElementById('share-button');

if (btn !== null) {

  function shareContent() {
    if (navigator.share) {
      navigator.share(shareData)
      .catch((err) => console.error('Error sharing: ', err));
    } else {
      alert("Share failed.");
    }
  }
}
  
  btn.addEventListener('click', shareContent);