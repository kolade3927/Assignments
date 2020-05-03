
var guessesLeft = 5;
var secretNumber = Math.floor((Math.random() * 100) + 1);
console.log(secretNumber);
document.getElementById("guessesleft").innerHTML = guessesLeft + " guesses Left.";
document.getElementById("guess-button").onclick = function(e){
	e.preventDefault();
	var userGuess = document.getElementById("user-input").value;
	document.getElementById("user-input").value = "";
	userGuess = parseInt(userGuess);
	if(guessesLeft >= 1){
		if(userGuess == secretNumber){
			guessesLeft = 5;
			secretNumber = Math.floor((Math.random() * 100) + 1);
			document.getElementById("result").innerHTML = "Correct Guess. Game Over!";
		}else{
			if(userGuess < secretNumber){
				document.getElementById("result").innerHTML = "The secret number is higher. Try again!";
			}else{
				document.getElementById("result").innerHTML = "The secret number is lower. Try again!";
			}
			guessesLeft--;
			document.getElementById("guessesleft").innerHTML = guessesLeft + "guesses Left.";
		}
	}else{
		guessesLeft = 5;
		secretNumber = Math.floor((Math.random() * 100) + 1);
		document.getElementById("result").innerHTML = "No more guesses left! You lost! The secret number was "+ secretNumber;
	}
}