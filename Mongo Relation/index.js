// // connect to mongose
const mongoose = require('mongoose');

mongoose.connect('mongodb://127.0.0.1/relational_db')
  .then(() => {
    console.log('Connected to MongoDB...');
  })
  .catch(err => {
    console.log('Error: ', err);
  });


const userSchema = new mongoose.Schema({
  name: String,
  addresses: [{
    _id: false,
    street: String,
    city: String,
    country: String
  }]
});


const User = mongoose.model('User', userSchema);

// const makeUser = async () => {
//   const user = new User({
//     name: 'John',
//     addresses: [
//       { street: '123 street', city: 'NY', country: 'USA' }
//     ],
//   })
//   const result = await user.save();
//   console.log(result);
// };

// makeUser();


const addAdresses = async (id) => {
  const user = await User.findById(id);
  user.addresses.push(
    { street: '123 street', city: 'NY', country: 'USA' }
  );
  const result = await user.save();
  console.log(result);
}

addAdresses('65e2ae0debab99a2e5657517');