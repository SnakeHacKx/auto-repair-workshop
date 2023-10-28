const { src, dest, watch, series } = require("gulp");

// CSS - SASS
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");

// IMAGENES
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const avif = require("gulp-avif");

// Compila el código de SASS y lo convierte a CSS
function css(done) {
  src("src/scss/app.scss")
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(postcss([autoprefixer()]))
    .pipe(dest("build/css"));
  done();
}

// Optimiza los archivos de imagenes para que sean mas ligeras
function images() {
  return src("assets/images/**/*")
    .pipe(imagemin({ optimizationLevel: 1 }))
    .pipe(dest("build/assets/images"));
}

// Convierte las imagenes a webp
function convertToWebp() {
  const options = {
    quality: 50,
  };

  return src("assets/images/**/*.{png,jpg,jpeg}")
    .pipe(webp(options))
    .pipe(dest("build/assets/images"));
}

// Convierte las imagenes a avif (solo soportado por Chrome)
function convertToAvif() {
  const options = {
    quality: 50,
  };

  return src("assets/images/**/*.{png,jpg,jpeg}")
    .pipe(avif(options))
    .pipe(dest("build/assets/images"));
}

// Revisa los cambios en el código SASS para compilarlos a CSS automáticamente
function dev() {
  watch("src/scss/**/*.scss", css);
  watch("assets/images/**/*", images);
}

exports.css = css;
exports.dev = dev;
exports.images = images;
exports.convertToWebp = convertToWebp;
exports.convertToAvif = convertToAvif;

exports.default = series(images, convertToWebp, convertToAvif, css, dev);
