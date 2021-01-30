const mix = require("laravel-mix");

// Web

mix.sass("resources/sass/bulma.scss", "public/css/web");
mix.sass("resources/sass/font-awesome.scss", "public/assets/web/icons");
mix.sass("resources/sass/bulma-social.scss", "public/css/web");

// Dashboard

// ...

// Configuración

mix.browserSync("http://localhost:8000");
mix.disableNotifications();
