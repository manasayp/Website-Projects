(function() {
  var topics = ["Cricket","Animal","Maths","Geography"];

 var questions1 = [{
    question: "Which is the kingdom of dog?",
	questionType : 1,
    choices: ["Animalia","Protesta","Fungi","Monera"],
	correctAnswer: 3,
	Score: 5
  }, {
    question: "Which is the phylum of dog?",
	questionType : 1,
    choices: ["Porifera","Anthropoda","Chordata","Ciliophora"],
    correctAnswer: 2,
	Score: 10
  }, {
    question: "Which is the order of dog?",
	questionType : 2,
    correctAnswer: "carnivora",
	Score: 5
  }, {
    question: "Which is the family of dog?",
	questionType : 2,
    correctAnswer: "canidae",
	Score: 15
  }, {
    question: "Which is the genus of dog",
	questionType : 1,
	choices: ["Acinonyx","Panthera","Neofelis","Canis"],
    correctAnswer: 3,
	Score: 15
  },{
	question: "Which sense of dog is most highly developed?",
	questionType: 2,
    correctAnswer: "smell",
	Score: 10
  }, {
    question: "Which dogs are used for hunting?",
	questionType: 1,
    choices: ["Terriers","Toys","Hounds","Collies"],
    correctAnswer: 1,
	Score: 5
  }, {
    question: "What is the gestation period for dogs?",
	questionType: 1,
	choices: ["4","6","9","12"],
    correctAnswer: 2,
	Score: 5
  }, {
    question: "What are babies of eagles called?",
	questionType: 2,
	correctAnswer: "eaglets",
	Score: 15
  }, {
    question: "The use of which pesticide was stopped in USA to prevent eagles from dying?",
	questionType: 2,
    correctAnswer: "DDT",
	Score: 10
  }, {
    question: "To which class eagle belongs?",
	questionType: 2,
    correctAnswer: "aves",
	Score: 12
  }];
  
  var questions2 = [{
    question: "Which is the largest island in the Mediterranean sea? ",
	questionType : 1,
    choices: ["Ibiza","Sicily","Crete"],
	correctAnswer: 1,
	Score: 5
  }, {
    question: "Which of these islands is not off the coast of Africa? ",
	questionType : 1,
    choices: ["Madagascar","Mauritius","Easter Island","Ciliophora"],
    correctAnswer: 2,
	Score: 10
  }, {
    question: "What is the largest island in the world? ",
	questionType : 2,
    correctAnswer: "Greenland",
	Score: 5
  }, {
    question: "Which of these is NOT an island in the Caribbean? ",
	questionType : 2,
    correctAnswer: "Bermuda",
	Score: 15
  }, {
    question: "Which of these islands is NOT an island off the eastern coast of the United States?",
	questionType : 1,
	choices: ["Nantucket","Martha's Vineyard ","Catalina Island"],
    correctAnswer: 2,
	Score: 15
  },{
	question: "Which of these islands is NOT in the South Pacific?  ",
	questionType: 2,
    correctAnswer: "Sri Lanka",
	Score: 10
  }, {
    question: "Which of these is NOT off the coast of the United Kingdom? ?",
	questionType: 1,
    choices: ["Guernsey","Tou","Canary Islands"],
    correctAnswer: 2,
	Score: 5
  }, {
    question: "Which of these islands is divided politically? ",
	questionType: 1,
	choices: ["Sardinia","cyprus","malta"],
    correctAnswer: 2,
	Score: 5
  }, {
    question: "San francisco is in which country?",
	questionType: 2,
	correctAnswer: "california",
	Score: 15
  }];

  var questions3 = [{
    question: "What is 2*5?",
    choices: [2, 5, 10, 15, 20],
    correctAnswer: 2
  }, {
    question: "What is 3*6?",
    choices: [3, 6, 9, 12, 18],
    correctAnswer: 4
  }, {
    question: "What is 8*9?",
    choices: [72, 99, 108, 134, 156],
    correctAnswer: 0
  }, {
    question: "What is 1*7?",
    choices: [4, 5, 6, 7, 8],
    correctAnswer: 3
  }, {
    question: "What is 8*8?",
    choices: [20, 30, 40, 50, 64],
    correctAnswer: 4
  },{
	question: "What is 2*6?",
    choices: [2, 5, 10, 15, 12],
    correctAnswer: 4
  }, {
    question: "What is 7*3?",
    choices: [21, 6, 8, 12, 18],
    correctAnswer: 0
  }, {
    question: "What is 8*8?",
    choices: [72, 64, 118, 134, 156],
    correctAnswer: 1
  }, {
    question: "What is 2*7?",
    choices: [4, 5, 14, 7, 8],
    correctAnswer: 2
  }, {
    question: "What is 5*8?",
    choices: [20, 30, 40, 50, 64],
    correctAnswer: 2
  }];
  

  var questions4 = [{
    question: "Who is the highest run scorer in a single Cricket World Cup?",
	questionType : 1,
    choices: ["Sanath Jayasuriya","Ricky Ponting","Inzamam-ul-Haq","Sachin Tendulkar"],
	correctAnswer: 3,
	Score: 5
  }, {
    question: "Which South African batsman set a world record of hitting six sixes in an over against Netherlands spinner Dan Van Bunge?",
	questionType : 1,
    choices: ["Herschelle Gibbs","Graeme Smith","Mark Boucher","Jacques Kallis"],
    correctAnswer: 0,
	Score: 10
  }, {
    question: "In which year, the overs of the ICC World Cup matches were reduced to 50 from 60?",
	questionType : 2,
    correctAnswer: "1987",
	Score: 5
  }, {
    question: "Who bowled the first ball of 1975 Cricket World Cup?",
	questionType : 2,
    correctAnswer: "Madan Lal",
	Score: 15
  }, {
    question: "Which of these cricketers has represented two different countries in ICC World Cup?",
	questionType : 1,
	choices: ["Kepler Wessels","Don Bradman","Sachin Tendulkar","Rahul Dravid"],
    correctAnswer: 0,
	Score: 10
  },{
	question: "Where was the final match of ICC World Cup 2007, between Australia and Sri Lanka, played?",
	questionType: 2,
    correctAnswer: "Barbados",
	Score: 10
  }, {
    question: "Which of these bowlers set a World Cup record of taking 4 wickets in 4 consecutive balls?",
	questionType: 1,
    choices: ["Anil Kumble","Lasith Malinga","Shane Warne","Glenn McGrath"],
    correctAnswer: 1,
	Score: 5
  }, {
    question: "First Day-Night match in ICC World Cup was played in",
	questionType: 2,
    correctAnswer: "1992",
	Score: 5
  }, {
    question: "By runs, what was the largest victory margin in the ICC World Cup?",
	questionType: 1,
	choices: ["India over New Zealand, 243 runs","India over Bermuda, 257 runs","India over West Indies, 221 runs","India over England, 260 runs"],
    correctAnswer: 1,
	Score: 15
  }, {
    question: "Against which country did Sunil Gavaskar score only 36 runs after playing entire 60 overs in a WC match in June, 1975?",
	questionType: 2,
    correctAnswer: "England",
	Score: 10
  }];
  
   
  var questionCounter = 0; //Tracks question number
  var numQuestions = 5;
  var selections = []; //Array containing user choices
  var quiz = $('#quiz'); //Quiz div object
  var correct = $('.correct');
  var wrong = $('.wrong');
  var remaining = $('.total');
  var numCorrect = 0;
  var numWrong = 0;
  var questionTracker = [];
  var randomQuestion = 0;
  var timer = $('#timer');
  var timeout = null;
  var questionType = 1;
  var score = 0;
  
  var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];
  var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  var newDate = new Date();  
  
  //Display Date
  $('#right>h4').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

  //Display Timer
  var secs = 180; //Note : secs should be modified in initialize function and here
  var timertext = "00:03:00";
  timer.text(timertext);
  
  //Storing random topic and Date in localStorage object
  var index = Math.floor(Math.random() * topics.length);
  var todayTopic,found = 0;
  
  if(localStorage.getItem("Date") === null)
  {
	  localStorage.setItem("Date", newDate.getDate());
	  localStorage.setItem("Topic", topics[index]);
  }
  else if(localStorage.getItem("Date") != newDate.getDate())
  {
	  localStorage.setItem("Date", newDate.getDate());
	  localStorage.setItem("Topic", topics[index]);
  }
  else{
	    todayTopic = localStorage.getItem("Topic");
		for(i=0; i< topics.length; i++)
		{
			if(topics[i] === todayTopic){
				found = 1;
			}
		}
		if(found != 1)
		{
			localStorage.clear();
			localStorage.setItem("Date", newDate.getDate());
			localStorage.setItem("Topic", topics[index]);
			todayTopic = localStorage.getItem("Topic");
		}
  }
  
  //Display Topic
  $('#middle>h1').text(todayTopic);
  
  function startTimer(duration, display) {
    var timer = duration
	var minutes, seconds;
	
    timeout = setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text("00:"+ minutes + ":" + seconds);
         
		timer--;
        if (timer < 0) {
			if(timeout){
				clearInterval(timeout);
				timeout = null;
			}
			alert('Time Out! Click to Start again!');
			quiz.empty();
			$('#next').hide();
			$('#prev').hide();
			$('#start').show();
        }
    }, 1000);
  }
	  
  
  function initialize(){
	  questionCounter = 0; //Tracks question number
      selections = []; //Array containing user choices
      numCorrect = 0;
      numWrong = 0;
      questionTracker = [];
      numQuestions = 5;
      randomQuestion = 0;
      secs = 180;
	  score = 0;
	  correct.text(numCorrect);
	  wrong.text(numWrong);
	  remaining.text('0');
  }
  
  
  // Display initial question
  /*displayNext();
  startTimer(secs,timer);*/
  if(todayTopic == "Cricket")
	  loadQuiz(questions4);
  else if(todayTopic == "Animal")
	  loadQuiz(questions1);
  else if(todayTopic == "Maths")
	  loadQuiz(questions3);
  else
	  loadQuiz(questions2);
  
  function loadQuiz(questions){
  // Click handler for the 'next' button
  $('#next').on('click', function (e) {
    e.preventDefault();
    
    // Suspend click listener during fade animation
    if(quiz.is(':animated')) {        
      return false;
    }
    choose();
    // If no user selection, progress is stopped
	var selection = selections[randomQuestion];
	
	if (((questionType === 1) && (isNaN(selection))) || ((questionType === 2) && (selection === ""))) {
			alert('Please make a selection!');
	} 
	else {
		questionCounter++;
		var correctAnswer = questions[randomQuestion].correctAnswer;		
		if(selection === correctAnswer) {
		numCorrect++;
		correct.text(numCorrect);
		score += questions[randomQuestion].Score;	
		remaining.text(score);
		}
		else {
		numWrong++;
		wrong.text(numWrong);
		}
		displayNext();
	}
  });
  
  // Click handler for the 'prev' button
  $('#prev').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
      return false;
    }
    choose();
    questionCounter--;
    displayNext();
  });
  
  // Click handler for the 'Start Over' button
  $('#start').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
      return false;
    }
	//initialize();
    //displayNext();
	//startTimer(secs,timer);
    //$('#start').hide(10,function() {intialize();displayNext();});
	timer.text(timertext);
	$('#start').hide(20,function(){
        initialize();
    });
    startTimer(secs,timer);
	displayNext();
  });
  
  // Animates buttons on hover
  $('.button').on('mouseenter', function () {
    $(this).addClass('active');
  });
  $('.button').on('mouseleave', function () {
    $(this).removeClass('active');
  });
  
  // Creates and returns the div that contains the questions and 
  // the answer selections
  function createQuestionElement(index) {
    var qElement = $('<div>', {
      id: 'question'
    });
    
    var header = $('<h2>Question ' + (index + 1) + ':</h2>');
    qElement.append(header);
    
	do {
    randomQuestion = Math.floor(Math.random() * questions.length);
	} while (existingQuestions(randomQuestion));

    var question = $('<p>').append(questions[randomQuestion].question);
    qElement.append(question);
    
	questionType = questions[randomQuestion].questionType;
	if(questionType === 1){
		var radioButtons = createRadios(randomQuestion);
		qElement.append(radioButtons);
	}
    else{
		var input = '<input type="text" name="answer" id="text" value="" required="true"/>';
	    qElement.append(input);
    }
	
	questionTracker.push(randomQuestion);
	
    return qElement;
  }
  
  // If the current random number already exists in the tracker, return true
  function existingQuestions(randomQuestion) {
	for (var i = 0; i < questionTracker.length; i++) {
		if (questionTracker[i] === randomQuestion) {
			return true;
		}
	}
	return false;
  }
  
  // Creates a list of the answer choices as radio inputs
  function createRadios(index) {
    var radioList = $('<ul>');
    var item;
    var input = '';
    for (var i = 0; i < questions[index].choices.length; i++) {
      item = $('<li>');
      input = '<input type="radio" name="answer" value=' + i + ' />';
      input += questions[index].choices[i];
      item.append(input);
      radioList.append(item);
    }
    return radioList;
  }
  
  // Reads the user selection and pushes the value to an array
  function choose() {
	if(questionType === 1){
		selections[randomQuestion] = +$('input[name="answer"]:checked').val();
	}
	else{
		selections[randomQuestion] = $('#text').val();
	}
  }
  
  // Displays next requested element
  function displayNext() {
    quiz.fadeOut(function() {
      $('#question').remove();
      
      //if(questionCounter < questions.length){
	 if(questionCounter < numQuestions ){
        var nextQuestion = createQuestionElement(questionCounter);
        quiz.append(nextQuestion).fadeIn();
		if(questionType === 1) {
			if (!(isNaN(selections[randomQuestion]))) {
				if(questionType === 1){
					$('input[value='+selections[randomQuestion]+']').prop('checked', true);
					}
				}
		}
        
        // Controls display of 'prev' button
        if(questionCounter === 1){
          $('#prev').show();
        } else if(questionCounter === 0){
          
          $('#prev').hide();
          $('#next').show();
        }
      }else {
        var scoreElem = displayScore();
        quiz.append(scoreElem).fadeIn();
        $('#next').hide();
        $('#prev').hide();
        $('#start').show();
		if(timeout){
			clearInterval(timeout);
			timeout = null;
		}
      }
    });
  }
  
  // Computes score and returns a paragraph element to be displayed
  function displayScore() {
    var score = $('<p>',{id: 'question'});
    score.append('You got ' + numCorrect + ' questions out of ' +
                 numQuestions + ' right!!!');
    return score;
  }
  }
  
  
})();