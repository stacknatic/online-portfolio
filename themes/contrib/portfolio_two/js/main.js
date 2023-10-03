console.log('Hello Drupal!');

const startLiveChatForm = document.querySelector('.start-live-chat-modal');
const declineLiveChat = document.querySelector('.close-live-chat-form');

if(!localStorage.getItem('LiveChatStacknatic')) {

    setTimeout(() => {
        startLiveChatForm.classList.add('active');
    }, 3000);

}
declineLiveChat.addEventListener('click', () => {
    startLiveChatForm.classList.remove('active');
    localStorage.setItem('LiveChatStacknatic', 'respondedLiveChat');
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
        localStorage.setItem('LiveChatStacknatic', 'respondedLiveChat');
    })
    .catch(error => {
        alert('Unable to initiate a live chat from your browser. You can try to update your browser and try again or try with another browser');
    });
};
