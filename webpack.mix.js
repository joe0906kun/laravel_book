//アップデートなどでなかったため自分で作成。
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
      //
    ]);
