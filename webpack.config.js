const HtmlWebpackPlugin = require('html-webpack-plugin');
const FileLoader = require('file-loader');
const Encore = require('@symfony/webpack-encore');
const webpack = require('webpack');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or subdirectory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('app', './assets/app.js')
    .addEntry('merrychristmas', './assets/merry-christmas.js')
    .addEntry('wp-optimize', './assets/wp-optimize.js')

    // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
    .enableStimulusBridge('./assets/controllers.json')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // configure Babel
    // .configureBabel((config) => {
    //     config.plugins.push('@babel/a-babel-plugin');
    // })

    // enables and configure @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })
    // Add this section to include Bootstrap
    .addPlugin(new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
        Popper: ['popper.js', 'default'],
    }))

    // enables Sass/SCSS support
    .enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use React
    //.enableReactPreset()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    .copyFiles({
        from: './node_modules/@fortawesome/fontawesome-free/webfonts',
        to: 'fonts/[path][name].[ext]',
    })
    // uncomment if you're having problems with a jQuery plugin
    .autoProvidejQuery()
    // Add the HtmlWebpackPlugin to the configuration
    .addPlugin(new HtmlWebpackPlugin({
        template: 'templates/base.html.twig',
        // Add the preconnect link tag to the HtmlWebpackPlugin
        preconnect: ['https://fonts.gstatic.com']
    }))
    .addPlugin(new HtmlWebpackPlugin({
        template: './templates/base.html.twig',
        // the following line adds your Google Fonts link tag to the head section of the HTML file
        headTags: '<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">'
    }))
    .copyFiles({
        from: './assets/images',
        //optional target path, relative to the output dir
        to: 'images/[path][name].[ext]',

        //if versioning is enabled, add the file hash too
        // to: 'images/[path][name].[hash:8].[ext]',
        //only copy files matching this pattern
        pattern: /\.(png|jpg|jpeg|svg|webp|gif)$/
    })
    .configureDevServerOptions(options => {
        options.allowedHosts = 'all';
        // in older Webpack Dev Server versions, use this option instead:
        // options.firewall = false;
    })
    ;

module.exports = Encore.getWebpackConfig();
