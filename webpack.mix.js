const {EnvironmentPlugin} = require('webpack');
const mix = require('laravel-mix');
const glob = require('glob');
const path = require('path');
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
/*
 |--------------------------------------------------------------------------
 | Configure mix
 |--------------------------------------------------------------------------
 */

mix.options({
    resourceRoot: process.env.ASSET_URL || undefined,
    processCssUrls: false,
    // postCss: [require('autoprefixer')]
});
/*
 |--------------------------------------------------------------------------
 | Configure Webpack
 |--------------------------------------------------------------------------
 */

mix.webpackConfig({
    output: {
        publicPath: process.env.ASSET_URL || undefined,
        libraryTarget: 'umd'
    },

    plugins: [
        new EnvironmentPlugin({
            // Application's public url
            BASE_URL: process.env.ASSET_URL ? `${process.env.ASSET_URL}/` : '/'
        })
    ],
    module: {
        rules: [
            {
                test: /\.es6$|\.js$/,
                include: [
                    path.join(__dirname, 'node_modules/bootstrap/'),
                    path.join(__dirname, 'node_modules/popper.js/'),
                    path.join(__dirname, 'node_modules/shepherd.js/')
                ],
                loader: 'babel-loader',
                options: {
                    presets: [['@babel/preset-env', {targets: 'last 2 versions, ie >= 10'}]],
                    plugins: [
                        '@babel/plugin-transform-destructuring',
                        '@babel/plugin-proposal-object-rest-spread',
                        '@babel/plugin-transform-template-literals'
                    ],
                    babelrc: false
                }
            }
        ]
    },
    externals: {
        jquery: 'jQuery',
        moment: 'moment',
        jsdom: 'jsdom',
        velocity: 'Velocity',
        hammer: 'Hammer',
        pace: '"pace-progress"',
        chartist: 'Chartist',
        'popper.js': 'Popper',

        // blueimp-gallery plugin
        './blueimp-helper': 'jQuery',
        './blueimp-gallery': 'blueimpGallery',
        './blueimp-gallery-video': 'blueimpGallery'
    }
});

/*
 |--------------------------------------------------------------------------
 | Configure sass
 |--------------------------------------------------------------------------
 */

const sassOptions = {
    precision: 5
};

/*
 |--------------------------------------------------------------------------
 | Vendor assets
 |--------------------------------------------------------------------------
 */

function mixAssetsDir(query, cb) {
    (glob.sync('resources/assets/' + query) || []).forEach(f => {
        f = f.replace(/[\\\/]+/g, '/');
        cb(f, f.replace('resources/assets/', 'public/assets/'));
    });
}

mixAssetsDir('styles/vendors/**/*.css', (src, dest) => mix.copy(src, dest));
mixAssetsDir('styles/vendors/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/\.scss$/, '.css'), {sassOptions})
);

mixAssetsDir('scripts/vendors/**/*.js', (src, dest) => mix.js(src, dest));
mixAssetsDir('styles/vendors/**/*.js', (src, dest) => mix.js(src, dest));
mixAssetsDir('styles/*.{png,jpg,jpeg,gif,svg}', (src, dest) => mix.scripts(src, dest));
mixAssetsDir('styles/**/*.{png,jpg,jpeg,gif,svg}', (src, dest) => mix.scripts(src, dest));
/*
 |--------------------------------------------------------------------------
 | Global Images
 |--------------------------------------------------------------------------
 */
mix.copyDirectory('resources/assets/images', 'public/assets/images');

/*
 |--------------------------------------------------------------------------
 | Global Fonts
 |--------------------------------------------------------------------------
 */
mixAssetsDir('fonts/*/*', (src, dest) => mix.copy(src, dest));
mixAssetsDir('fonts/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), {sassOptions})
);

mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');
/*






/*
 |--------------------------------------------------------------------------
 | Componentes del front
 |--------------------------------------------------------------------------
 */

// Core javascripts
mixAssetsDir('scripts/front/**/*.js', (src, dest) => mix.js(src, dest));

//Core styles
mixAssetsDir('styles/front/**/*.css', (src, dest) => mix.copy(src, dest));
mixAssetsDir('styles/front/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/\.scss$/, '.css'), {sassOptions})
);








/*
 |--------------------------------------------------------------------------
 | componentes del back
 |--------------------------------------------------------------------------
 */


// Core stylesheets
mixAssetsDir('vendor/dashboard/scss/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), {sassOptions})
);

// Core javascripts
mixAssetsDir('scripts/dashboard/**/*.js', (src, dest) => mix.js(src, dest));

// Libs
mixAssetsDir('vendor/dashboard/libs/**/*.js', (src, dest) => mix.js(src, dest));
mixAssetsDir('vendor/dashboard/libs/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/\.scss$/, '.css'), {sassOptions})
);
mixAssetsDir('vendor/dashboard/libs/**/*.{png,jpg,jpeg,gif}', (src, dest) => mix.copy(src, dest));

// Fonts
mixAssetsDir('vendor/dashboard/fonts/*/*', (src, dest) => mix.copy(src, dest));
mixAssetsDir('vendor/dashboard/fonts/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), {sassOptions})
);

/*
 |--------------------------------------------------------------------------
 | Application assets
 |--------------------------------------------------------------------------
 */

mixAssetsDir('scripts/dashboard/**/*.js', (src, dest) => mix.scripts(src, dest));
mixAssetsDir('styles/sass/dashboard/**/*.css', (src, dest) => mix.copy(src, dest));
mixAssetsDir('styles/sass/dashboard/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/\.scss$/, '.css'), {sassOptions})
);

mix.copy('node_modules/boxicons/fonts/*', 'public/assets/vendor/dashboard/fonts/boxicons');

mix.version();
