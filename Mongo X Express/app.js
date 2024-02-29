const path = require('path');
const express = require('express');
const methodOverride = require('method-override');
const mongoose = require('mongoose');
const app = express();

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

app.listen(3000, () => {
  console.log('Server is running on port 3000');
})

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
  res.render("products/new");
});

app.post('/product', async (req, res) => {
  const product = new Product(req.body);
  await product.save();
  res.redirect('/product');
});

app.get('/product/:id', async (req, res) => {
  const id = req.params.id;
  const product = await Product.findById(id);
  res.render("products/show", { product });
});

app.get('/product/:id/edit', async (req, res) => {
  const id = req.params.id;
  const product = await Product.findById(id);
  res.render("products/edit", { product });
});

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