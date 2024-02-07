const path = require('path');
const { v4: uuidv4 } = require('uuid');
const express = require('express');
const methodOverride = require('method-override');
const app = express();

app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(methodOverride('_method'));
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

let comments = [
  {
    id: uuidv4(),
    username: 'John',
    textcomment: 'This is a textcomment'
  },
  {
    id: uuidv4(),
    username: 'Jane',
    textcomment: 'This is another textcomment'
  },
  {
    id: uuidv4(),
    username: 'Doe',
    textcomment: 'This is a textcomment'
  },
  {
    id: uuidv4(),
    username: 'Smith',
    textcomment: 'This is another textcomment'
  },
  {
    id: uuidv4(),
    username: 'Doe',
    textcomment: 'This is a textcomment'
  },
];

app.get('/', (req, res) => {
  res.send('Hello World');
});

app.get('/comments', (req, res) => {
  res.render('comments/index', { comments });
});

app.get('/comment/create', (req, res) => {
  res.render('comments/create');
});

app.post('/comments', (req, res) => {
  const { username, textcomment } = req.body;
  comments.push({ username, textcomment });
  console.log(req.body);
  res.redirect('/comments');
});

app.get('/comments/:id', (req, res) => {
  const { id } = req.params;
  const comment = comments.find(c => c.id === id);
  res.render('comments/show', { comment });
});

app.get('/comments/:id/edit', (req, res) => {
  const { id } = req.params;
  const comment = comments.find(c => c.id === id);
  res.render('comments/edit', { comment });
});

app.patch('/comments/:id', (req, res) => {
  const { id } = req.params;
  const newCommentText = req.body.textcomment;
  const foundComment = comments.find(c => c.id === id);
  foundComment.textcomment = newCommentText;
  res.redirect('/comments');
});

app.delete('/comments/:id', (req, res) => {
  const { id } = req.params;
  comments = comments.filter(c => c.id !== id);
  res.redirect('/comments');
});

app.get('/order', (req, res) => {
  const { item, qty } = req.body;
  res.send(`Item ordered: ${item}, Quantity: ${qty}`);
});

app.listen(3000, () => {
  console.log('Server is running on: http://localhost:3000');
});