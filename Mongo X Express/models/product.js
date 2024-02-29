const mongose = require('mongoose');

const productSchema = new mongose.Schema({
  name: {
    type: String,
    required: true
  },
  brand: {
    type: String,
    required: true
  },
  price: {
    type: Number,
    required: true
  },
  color: {
    type: String,
    required: true
  },
  category: {
    type: String,
    enum: ['Baju', 'Celana', 'Sepatu', 'Tas', 'Aksesoris', 'Lainnya'],
    required: true
  }
});

const Product = mongose.model('Product', productSchema);

module.exports = Product;