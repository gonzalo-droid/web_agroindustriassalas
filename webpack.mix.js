const mix = require("laravel-mix");

// mix.js("resources/js/app.js", "public/js").sass(
//     "resources/sass/bulma.scss",
//     "public/css"
// );

mix.sass("resources/sass/bulma.scss", "public/css");

mix.browserSync("http://localhost:8000");

mix.disableNotifications();
