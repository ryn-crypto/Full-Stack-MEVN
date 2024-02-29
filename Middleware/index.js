const express = require('express');
const morgan = require('morgan');

const app = express();

// Middleware
// app.use(morgan('dev'));


app.use((req, res, next) => {
  req.requestTime = Date.now();
  console.log(req.method, req.url);
  next();
})

const auth = (req, res, next) => {
  const { password } = req.query;
  if (password === 'chickennuggets') {
    next();
  }
  res.send('Password Required');
}

app.get('/', (req, res) => {
  res.send('Hello World');
})

app.get('/about', (req, res) => {
  res.send('About Page');
})

app.get('/admin', auth, (req, res) => {
  res.send('Admin Page');
})

app.use((req, res) => {
  res.status(404).send('Not Found');
})

app.listen(3000, () => {
  console.log('Server is running on port 3000');
})