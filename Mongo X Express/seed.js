const mongose = require('mongoose');
const Product = require('./models/product');

// connect to MongoDB
mongose.connect('mongodb://127.0.0.1/shop_db')
  .then((res) => {
    console.log('Connected to MongoDB');
  })
  .catch((err) => {
    console.log('Error connecting to MongoDB', err);
  });

const products = [
  {
    name: 'Sepatu Nike Air Max',
    brand: 'Nike',
    price: 1200000,
    color: 'Black',
    category: 'Sepatu'
  },
  {
    name: 'Baju Kemeja',
    brand: 'Uniqlo',
    price: 300000,
    color: 'White',
    category: 'Baju'
  },
  {
    name: 'Celana Jeans',
    brand: 'Levi\'s',
    price: 800000,
    color: 'Blue',
    category: 'Celana'
  },
  {
    name: 'Tas Ransel',
    brand: 'Eiger',
    price: 400000,
    color: 'Black',
    category: 'Tas'
  },
  {
    name: 'Topi Trucker',
    brand: 'New Era',
    price: 200000,
    color: 'Red',
    category: 'Aksesoris'
  },
  {
    name: 'Sandal Gunung',
    brand: 'Eiger',
    price: 300000,
    color: 'Black',
    category: 'Sepatu'
  }
];

Product.insertMany(products).then((res) => {
  console.log('Data inserted');
  console.log(res);
}).catch((err) => {
  console.log('Error inserting data', err);
});