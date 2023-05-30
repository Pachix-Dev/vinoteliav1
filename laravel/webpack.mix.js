const mix = require('laravel-mix');

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.pug$/,
                oneOf: [
                    {
                        resourceQuery: /^\?vue/,
                        use: ['pug-plain-loader']
                    },
                    {
                        use: ['raw-loader', 'pug-plain-loader']
                    }
                ]
            }
        ]
    }
});

mix.setPublicPath('../public_html');
mix.js('resources/js/app.js', 'js')
    .stylus('resources/styl/app.styl', 'css')
    .options({
        processCssUrls: false
    });
mix.js('node_modules/direction-reveal/styles/direction-reveal.scss', 'scss')
    .sass('node_modules/direction-reveal/styles/direction-reveal.scss', 'css')
    .options({
        processCssUrls: false
    });
//mix.copyDirectory('resources/images','../public_html/images');
