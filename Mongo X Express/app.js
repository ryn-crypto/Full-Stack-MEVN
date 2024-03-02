const path = require('path');
const express = require('express');
const methodOverride = require('method-override');
const mongoose = require('mongoose');
const app = express();
const ErrorHandler = require('./ErrorHandler');

// import the product model
const Product = require('./models/product');

// connect to MongoDB
mongoose.connect('mongodb://127.0.0.1/shop_db')
  .then((res) => {
    console.log('Connected to MongoDB');
    // console.log(res);
  })
  .catch((err) => {
    console.log('Error connecting to MongoDB', err);
  });

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
app.use(express.urlencoded({ extended: true }));
app.use(methodOverride('_method'));

// create helper function to handle errors in async functions
function wrapAsync(fn) {
  return function (req, res, next) {
    fn(req, res, next).catch(e => next(e));
  }
}


app.get('/', (req, res) => {
  res.send('Hello World');
});

app.get('/product', async (req, res) => {
  const { category } = req.query;

  if (category) {
    const products = await Product.find({ category });
    return res.render("products/index", { products, category });
  } else {
    const products = await Product.find();
    res.render("products/index", { products, category: 'All' });
  }
});

app.get('/product/create', (req, res) => {
  throw new ErrorHandler(503, 'This is a random error');
  res.render("products/new");
});

// using wrapAsync function to handle errors in async functions
app.post('/product', wrapAsync(async (req, res) => {
  const product = new Product(req.body);
  await product.save();
  res.redirect('/product');
}));

// use middleware to handle errors in async functions
app.get('/product/:id', async (req, res, next) => {
  // using try-catch block to handle errors in async functions
  try {
    const id = req.params.id;
    const product = await Product.findById(id);
    res.render("products/show", { product });
  } catch (e) {
    next(new ErrorHandler(404, 'Product not found'));
  }
});

// using wrapAsync function to handle errors in async functions
app.get('/product/:id/edit', wrapAsync(async (req, res) => {
  const id = req.params.id;
  const product = await Product.findById(id);
  res.render("products/edit", { product });
}));

app.put('/product/:id', async (req, res) => {
  const { id } = req.params;
  const product = await Product.findByIdAndUpdate(id, req.body, { runValidators: true });
  res.redirect(`/product/${product._id}`);
});

app.delete('/product/:id', async (req, res) => {
  const { id } = req.params;
  await Product.findByIdAndDelete(id);
  res.redirect('/product');
});

// middleware to handle errors in mongose
app.use((err, req, res, next) => {
  console.dir(err);
  if (err.name === 'ValidationError') {
    err.statusCode = 400;
    err.message = Object.values(err.errors).map(val => val.message).join(', ');
  }
  if (err.name === 'CastError') {
    err.statusCode = 404;
    err.message = 'Product not found';
  }
  next(err);
});

// middleware to handle errors
app.use((err, req, res, next) => {
  const { statusCode = 500, message = 'Something went wrong' } = err;
  res.status(statusCode).send(message);
});

app.listen(3000, () => {
  console.log('Server is running on port 3000');
})