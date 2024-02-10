const mongoose = require('mongoose');

main().catch(err => console.log(err));

async function main() {
  await mongoose.connect('mongodb://127.0.0.1:27017/product')
    .then(() => console.log('Connected to MongoDB...'))
    .catch(err => console.error('Could not connect to MongoDB...', err));
}

const productSchema = new mongoose.Schema({
  name: {
    type: String,
    required: true,
  },
  brand: {
    type: String,
    required: true,
  },
  price: {
    type: Number,
    required: true,
    min: 0,
  },
  color: {
    type: String,
    required: true,
  },
  size: [{
    type: String,
    required: true,
  }],
  descriotion: {
    type: String,
    required: true,
    maxLength: 150,
  },
  condition: {
    type: String,
    enum: ['New', 'Used'],
    default: 'New',
    required: true,
  },
  stock: {
    type: Number,
    required: true,
    min: [0, 'Stock must be greater than 0'],
  },
  available: {
    online: {
      type: Boolean,
      required: true,
    },
    inStore: {
      type: Boolean,
      required: true,
    }
  },
});

// digunakan di instance
productSchema.methods.outOfStock = function () {
  this.stock = 0;
  return this.save();
}

// bisa di panggil langsung
productSchema.statics.closeOut = function () {
  return this.updateMany({}, { stock: 0, available: { online: false, inStore: false } });
}

// membuat model
const Product = mongoose.model('Product', productSchema);

const changeStock = async (id) => {
  const product = await Product.findById(id);
  await product.outOfStock();
  console.log(product);
}

// const product = new Product({
//   name: 'T-shirt Raglan',
//   brand: 'H&M',
//   price: 10000,
//   color: 'Black',
//   size: ['S', 'M', 'L'],
//   descriotion: 'Men\'s T-shirt Raglan-sleeved T-shirt in soft cotton jersey with a print motif.',
//   condition: 'New',
//   stock: 100,
//   available: {
//     online: true,
//     inStore: true,
//   }
// });

// product.save().then((result) => console.log('T-shirt Raglan saved...' + result)).catch(err => console.error('T-shirt Raglan not saved...', err));


async function updateOneProduct(id) {
  const product = await Product.findOneAndUpdate({ _id: id }, {
    $set: {
      name: 'T-shirt Raglan',
      brand: 'H&M',
      price: 54000,
      color: 'Black',
      size: ['S', 'M', 'L'],
      descriotion: 'Men\'s T-shirt Raglan-sleeved T-shirt in soft cotton jersey with a print motif.',
      condition: 'New',
      stock: -100,
      available: {
        online: true,
        inStore: true,
      }
    }
  }, { new: true, runValidators: true })
    .then((result) => console.log('T-shirt Raglan updated...' + result))
    .catch(err => console.error('T-shirt Raglan not updated...', err));

}

updateOneProduct('65c785c7b48f2c9ba3c447b0');