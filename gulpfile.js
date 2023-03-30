const { src, dest, watch, series } = require('gulp');
const gulpSass = require('gulp-sass');
const nodeSass = require('node-sass');
const sass = gulpSass(nodeSass);
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-clean-css');
const terser = require('gulp-terser');
const jsobs = require('gulp-javascript-obfuscator');
const concat = require('gulp-concat');
const htmlmin = require('gulp-htmlmin');
const imagemin = require('gulp-imagemin'); 
const imagewebp = require('gulp-webp');

// functions
function copyfile_php() {
    return src(['src/*.php', 'src/*/*.php', 'src/*/*/*.php']) 
    .pipe(htmlmin({collapseWhitespace: true, ignoreCustomFragments: [ /<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/ ]}))
    .pipe(dest('dist'))
}
function copyfile_html() {
    return src(['src/*.html','src/*/*.html','src/*/*/*.html'])
    .pipe(htmlmin({collapseWhitespace: true, ignoreCustomFragments: [ /<%[\s\S]*?%>/, /<\?[=|html]?[\s\S]*?\?>/ ]}))
    .pipe(dest('dist'))
}
function compilescss() {
    return src(['src/scss/*/*.scss','src/css/*.css'])
    .pipe(sass())
    .pipe(prefix())
    .pipe(minify())
    .pipe(dest('dist/css/'))
}
function jsmin() {
    return src('src/js/*.js')
    .pipe(terser())
    .pipe(jsobs())
    .pipe(dest('dist/js'))
}
function jsmin_concat() {
    return src(['src/js/ajax.js', 'src/js/global.js'])
    .pipe(concat('main.js'))
    .pipe(terser())
    .pipe(jsobs())
    .pipe(dest('dist/js'))
}
function optimizeimg() {
    return src(['src/images/*.{jpg,png,gif}','src/images/*/*.{jpg,png,gif}'])
    .pipe(imagemin([
        imagemin.mozjpeg({ quality:80, progressive: true }),
        imagemin.optipng({ optiminzationLevel: 2 })
    ]))
    .pipe(dest('dist/images'))
}
function webpImage() {
    return src(['dist/images/*.{jpg,png,gif}','dist/images/*/*.{jpg,png,gif}'])
    .pipe(imagewebp())
    .pipe(dest('dist/images'))
}

// create watchtask
function watchTask() {
    watch(['src/*.php', 'src/*/*.php', 'src/*/*/*.php'], copyfile_php);
    watch(['src/*.html','src/*/*.html','src/*/*/*.html'], copyfile_html);
    watch(['src/scss/*/*.scss','src/css/*.css'], compilescss);
    watch('src/js/*.js', jsmin);
    //watch(['src/js/ajax.js', 'src/js/global.js'], jsmin_concat);
    //watch(['src/images/*.{jpg,png,gif}','src/images/*/*.{jpg,png,gif}'], optimizeimg);
    //watch(['dist/images/*.{jpg,png,gif}','dist/images/*/*.{jpg,png,gif}'], webpImage);
}

// default gulp
exports.default = series(
    copyfile_php,
    copyfile_html,
    compilescss,
    jsmin,
    // jsmin_concat,
    optimizeimg,
    webpImage,
    watchTask
);