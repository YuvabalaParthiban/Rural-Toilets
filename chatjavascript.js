const trigger = [
  ["hi", "hey", "hello", "good morning", "good afternoon"],
  ["how are you", "how is life", "how are things"],
  ["what are you doing", "what is going on", "what is up"],
  ["how old are you"],
  ["who are you", "are you human", "are you bot", "are you human or bot"],
  ["who created you", "who made you"],
  [
    "your name please",
    "your name",
    "may i know your name",
    "what is your name",
    "what call yourself"
  ],
  ["happy", "good", "fun", "wonderful", "fantastic", "cool"],
  ["bad", "bored", "tired"],
  ["help me", "tell me story", "tell me joke"],
  ["ah", "yes", "ok", "okay", "nice"],
  ["thanks", "thank you"],
  ["bye", "good bye", "goodbye", "see you later"],
  ["what should i eat today"],
  ["bro"],
  ["What is roto?","what is roto?","what is roto","what is ROTO?"],
  ["how to use this app?","how can i use it?","how can i use","how to avail fund"],
  ["how can i help them?","how can i help the needy?"],
  ["how do I know whether my application is accepted?","how do i know the status?","how do i know the status"],
  ["how to fill the form?","how to fill form"],
  ["what is open defecation?"],
  ["what is the aim of ROTO?","what is the aim of roto"],
  ["why did you build this app?","what is the purpose?"],
  ["can we join ROTO?","can i join roto","can i join roto?"],
  ["who created this app?","who created the app?","who created the app"],
  ["what is the cause of this app?","what is need of this app?","what is need of the app?"]
  ];

// These are bot responses, paired in order with the above 'trigger' phrases

const reply = [
  ["Hello!", "Hi!", "Hey!", "Hi there!"],
  [
    "Fine... how are you?",
    "Pretty well, how are you?",
    "Fantastic, how are you?"
  ],
  [
    "Nothing much",
    "About to go to sleep",
    "Can you guess?",
    "I don't know actually"
  ],
  ["I am infinite"],
  ["I am just a bot", "I am a bot. What are you?"],
  ["The one true God, JavaScript"],
  ["I am nameless", "I don't have a name"],
  ["Have you ever felt bad?", "Glad to hear it"],
  ["Why?", "Why? You shouldn't!", "Try watching TV"],
  ["What about?", "Once upon a time..."],
  ["Tell me a story", "Tell me a joke", "Tell me about yourself"],
  ["You're welcome"],
  ["Bye", "Goodbye", "See you later"],
  ["Sushi", "Pizza"],
  ["Bro!"],
  ["Roto is rural construction of toilets. This is an app which helps rural people to construct toilets with fund collected through this app."],
  ["You can get benefitted by applying for toilet construction or help us through ur funds."],
  ["You can help us either through the volunteer section by paying some amount or through the funds section. we make sure that this money reaches the correct and needed person. "],
  ["You???ll get an email confirming the selection of your form. It will be sent to you within a month."],
  ["Kindly see the video in the help section.. or refer the instructions page in the help section for text."],
  ["Open defecation is the human practice of defecating outside (in the open) rather than into a toilet. People may choose fields, bushes, forests, ditches, streets, canals or other open space for defecation. They do so either because they do not have a toilet readily accessible or due to traditional cultural practices."],
  ["Making India an open defecation free country. Bringing awareness to the people about the problems caused due to open defecation. Help poor people to build toilets."],
  ["To make India an open defecation free country. To bring awareness to the people about the problems caused due to open defecation and to Help poor people to build toilets and regularly use them."],
  ["Yes you can. You can help the needy by paying some amount. By doing this you also become the member of ROTO. Everyone who donates here becomes the member of ROTO."],
  ["This is a project done by 3 CEG Anna university students: Sharmila, Yamini and  Yuvabala  of IT department "],
  ["In many rural places we could still see people open defecating. To stop this we have to build more public and private toilets. So to help the needy people to construct toilets, we have created this app. Also, this is a move to make the government understand that people are still in need of an toilet in this technological world"]
  ];

// This is a small set of basically random 'catch alls' for anything that the user enters outside of the possible trigger phrases

const alternative = [
  "Go on...",
  "Come again",
  "Thanks for using ROTO assistant..for more help..type again",
  "Try again",
  "I'm listening..."
];

// Same purpose as the 'alternative' but an attempt at being culturally relevant ;)

const coronavirus = ["Please stay home"];

document.addEventListener("DOMContentLoaded", () => {
	const inputField = document.getElementById("input")
	inputField.addEventListener("keydown", function(e) {
		if (e.code === "Enter") {
			let input = inputField.value;
			inputField.value = "";
			output(input);
    }
  });
});

function output(input) {
  let product;

  //Transforms whatever the user inputs to lowercase and remove all chars except word characters, space, and digits
  let text = input.toLowerCase().replace(/[^\w\s\d]/gi, "");

  // For example 'tell me a story' becomes 'tell me story'
  // Or 'i feel happy' -> 'happy'
  text = text
    .replace(/ a /g, " ")
    .replace(/i feel /g, "")
    .replace(/whats/g, "what is")
    .replace(/please /g, "")
    .replace(/ please/g, "");

  // Searches for an exact match with the 'trigger' array, if there are none, it goes will check if message contains 'coronavirus,' and if not - random alternative
  if (compare(trigger, reply, text)) {
    product = compare(trigger, reply, text);
  } else if (text.match(/coronavirus/gi)) {
    product = coronavirus[Math.floor(Math.random() * coronavirus.length)];
  } else {
    product = alternative[Math.floor(Math.random() * alternative.length)];
  }

  //update DOM
  addChat(input, product);
}

function compare(triggerArray, replyArray, string) {
  let item;
  for (let x = 0; x < triggerArray.length; x++) {
    for (let y = 0; y < replyArray.length; y++) {
      if (triggerArray[x][y] == string) {
        items = replyArray[x];
        item = items[Math.floor(Math.random() * items.length)];
      }
    }
  }
  return item;
}

function addChat(input, product) {
  const mainDiv = document.getElementById("main");
  let userDiv = document.createElement("div");
  userDiv.id = "user";
  userDiv.innerHTML = `You: <span id="user-response">${input}</span>`;
  mainDiv.appendChild(userDiv);

  let botDiv = document.createElement("div");
  botDiv.id = "bot";
  botDiv.innerHTML = `ROTO bot: <span id="bot-response">${product}</span>`;
  mainDiv.appendChild(botDiv);
  speak(product);
}

const synth = window.speechSynthesis;
let voices = synth.getVoices();

function speak(string) {
  let u = new SpeechSynthesisUtterance(string);
  u.text = string;
  u.lang = "en-US";
  u.volume = 1; //0-1 interval
  u.rate = 1;
  u.pitch = 1; //0-2 interval
  synth.speak(u);
  debugger
}