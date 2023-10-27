const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");

// Compila el código de SASS y lo convierte a CSS
function css(done) {
  src("src/scss/app.scss")
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(postcss([autoprefixer()]))
    .pipe(dest("build/css"));
  done();
}

// Revisa los cambios en el código SASS para compilarlos a CSS automáticamente
function dev() {
  watch("src/scss/**/*.scss", css);
}

exports.css = css;
exports.dev = dev;
exports.default = series(css, dev);
