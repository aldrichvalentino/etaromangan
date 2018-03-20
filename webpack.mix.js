let mix = require("laravel-mix").setPublicPath("public");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js("resources/assets/js/bootstrap.js", "public/js")
  .js("resources/assets/js/app.js", "public/js")
  .js("resources/assets/js/app-admin.js", "public/js")
  .sass("resources/assets/sass/app.scss", "public/css")
  .sass("resources/assets/sass/app-admin.scss", "public/css")
  .copy("resources/assets/js/views/main.js", "public/js/views/main.js")
  .copy("node_modules/pace-progress/pace.min.js", "public/js/pace.min.js")
  .copy(
    "node_modules/jquery.easing/jquery.easing.min.js",
    "public/js/jquery.easing.min.js"
  )
  .copy(
    "node_modules/waypoints/lib/jquery.waypoints.min.js",
    "public/js/jquery.waypoints.min.js"
  )
  .copy(
    "node_modules/owl.carousel/dist/owl.carousel.min.js",
    "public/js/owl.carousel.min.js"
  )
  .copy(
    "node_modules/magnific-popup/dist/jquery.magnific-popup.min.js",
    "public/js/jquery.magnific-popup.min.js"
  )
  .copy(
    "node_modules/timepicker/jquery.timepicker.min.js",
    "public/js/jquery.timepicker.min.js"
  )
  .copy(
    "node_modules/jquery.animate-number/jquery.animateNumber.min.js",
    "public/js/jquery.animateNumber.min.js"
  )
  .copy(
    "node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
    "public/js/bootstrap-datepicker.min.js"
  )
  // styles copy
  .copy(
    "node_modules/owl.carousel/dist/assets/owl.carousel.min.css",
    "public/css/owl.carousel.min.css"
  )
  .copy(
    "node_modules/owl.carousel/dist/assets/owl.theme.default.min.css",
    "public/css/owl.theme.default.min.css"
  )
  .copy(
    "node_modules/magnific-popup/dist/magnific-popup.css",
    "public/css/magnific-popup.css"
  )
  .copy(
    "node_modules/timepicker/jquery.timepicker.min.css",
    "public/css/jquery.timepicker.min.css"
  )
  .copy(
    "node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
    "public/css/bootstrap-datepicker.min.css"
  )
  .copy(
    "node_modules/animate.css/animate.min.css",
    "public/css/animate.min.css"
  );

if (mix.inProduction()) {
  mix.version();
}
