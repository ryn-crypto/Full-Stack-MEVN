console.log("Hello World!");

for (var i = 0; i < 5; i++) {
  console.log("Hello World! :" + i);
}

console.log("args: " + process.argv);

const args = process.argv.slice(2);

for (let arg of args) {
  console.log("selamat datang " + arg);
}