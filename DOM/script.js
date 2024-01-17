let p1Button = document.querySelector('.p1-button');
let p2Button = document.querySelector('.p2-button');
let p1Display = document.querySelector('.p1-display');
let p2Display = document.querySelector('.p2-display');
let resetButton = document.querySelector('.reset-button');
let winPointOption = document.querySelector('#win-point');

console.log(winPointOption);

let p1Score = 0;
let p2Score = 0;
let gameOver = false;
let winningScore = 5;


p1Button.addEventListener('click', function () {
  if (!gameOver) {
    p1Score++;
    if (p1Score === winningScore) {
      gameOver = true;
    }
    p1Display.textContent = p1Score;
  }
});

p2Button.addEventListener('click', function () {
  if (!gameOver) {
    p2Score++;
    if (p2Score === winningScore) {
      gameOver = true;
    }
    p2Display.textContent = p2Score;
  }
});


// win points option
winPointOption.addEventListener('change', function () {
  winningScore = parseInt(this.value);
  reset();
});

// reset function
function reset() {
  p1Score = 0;
  p2Score = 0;
  p1Display.textContent = p1Score;
  p2Display.textContent = p2Score;
  gameOver = false;
}

resetButton.addEventListener('click', function () {
  reset();
});

