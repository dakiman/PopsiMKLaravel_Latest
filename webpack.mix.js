const mix = require('laravel-mix');

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
    /*OLD HOME / ADMIN*/
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

    /*NEW HOME*/
    .js('resources/js/homepage.js', 'public/js/homepage.js')
    .sass('resources/sass/homepage.scss', 'public/css/homepage.css')

    /*CAROUSEL FOR PRODUCTS*/
    .js('resources/js/product-carousel.js', 'public/js/product-carousel.js')
    .css('resources/sass/product-carousel.css', 'public/css/product-carousel.css')

    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.tsx?$/,
                    loader: 'ts-loader',
                    exclude: /node_modules/,
                },
            ],
        },
        resolve: {
            extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx'],
        },
        devtool: 'source-map'
    });
