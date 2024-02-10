const mongoose = require('mongoose');

main().catch(err => console.log(err));

async function main() {
  await mongoose.connect('mongodb://127.0.0.1:27017/movie')
    .then(() => console.log('Connected to MongoDB...'))
    .catch(err => console.error('Could not connect to MongoDB...', err));
}

const movieSchema = new mongoose.Schema({
  title: String,
  year: Number,
  genre: String,
  director: String,
  rating: Number,
});

const Movie = mongoose.model('Movie', movieSchema);

async function createMovie() {
  const movie = new Movie({
    title: 'The Dark Knight',
    year: 2008,
    score: 9.0,
    director: 'Christopher Nolan'
  });

  const result = await movie.save();
  console.log(result);
}

// createMovie();


async function insertMany() {
  const movies = [
    { title: 'The Dark Knight', year: 2008, genre: 'Action', director: 'Christopher Nolan', rating: 9.0 },
    { title: 'The Dark Knight Rises', year: 2012, genre: 'Action', director: 'Christopher Nolan', rating: 8.4 },
    { title: 'Inception', year: 2010, genre: 'Action', director: 'Christopher Nolan', rating: 8.8 },
    { title: 'Interstellar', year: 2014, genre: 'Sci-Fi', director: 'Christopher Nolan', rating: 8.6 },
    { title: 'The Prestige', year: 2006, genre: 'Drama', director: 'Christopher Nolan', rating: 8.5 },
  ];

  const result = await Movie.insertMany(movies);
  console.log("insertMany successfull...");
  console.log(result);
}

// insertMany();


async function getMovies() {
  const movies = await Movie.find();
  console.log(movies);
}

// getMovies();

async function getMoviesWithFilter() {
  const movies = await Movie.find({ year: 2008, rating: { $gte: 8.5 } });
  console.log(movies);
}

// getMoviesWithFilter();

async function getMoviesByid() {
  const movie = await Movie.findById('65c6630e92f018f85af9890f');
  console.log(movie);
}

// getMoviesByid();

async function updateMovie() {
  const movie = await Movie.findById('65c6630e92f018f85af9890f');
  if (!movie) return;

  movie.rating = 9.7;
  const result = await movie.save();
  console.log(result);
}

// updateMovie();

async function updateMany() {
  console.log(" before updateMany");
  console.log(await Movie.find({ director: 'Christopher Nolan' }));
  const result = await Movie.updateMany({ director: 'Christopher Nolan' }, {
    $set: {
      director: 'Chris Nolan'
    }
  });
  console.log(result());
}

// updateMany();

async function removeMovie() {
  const result = await Movie.deleteOne({ _id: '65c6630e92f018f85af9890f' });
  console.log(result);
}

// removeMovie();
// getMoviesByid();


async function removeMany() {
  const result = await Movie.deleteMany({ director: 'Chris Nolan' });
  console.log(result);
}

// removeMany();
getMovies();