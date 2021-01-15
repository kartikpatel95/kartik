let mix = require("laravel-mix");

const config = {
    css: {
        src: './assets/css/*.css',
        dest: './dist/css'
    },
    scss: {
        src: './assets/scss/layout.scss',
        dest: './dist/css'
    },
    js: {
        src: [
            './assets/js/timeline.js',
            './assets/js/googlemap.js',
            './assets/js/script.js',
        ],
        dest: './dist/javascript'
    },
    img: {
        src: './assets/img',
        dest: './dist/img'
    },
    vendor: {
        javascript: [
            'node_modules/bootstrap/dist/js/bootstrap.min.js',
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/lightbox2/dist/js/lightbox.min.js',
        ],
        img: {
            lightbox: [
                'node_modules/lightbox2/dist/images/*.png',
                'node_modules/lightbox2/dist/images/*.gif',
            ]
        }
    },
    watch: [
        './templates/**/*.ss',
        './assets/scss/**/*.scss',
        './assets/css/**/*.css',
        './assets/javascript/**/*.js'
    ],
};

mix.sass(config.scss.src, config.scss.dest).sourceMaps()
    .copy(config.css.src, config.css.dest)
    .copy(config.js.src, config.js.dest)
    .copy(config.vendor.img.lightbox, './dist/img/lightbox')
    .copy(config.vendor.javascript, './dist/javascript/vendor')
    .copyDirectory(config.img.src, config.img.dest)
    .browserSync({
        open: "external",
        proxy: "kartik.vcap.me",
        host: "kartik.vcap.me",
        injectChanges: true,
        files: config.watch,
    });
