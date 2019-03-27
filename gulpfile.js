const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

// compile scss into css

function style() {
  // 1. where is my scss file
  return gulp.src('./dev/scss/*.scss')
  // 2. pass that file through sass compiler
  .pipe(sass().on('error', sass.logError))
  // 3. where do I save the compiled css?
  .pipe(gulp.dest('./lib/css'))
  // 4. stream changes to all browsers
  .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    proxy: 'localhost/danielpickett/',
    port: '8181',
    liveReload: true
  });
  gulp.watch('./lib/css/*.css', style);
  gulp.watch('./**/*.php', style).on('change', browserSync.reload);
  gulp.watch('./lib/js/**/*.js', style).on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;