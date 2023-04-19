const chatHistory = document.querySelector('.chat-history');
const chatInput = document.querySelector('.chat-input input');
const sendButton = document.querySelector('.chat-input button');

sendButton.addEventListener('click', () => {
  const message = chatInput.value.trim();
  if (message) {
    const chatBubble = document.createElement('div');
    chatBubble.classList.add('chat-bubble');
    chatBubble.textContent = message;
    chatBubble.style.fontSize = '40px';
    chatHistory.appendChild(chatBubble);
    
    // Agregando respuesta del bot
    const botResponse = document.createElement('div');
    botResponse.classList.add('chat-bubble');
    botResponse.style.fontSize = '40px';
    botResponse.textContent = getBotResponse(message); // Obtener respuesta del bot
    chatHistory.appendChild(botResponse);
    
    chatInput.value = '';
  }
});

function getBotResponse(message) {

}
