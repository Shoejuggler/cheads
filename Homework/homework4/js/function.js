function check() {
    
    
    var question1 = document.quiz.question1.value;
    var question2 = document.quiz.question2.value;
    var question3 = document.quiz.question3.value;
    var question4 = document.quiz.question4.value;
    var question5 = document.quiz.question5.value;
    var question6 = document.quiz.question6.value;
    var correct = 0;
    
    var correct1 = document.querySelector('#correct1');
    var correct2 = document.querySelector('#correct2');
    var correct3 = document.querySelector('#correct3');
    var correct4 = document.querySelector('#correct4');
    var correct5 = document.querySelector('#correct5');
    var correct6 = document.querySelector('#correct6');
    
    var incorrect1 = document.querySelector('#incorrect1');
    var incorrect2 = document.querySelector('#incorrect2');
    var incorrect3 = document.querySelector('#incorrect3');
    var incorrect4 = document.querySelector('#incorrect4');
    var incorrect5 = document.querySelector('#incorrect5');
    var incorrect6 = document.querySelector('#incorrect6');
    
    if (question1 == "b") {
        correct++;
        
        correct1.innerHTML = "<img src='img/right.png' width='50px' height='50px'>" , "Correct! Nice reading comprehension!";
        correct1.style.backgroundColor = '#41ad49';
    }else {
        
        incorrect1.innerHTML = "No. Try taking a look a the title of this --quiz-- again..."
        incorrect1.style.backgroundColor = 'red';
        document.getElementById("incorrect1").innerHTML = '<img src="img/wrong.png" width="40px" height="40px">';
    }
    
    if (question2 == "Mississippi backwards") {
        correct++;
        document.getElementById("correct2").innerHTML = '<img src="img/right.png" width="50px" height="50px" >'
      correct2.innerHTML = "Correct! I thought I had you there.";
        correct2.style.backgroundColor = '#41ad49';
    }else {
        document.getElementById("incorrect2").innerHTML = '<img src="img/wrong.png" width="40px" height="40px">';
        incorrect2.innerHTML = "Nope. It's spelled M-i-s-s-i-s-s-i-p-p-i b-a-c-k-w-a-r-d-s"
        incorrect2.style.backgroundColor = 'red';
    }
    
    if (question3 == "all") {
        correct++;
        document.getElementById("correct3").innerHTML = '<img src="img/right.png" width="50px" height="50px" >'
    correct3.innerHTML = "Yep! I like these characters and a whole lot more!";
        correct3.style.backgroundColor = '#41ad49';
    }else {
        document.getElementById("incorrect3").innerHTML = '<img src="img/wrong.png" width="40px" height="40px">';
        incorrect3.innerHTML = "Negative. Try picking a more --inclusive-- answer."
        incorrect3.style.backgroundColor = 'red';
    }
    if (question4 == "orange") {
        correct++;
        document.getElementById("correct4").innerHTML = '<img src="img/right.png" width="50px" height="50px" >'
    correct4.innerHTML = "Hey! How did you know?";
        correct4.style.backgroundColor = 'orange';
    }else {
        document.getElementById("incorrect4").innerHTML = '<img src="img/wrong.png" width="40px" height="40px">';
        incorrect4.innerHTML = "Sorry. I'm actually much more partial to orange."
        incorrect4.style.backgroundColor = 'red';
    }
    if (question5 == "a") {
        correct++;
        document.getElementById("correct5").innerHTML = '<img src="img/right.png" width="50px" height="50px" >'
        correct5.innerHTML = "Right! I'm really looking forward to my brother's Monkey Bread";
        correct5.style.backgroundColor = '#41ad49';
    }else {
        document.getElementById("incorrect5").innerHTML = '<img src="img/wrong.png" width="40px" height="40px">';
        incorrect5.innerHTML = "Nada. I am eating at 5:00 this year"
        incorrect5.style.backgroundColor = 'red';
    }
    
    if (question6 == "0") {
        correct++;
        document.getElementById("correct6").innerHTML = '<img src="img/right.png" width="50px" height="50px" >'
    correct6.innerHTML = "Are you psychic or something?";
        correct6.style.backgroundColor = '#41ad49';
    }else {
        document.getElementById("incorrect6").innerHTML = '<img src="img/wrong.png" width="40px" height="40px">';
        incorrect6.innerHTML = "My fingers are busy typing out this code, so I am not actually holding any fingers."
        incorrect6.style.backgroundColor = 'red';
    }
    
   var messages = ["What! No way you should have done that good unless...are you me?", "Almost respectable. Keep studying those answers", 
   "I think you had better whip that brain into shape before you try again!", "Wait, hold on! Are you really that bad, or are you just trying to get the answers?"];
   var range;
   
   if (correct < 1) {
       range = 3;
   }
   if (correct >0 && correct < 3){
       range = 2;
   }
    if (correct >3 && correct < 5){
        range = 1;
    }
    if (correct >5){
        range =0;
    }
    document.getElementById("result").style.visibility = "visible";
    document.getElementById("score").innerHTML = "You got " + (correct/6)*100 + "% correct!";
    document.getElementById("message").innerHTML = messages[range];
}