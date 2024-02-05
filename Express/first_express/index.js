const express = require('express');
const app = express();

// app.use((req, res) => {
//   res.send('Hello World');
//   console.log('Request received');
// });

// routing 
app.get('/', (req, res) => {
  res.send('Hello World this is the home page');
  console.log('Request received');
});

app.get('/cat', (req, res) => {
  res.send('this is a cat page');
  console.log('Request received');
});

app.post('/cat', (req, res) => {
  res.send('this is a cat page');
  console.log('Request received');
});

// dynamic routing
app.get('/blog/:id', (req, res) => {
  res.send(`this is a blog page with id ${req.params.id}`);
  console.log('Request received');
});

// query string
app.get('/search', (req, res) => {
  res.send(`this is a search page with title ${req.query.title} and author ${req.query.author}`);
  console.log(`request with ${req.query.title}`);
  console.log('Request received');
});

app.get('*', (req, res) => {
  res.send('404 page not found');
  console.log('Request received');
});

app.listen(8080, () => {
  console.log('Server is running on port 8080');
});