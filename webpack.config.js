const Encore = require('@symfony/webpack-encore');
const HtmlWebpackPlugin = require('html-webpack-plugin');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('index', './assets/Js/index.js')
    .addEntry('main', './assets/Js/main.js')
    .addEntry('newsletter', './assets/Js/newsletter.js')
    .autoProvidejQuery()
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableVersioning()
    .enableSassLoader()
    .enableVueLoader()
    .addPlugin(new HtmlWebpackPlugin({
        filename: 'static/index.html',
        template: 'assets/Static/index.html',
        favicon: 'assets/Images/favicon.png',
        chunks: ['index']
    }))
;

let config = Encore.getWebpackConfig();
config.resolve.alias['vue$'] = Encore.isProduction() ? 'vue/dist/vue.min.js' : 'vue/dist/vue.js';

module.exports = config;