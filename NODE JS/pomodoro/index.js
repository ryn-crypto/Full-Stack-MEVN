const notif = require('node-notifier');
const moment = require('moment');
const argTime = process.argv.slice(2);

const duration = argTime[0];
const breakTime = argTime[1];

let isWorking = false;
let remainingTime = 0;

function formatTime(totalSeconds) {
  const duration = moment.duration(totalSeconds, 'seconds');
  const hours = duration.hours().toString().padStart(2, '0');
  const minutes = duration.minutes().toString().padStart(2, '0');
  const seconds = duration.seconds().toString().padStart(2, '0');

  return `${hours}:${minutes}:${seconds}`;
}


function startTimer() {
  isWorking = !isWorking;
  remainingTime = duration * 60;

  const interval = setInterval(() => {
    remainingTime -= 1;
    console.log(`Remaining time: ${formatTime(remainingTime)}`);

    if (remainingTime === 0) {
      clearInterval(interval);
      notif.notify({
        title: isWorking ? 'Break time!' : 'Time to work!',
        message: isWorking ? 'Take a break!' : 'Time to work!!!',
        seconds: true,
        wait: true
      });
      startTimer(isWorking ? breakTime : duration);
    }
  }, 1000);
}

startTimer(isWorking ? breakTime : duration);