const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
  await imagemin(['source/assets/img/exhibitors/*.{jpg,png}'], {
    destination: 'source/assets/img/exhibitors/',
    plugins: [
      imageminWebp({quality: 65})
    ]
  });

  console.log('Images optimized');
})();