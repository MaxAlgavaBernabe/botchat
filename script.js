const chatHistory = document.querySelector('.chat-history');
const chatInput = document.querySelector('.chat-input input');
const sendButton = document.querySelector('.chat-input button');

sendButton.addEventListener('click', () => {
  const message = chatInput.value.trim();
  if (message) {
    const chatBubble = document.createElement('div');
    chatBubble.classList.add('chat-bubble');
    chatBubble.textContent = message;
    chatHistory.appendChild(chatBubble);
    chatInput.value = '';
  }
});
