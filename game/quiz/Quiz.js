const startBtn = document.querySelector(".btn-start");
const questionContainer = document.querySelector(".question-answer-container");
const question = questionContainer.querySelector(".question");
const questionNumber = questionContainer.querySelector(".question-number>span");
const answers = [...questionContainer.querySelectorAll(".answers .btn")];
const gameStartPage = document.querySelector(".game-start-page");
const gameFinishPage = document.querySelector(".game-finish-page");
const questionStatus = document.querySelector(".status");
const questionStatusContainer = document.querySelector(".status-container");
const nextBtn = document.querySelector(".next-btn");
const correctLabel = document.querySelector(".correct");
const numOfCorrectAnswer = document.querySelector(".answered-correct span:first-child");
const expGained = document.querySelector(".game-finish-page .title span");

let currentQuestionIdx = 0;
let correctAnswers = 0;

answers.forEach((ans, i) => {
  ans.dataset.ansIndex = i;
});

startBtn.addEventListener("click", startGame);
nextBtn.addEventListener("click", nextQuestion);

function startGame() {
  gameStartPage.classList.add("hide");
  currentQuestionIdx = 0;
  questionContainer.classList.remove("hide");
  showQuestion(currentQuestionIdx);
}

function nextQuestion() {
  if (currentQuestionIdx !== questions.length - 1) {
    questionStatus.innerText = "";
    questionStatusContainer.classList.add("hide");
    questionStatusContainer.classList.remove("true", "false");
    answers.forEach((ans, i) => {
      ans.classList.remove("hide", "green", "red");
    })
    showQuestion(++currentQuestionIdx);
    questionNumber.innerText = parseInt(currentQuestionIdx) + 1;
  } else {
    questionContainer.classList.add("hide");
    gameFinishPage.classList.remove("hide");
    numOfCorrectAnswer.innerText = correctAnswers;
    expGained.innerText = "+" + String(parseInt(correctAnswers) * 10);
  }
}

function showQuestion(idx) {
  question.innerText = questions[idx].question;
  answers.forEach((ans, i) => {
    ans.innerText = questions[idx].answers[i].text;
    ans.addEventListener("click", () => checkAnswer(currentQuestionIdx, i));
  });
  if(currentQuestionIdx === questions.length - 1) {
    nextBtn.innerText = "Finish";
  }
}

function checkAnswer(idx, chosenAnswerIndex) {
  if(questionStatusContainer.classList.contains("hide")) {
    if (questions[idx].answers[parseInt(chosenAnswerIndex)].status) {
      questionStatus.innerText = "Nice, you are right!";
      questionStatusContainer.classList.add("true");
      answers.forEach((ans) => {
        if(parseInt(ans.dataset.ansIndex) === chosenAnswerIndex) {
          ans.classList.add("green");
        } else {
          ans.classList.add("hide");
        }
      })
      correctAnswers++;
      correctLabel.innerText = correctAnswers;
    }
    else {
      questionStatusContainer.classList.add("false");
      answers.forEach((ans) => {
        if (parseInt(ans.dataset.ansIndex) === chosenAnswerIndex) {
          ans.classList.add("red");
        } else {
          ans.classList.add("hide");
        }
      });
      questionStatus.innerText = "Sorry, you are wrong!";
    }
  }
  questionStatusContainer.classList.remove("hide");
}

const questions = [
  {
    question: "What is the capital of Indonesia?",
    answers: [
      { text: "Bandung", status: false },
      { text: "Jakarta", status: true },
      { text: "Medan", status: false },
      { text: "Tanjung Balai", status: false },
    ],
  },
  {
    question: "Which one of these included in the seven wonders of the world?",
    answers: [
      { text: "The Eiffel Tower", status: false },
      { text: "Colosseum", status: true },
      { text: "Tugu Monas", status: false },
      { text: "Forbidden City", status: false },
    ],
  },
  {
    question: "Which football club has the most Champions League title?",
    answers: [
      { text: "Manchester United", status: false },
      { text: "Bayern Munchen", status: false },
      { text: "FC Barcelona", status: false },
      { text: "Real Madrid", status: true },
    ],
  },
  {
    question:
      "Which is the first country that Germany invades during the World War 2?",
    answers: [
      { text: "Poland", status: true },
      { text: "France", status: false },
      { text: "Denmark", status: false },
      { text: "Ukraine", status: false },
    ],
  },
  {
    question: "Who is the first president of United States of America?",
    answers: [
      { text: "John Adams", status: false },
      { text: "Abraham Lincoln", status: false },
      { text: "Franklin D. Roosevelt", status: false },
      { text: "George Washington", status: true },
    ],
  },
];
