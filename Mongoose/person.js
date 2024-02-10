const mongoose = require('mongoose');

main().catch(err => console.log(err));

async function main() {
  await mongoose.connect('mongodb://127.0.0.1:27017/person')
    .then(() => console.log('Connected to MongoDB...'))
    .catch(err => console.error('Could not connect to MongoDB...', err));
}

const personSchema = new mongoose.Schema({
  firstName: {
    type: String,
    required: true,
  },
  lastName: {
    type: String,
    required: true,
  },
  age: {
    type: Number,
    required: true,
    min: 0,
  },
});

// use to create virtual properties
// usefull to create properties that are not stored in the database or more validate properties
personSchema.virtual('fullName').get(function () {
  return `${this.firstName} ${this.lastName}`;
});

// use to create middleware
personSchema.pre('save', function (next) {
  console.log('Saving person...');
  next();
});

personSchema.post('save', function (doc, next) {
  console.log('Person saved...', doc);
  next();
});

const Person = mongoose.model('Person', personSchema);

async function createPerson() {
  const person = new Person({
    firstName: 'John',
    lastName: 'Doe',
    age: 25,
  });

  const result = await person.save();
  console.log(result);
  console.log(person.fullName);
}

createPerson();
