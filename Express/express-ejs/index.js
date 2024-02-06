const express = require('express');
const app = express();
const path = require('path');

app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));
app.use(express.static(path.join(__dirname, 'public')));

app.get('/', (req, res) => {
  res.render('home');
});

app.get('/rand', (req, res) => {
  const rand = Math.floor(Math.random() * 10) + 1;
  res.render('rand', { num: rand });
});

app.get('/t/:tag', (req, res) => {
  const { tag } = req.params;
  res.render('tag', { tag });
});

app.listen(8080, (req, res) => {
  console.log('Server is running on port 8080');
});