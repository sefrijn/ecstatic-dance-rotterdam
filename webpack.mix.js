const mix = require("laravel-mix");

mix
  .sourceMaps()
  .webpackConfig({ devtool: "source-map" })
  .browserSync({
    proxy: "http://edrdam.test/",
    injectChanges: false,
    online: true,
    files: ["*.php", "dist/**/*.css"],
  });
mix.sass("sass/screen.scss", "css");
//   //   .options({
//   //     processCssUrls: false,
//   //   })
//   .version();
