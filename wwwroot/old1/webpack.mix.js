let mix = require("laravel-mix");
mix.setPublicPath("public");

mix.browserSync("hesign.com.test");
mix.options({
    processCssUrls: false
});

if (mix.inProduction()) {
    mix.version();
}
mix.sourceMaps()
    .js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .copy("resources/fonts", "public/fonts");
