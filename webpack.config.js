const HtmlWebpackPlugin = require('html-webpack-plugin');
const Encore = require('@symfony/webpack-encore');
const webpack = require('webpack');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/app.js')
    .addEntry('home', './assets/home.js')
    .addEntry('about', './assets/about.js')
    .addEntry('wp-optimize', './assets/wp-optimize.js')
    .addEntry('intake', './assets/intake.js')
    .addEntry('experiments', './assets/experiments.js')
    .addEntry('graph', './assets/graph.js')
    .enableStimulusBridge('./assets/controllers.json')
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .configureBabelPresetEnv(config => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })
    // .enableSassLoader()
    .enableSassLoader(options => { }, { resolveUrlLoader: false })

    .copyFiles({
        from: './node_modules/@fortawesome/fontawesome-free/webfonts',
        to: 'fonts/[path][name].[ext]',
    })
    .copyFiles({
        from: './assets/images',
        to: 'images/[path][name].[ext]',
        pattern: /\.(png|jpg|jpeg|svg|webp|gif)$/
    })
    .configureDevServerOptions(options => {
        options.allowedHosts = 'all';
    });

if (!Encore.isProduction()) {
    try {
        const { BundleAnalyzerPlugin } = require('webpack-bundle-analyzer');
        Encore.addPlugin(new BundleAnalyzerPlugin());
    } catch (e) {
        console.warn('BundleAnalyzerPlugin not installed. Skipping...');
    }

    try {
        const ESLintPlugin = require('eslint-webpack-plugin');
        Encore.addPlugin(new ESLintPlugin({
            extensions: ['js'],
            emitWarning: true,
        }));
    } catch (e) {
        console.warn('ESLintPlugin not installed or misconfigured. Skipping...');
    }
}

if (Encore.isProduction()) {
    try {
        const PurgeCSSPlugin = require('purgecss-webpack-plugin');
        const glob = require('glob');
        const path = require('path');

        Encore.addPlugin(new PurgeCSSPlugin({
            paths: glob.sync(`${path.resolve(__dirname, 'templates')}/**/*.twig`, { nodir: true }),
        }));
    } catch (e) {
        console.warn('PurgeCSSPlugin not installed or misconfigured. Skipping...');
    }

    try {
        const CompressionPlugin = require('compression-webpack-plugin');
        Encore.addPlugin(new CompressionPlugin({
            algorithm: 'brotliCompress',
            filename: '[path][base].br',
            test: /\.(js|css|html|svg)$/,
            compressionOptions: { level: 11 },
            threshold: 10240,
            minRatio: 0.8
        }));
    } catch (e) {
        console.warn('CompressionPlugin not installed or misconfigured. Skipping...');
    }
}

module.exports = Encore.getWebpackConfig();
