// // connect to mongose
const mongoose = require('mongoose');

mongoose.connect('mongodb://127.0.0.1/relational_db')
  .then(() => {
    console.log('Connected to MongoDB...');
  })
  .catch(err => {
    console.log('Error: ', err);
  });


const productSchema = new mongoose.Schema({
  name: String,
  price: Number,
  season: {
    type: String,
    enum: ['Spring', 'Summer', 'Fall', 'Winter']
  }
});

const Product = mongoose.model('Product', productSchema);

// Product.insertMany([
//   { name: 'Grapefruit', price: 1.99, season: 'Summer' },
//   { name: 'Apple', price: 1.29, season: 'Winter' },
//   { name: 'Peach', price: 2.99, season: 'Spring' }
// ]);


// using ref to connect two models (one to many)
const farmSchema = new mongoose.Schema({
  name: String,
  city: String,
  products: [{ type: mongoose.Schema.Types.ObjectId, ref: 'Product' }]
});

const Farm = mongoose.model('Farm', farmSchema);

const makeFarm = async () => {
  const farm = new Farm({ name: 'Full Belly Farms', city: 'Guinda, CA' });
  const grapefruit = await Product.findOne({ name: 'Grapefruit' });
  farm.products.push(grapefruit);
  const result = await farm.save();
  console.log(result);
}

// makeFarm();

// using populate to get the products of a farm
Farm.findOne({ name: 'Full Belly Farms' }).populate("products").then(farm => {
  // console.log(farm)
  for (let product of farm.products) {
    console.log(product)
  }
});