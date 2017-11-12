var randomNumber = 5 + 6;
        console.log(randomNumber);
        var randomNumber = Math.floor(Math.random() * 99) + 1;
        var guesses = document.querySelector('#guesses');
        var lastResult = document.querySelector('#lastResult');
        var lowOrHi = document.querySelector('#lowOrHi');

        var guessSubmit = document.querySelector('.guessSubmit');
        var guessField = document.querySelector('.guessField');

        var guessCount = 1;
        var resetButton = document.querySelector('#reset');
        guessField.focus();
        resetButton.style.display = 'none';

        var resetButton;

        function checkGuess() {
            var userGuess = Number(guessField.value);
            if (guessCount === 1) {
                guesses.innerHTML = 'Previous guesses: ';

            }
            guesses.innerHTML += userGuess + ' ';
                
                if(userGuess>99){
                    lastResult.innerHTML = "Do not enter numbers bigger than 99!";
                    lastResult.style.backgroundColor = 'yellow';
                } else if(userGuess === randomNumber) {
                    lastResult.innerHTML = 'Congrats! You got it!';
                    lastResult.style.backgroundColor = 'green';
                    lowOrHi.innerHTML = '';
                    setGameOver();
                }else if (guessCount === 7) {
                    lastResult.innerHTML = 'Too bad, you lost!';
                    setGameOver();
                
                }else{
                    lastResult.innerHTML ='Wrong';
                    lastResult.style.backgroundColor = 'red';
                    if(userGuess < randomNumber){
                        lowOrHi.innerHTML = 'That is too low!';
                    } else if(userGuess > randomNumber){
                        lowOrHi.innerHTML = 'That is too high!';
                }
        }
            guessCount++;
            guessField.value = '';
            guessField.focus();
        }
        guessSubmit.addEventListener('click', checkGuess);
        
        function setGameOver(){
            guessField.disabled=true;
            guessSubmit.disabled=true;
            resetButton.style.display='inline';
            resetButton.addEventListener('click', resetGame);
        }
        
        
        function resetGame(){
            guessCount = 1;
            
            var resetParas = document.querySelectorAll('resultParas p');
            for (var i = 0 ; i < resetParas.length ; i++) {
                resetParas[i].textContent = '';
            }
            resetButton.style.display = 'none';
            guessField.disabled=false;
            guessSubmit.disabled=false;
            guessField.value = '';
            guessField.focus();
            
            lastResult.style.backgroundColor = 'white';
            
            randomNumber = Math.floor(Math.random() * 99)+1;
        }
        