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
  message = message.toLowerCase();
  switch(message) {
    case 'hola':
      return "Bot: Hola, Como estas? En que puedo ayudarte hoy?";
    case 'bien':
      return "Bot: Me alegra escuchar eso. En que puedo ayudarte hoy?";
    case 'mal':
      return "Bot: Lo siento por escuchar eso. Te gustaria hablar sobre lo que esta sucediendo?";
    case 'si':
      return "Bot: Vale, ¿quieres hablar sobre lo que esta sucediendo o prefieres que te brinde algunos consejos?";
    case 'no':
      return "Bot: Esta bien. Si cambias de opinion, no dudes en preguntar.";
    case 'amigos':
      return "Bot: Tienes amigos en los que puedas confiar y con quienes pasar tiempo?";
    case 'no tengo amigos':
      return "Bot: Se que puede ser dificil conocer gente nueva, pero no estas solo en esto. Hay muchas formas de conocer gente nueva, desde unirte a clubes o actividades que te interesen hasta buscar grupos en linea que compartan tus intereses.";
    case 'habitos':
      return "Bot: Tienes alguna rutina diaria que te ayude a mantenerte motivado y enfocado? A veces, establecer habitos saludables puede marcar una gran diferencia en nuestra salud mental.";
    case 'horas de sueno':
      return "Bot: Estas durmiendo lo suficiente? Un sueño adecuado es vital para nuestra salud mental y fisica. Intenta establecer una rutina de sueño regular y evita pasar demasiado tiempo frente a pantallas antes de dormir.";
    case 'consejos':
      return "Bot: Hay muchas cosas que puedes hacer para ayudar a reducir la ansiedad social, como practicar tecnicas de respiración, hacer ejercicios de relajacion muscular, hablar con un terapeuta o un amigo de confianza, entre otras. Te gustaria hablar mas sobre estas tecnicas?";
    case 'me gustaria hablar sobre tecnicas':
      return "Bot: Por supuesto Algunas tecnicas que puedes probar incluyen la meditacion, la atencion plena, el ejercicio, la exposición gradual y la terapia cognitivo-conductual (TCC). Te gustaría saber mas sobre alguna de estas tecnicas?";
    default:
      return "Bot: Lo siento, no entiendo lo que estás diciendo. Podrias reformular tu pregunta o darme mas detalles?";      
  }
}
