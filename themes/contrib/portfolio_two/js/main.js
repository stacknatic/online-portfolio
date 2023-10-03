console.log('Hello Drupal!');

const startLiveChatForm = document.querySelector('.start-live-chat-modal');
const declineLiveChat = document.querySelector('.close-live-chat-form');

if(!localStorage.getItem('LiveChatStacknatic')) {

    setTimeout(() => {
        startLiveChatForm.classList.add('active');
    }, 10000);

}
declineLiveChat.addEventListener('click', () => {
    startLiveChatForm.classList.remove('active');
    // localStorage.setItem('LiveChatStacknatic', 'respondedLiveChat');
});

document.querySelector('#room-name-input').focus();
document.querySelector('#room-name-input').onkeyup = function(e) {
    if (e.keyCode === 13) {  // enter, return
        document.querySelector('#room-name-submit').click();
    }
};

document.querySelector('#room-name-submit').onclick = function(e) {
    const visitorName = document.querySelector('#room-name-input').value;
    const cleanedName = cleanInput(visitorName)
    // const addCharacters = randomCharacters(12)
    randomCharacters(30)
    .then(addCharacters => {
        window.location.pathname = '/chat/' + cleanedName + addCharacters + '/';
        // localStorage.setItem('LiveChatStacknatic', 'respondedLiveChat');
    })
    .catch(error => {
        alert('Unable to initiate a live chat from your browser. You can try to update your browser and try again or try with another browser');
    });
};

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
      console.error(
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

  
