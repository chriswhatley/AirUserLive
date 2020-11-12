const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
  await imagemin(['source/assets/img/layout/*.{jpg,png}'], {
    destination: 'source/assets/img/layout/',
    plugins: [
      imageminWebp({quality: 75})
    ]
  });

  console.log('Images optimized...');
})();