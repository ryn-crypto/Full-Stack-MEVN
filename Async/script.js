// promise
const contohPromise = () => {
  return new Promise((resolve, reject) => {
    resolve(() => {
      console.log('berhasil')
    });
    reject(() => {
      console.log('gagal')
    });
  })
};


// async await
async function contohAsync() {
  try {
    result();
  } catch (error) {
    console.log(error)
  }
}