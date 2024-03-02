const express = require('express');
const morgan = require('morgan');
const errorHandler = require('./errorHandler'); // import error handler
const e = require('express');

const app = express();

// Middleware
// app.use(morgan('dev'));

app.use((req, res, next) => {
  req.requestTime = Date.now();
  console.log(req.method, req.url);
  next();
})

// create middleware function to route to admin page
const auth = (req, res, next) => {
  const { password } = req.query;
  if (password === 'chickennuggets') {
    next();
  }
  // error handling middleware (use throw new Error)
  throw new errorHandler('Password Required', 401);
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

app.get('/general/error', (req, res) => {
  throw new errorHandler();
})

app.get('/error', (req, res) => {
  chicken.fly(); // fake error
})

// app.use((err, req, res, next) => {
//   console.log('*****************');
//   console.log('**********Error**********');
//   console.log('*****************');
//   next(err);
// })

app.use((err, req, res, next) => {
  const { status = 500, message = 'someting went wrong' } = err;
  res.status(status).send(message);
  next(err);
})

app.use((req, res) => {
  res.status(404).send('Not Found');
})


app.listen(3000, () => {
  console.log('Server is running on port 3000');
})