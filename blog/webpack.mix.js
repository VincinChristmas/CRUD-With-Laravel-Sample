const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
       processCssUrls: false,
       postCss: [require('autoprefixer')],
       sassOptions: {
           outputStyle: 'expanded',
           includePaths: ['node_modules']
       }
   })
   .version()
   .sourceMaps(); 