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
  age: Number
});

const User = mongoose.model('User', userSchema);

const tweetSchema = new mongoose.Schema({
  text: String,
  likes: Number,
  user: { type: mongoose.Schema.Types.ObjectId, ref: 'User' } // ref to User model with ObjectId
});

const Tweet = mongoose.model('Tweet', tweetSchema);

const makeTweets = async () => {
  // const user = new User({ name: 'Kobe', age: 41 });
  // await user.save();
  const user = await User.findOne({ name: 'Kobe' });
  const tweet1 = new Tweet({ text: 'Mamba Mentality warriror', likes: 0 });
  tweet1.user = user;
  tweet1.save();
}

// makeTweets();

const showTweets = async (id) => {
  const tweet = await Tweet.findById(id).populate('user');
  console.log(tweet);
}

showTweets('65e3f15e9b708958389cf66d');