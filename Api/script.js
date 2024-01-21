// fetch

// fetch('https://swapi.dev/api/people/1')
//   .then((response) => {
//     if (!response.ok) {
//       throw new Error(`HTTP error! status: ${response.status}`);
//     }
//     return response.json()
//   })
//   .then(data => {
//     console.log(data)
//   })
//   .catch(e => {
//     console.log('There has been a problem with your fetch operation: ' + e.message);
//   });


// axios

// axios.get('https://swapi.dev/api/people/1').then((response) => {
//   console.log(response);
// }).catch((error) => {
//   console.log(error.message);
// });


// async/await with axios

// const people = async (id) => {
//   try {
//     const response = await axios.get(`https://swapi.dev/api/people/${id}`);
//     console.log(response.data);
//   } catch (error) {
//     console.log(error);
//     console.log(error.message);
//     console.log(error.response.status);
//     console.log(error.response.data);
//   }
// };


// practice 

const joke = document.querySelector('#joke');
const button = document.querySelector('button');

const addJoke = async () => {
  const jokeText = await getJoke();
  const jokeEl = document.createElement('li');
  jokeEl.innerText = jokeText;
  joke.appendChild(jokeEl);
}

const getJoke = async () => {
  try {
    const config = { headers: { Accept: 'application/json' } };
    const response = await axios.get('https://icanhazdadjoke.com/', config);
    return response.data.joke;
  }
  catch (error) {
    return 'No jokes available, sorry :(';
  }

}

button.addEventListener('click', addJoke);