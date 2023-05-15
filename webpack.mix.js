const mix = require("laravel-mix");

mix
  .sourceMaps()
  .webpackConfig({ devtool: "source-map" })
  .browserSync({
    proxy: "http://edrdam.test/",
    injectChanges: false,
    online: true,
    files: ["*.php","templates/*.php","styles/dist/*.css"],
  });
mix.sass("styles/sass/screen.scss", "styles/css");
