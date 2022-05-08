
let questions = [
  {
    id: 1,
    question: "Tiger kelimesinin Türkçe anlamı nedir?",
    answer: "Kaplan",
    options: [
      "Kaplan",
      "Papağan",
      "Tazı",
      "Kedi"
    ]
  },
  {
    id: 2,
    question: "Aşağıdakilerden hangisi bir meslektir?",
    answer: "Doctor",
    options: [
      "Parrot",
      "Doctor",
      "Clock",
      "School"
    ]
  },
  {
    id: 3,
    question: "Eşleştirmelerden hangisi Doğrudur?",
    answer: "Purple-Mor",
    options: [
      "Black-Gri",
      "Red-Sarı",
      "Green-Turuncu",
      "Purple-Mor"
    ]
  },
  {
    id: 4,
    question: "Watermelon kelimesinin anlamı nedir?",
    answer: "Karpuz",
    options: [
      "Karpuz",
      "Kavun",
      "Erik",
      "Üzüm"
    ]
  },
  {
    id: 5,
    question: "Aşağıdakilerden hangisi bir Hayvan değildir?",
    answer: "Scarf",
    options: [
      "Bird",
      "Mouse",
      "Scarf",
      "Snake"
    ]
  },
  {
    id: 6,
    question: "Kelimelerden hangisinin yazımı yanlıştır?",
    answer: "Televison",
    options: [
      "Carpenter",
      "Grape",
      "Ball",
      "Televison"
    ]
  },
  {
    id: 7,
    question: "Sayı-Anlam ilişkilerinden hangisi doğrudur?",
    answer: "Two-2",
    options: [
      "Seven-1",
      "Two-2",
      "Six-5",
      "Eight-7"
    ]
  },
  {
    id: 8,
    question: "Hangi kelimenin anlamı Makastır?",
    answer: "Scissors",
    options: [
      "Scissors",
      "Ruler",
      "Pencil",
      "Scorpion"
    ]
  },
  {
    id: 9,
    question: "Okula gidiyorum cümlesinin anlamı?",
    answer: "I am going to school",
    options: [
      "I am going school",
      "I am play to school",
      "You are going to home",
      "I am going to school"
    ]
  },
  {
    id: 10,
    question: "Dolap kelimesinin İngilizcesi hangisidir?",
    answer: "Cabinet",
    options: [
      "Door",
      "Window",
      "Cabinet",
      "Bathroom"
    ]
  }
];

let question_count = 0;
let points = 0;

window.onload = function() {
  show(question_count);

};

function next() {

   
  // if the question is last then redirect to final page
  if (question_count == questions.length - 1) {
    sessionStorage.setItem("time", time);
    clearInterval(mytime);
    location.href = "end.php";
  }
  console.log(question_count);

  let user_answer = document.querySelector("li.option.active").innerHTML;
  // check if the answer is right or wrong
  if (user_answer == questions[question_count].answer) {
    points += 10;
    sessionStorage.setItem("points", points);
  }
  console.log(points);

  question_count++;
  show(question_count);
}

function show(count) {
  let question = document.getElementById("questions");
  let [first, second, third, fourth] = questions[count].options;

  question.innerHTML = `
  <h2>Q${count + 1}. ${questions[count].question}</h2>
   <ul class="option_group">
  <li class="option">${first}</li>
  <li class="option">${second}</li>
  <li class="option">${third}</li>
  <li class="option">${fourth}</li>
</ul> 
  `;
  toggleActive();
}

function toggleActive() {
  let option = document.querySelectorAll("li.option");
  for (let i = 0; i < option.length; i++) {
    option[i].onclick = function() {
      for (let i = 0; i < option.length; i++) {
        if (option[i].classList.contains("active")) {
          option[i].classList.remove("active");
        }
      }
      option[i].classList.add("active");
    };
  }
}
