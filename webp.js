const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
  await imagemin(['source/assets/img/*.{jpg,png}'], {
    destination: 'source/assets/img/webp',
    plugins: [
      imageminWebp({quality: 65})
    ]
  });

  console.log('Images optimized');
})();