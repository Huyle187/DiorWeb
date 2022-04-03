const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass("resources/scss/header.scss", "public/frontend/css")
    .sass("resources/scss/side-panel-overplay.scss", "public/frontend/css")
    .sass("resources/scss/footer.scss", "public/frontend/css")
    .sass("resources/scss/home.scss", "public/frontend/css")
    .sass("resources/scss/beauty.scss", "public/frontend/css")
    .sass("resources/scss/fashion.scss", "public/frontend/css")
    .sass("resources/scss/collection.scss", "public/frontend/css")
    .sass("resources/scss/collections.scss", "public/frontend/css")
    .sass("resources/scss/service-messaging.scss", "public/frontend/css")
    .sass("resources/scss/item.scss", "public/frontend/css")
    .sass("resources/scss/footer-explore-more.scss", "public/frontend/css")
    .sass("resources/scss/product-details.scss", "public/frontend/css")
    .sass("resources/scss/cart-table.scss", "public/frontend/css")
    .sass("resources/scss/login.scss", "public/backend/css");
