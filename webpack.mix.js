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

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'popper.js/dist/umd/popper.js': ['Popper']
})
    .js('resources/js/app.js', 'public/js')
    // .js('resources/js/template/*', 'public/js/homepage.js')
    .js([
        'resources/js/template/jquery.min.js',
        'resources/js/template/bootstrap.bundle.min.js',
        'resources/js/template/isotope.js',
        'resources/js/template/owl.js',
        'resources/js/template/slick.js',
        'resources/js/template/accordions.js',
        'resources/js/template/custom.js',
    ], 'public/js/homepage.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/homepage.scss', 'public/css/homepage.css')
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
