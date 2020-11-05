const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
  await imagemin(['source/assets/img/sponsors/*.{jpg,png}'], {
    destination: 'source/assets/img/sponsors/',
    plugins: [
      imageminWebp({quality: 75})
    ]
  });

  console.log('Images optimized');
})();