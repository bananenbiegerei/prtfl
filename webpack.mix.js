require('dotenv').config();
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix
  .js('src/js/app.js', 'js')
  .sass(
    'src/scss/style.scss',
    'css',
    {
      sassOptions: {
        includePaths: ['node_modules'],
      },
    },
  )
  .options({
    postCss: [ tailwindcss('./tailwind.config.js') ],
    processCssUrls: false,
  })
  .sourceMaps()
  .setPublicPath('dist')
  //.copyDirectory('src/fonts', 'dist/fonts')
  .copyDirectory('src/img', 'dist/img')
  .browserSync({
    open: true,
    proxy: process.env.BROWSERSYNC_PROXY_URL,
    watch: true,
    files: [
      './dist/css/style.css',
      './dist/js/app.js',
      './**/*.php'
    ]
  });

