var babelify = require('babelify');
var browserify = require('browserify')
var buffer = require('vinyl-buffer');
var concat = require('gulp-concat');
var del = require('del');
var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var gulpif = require('gulp-if');
var minifyCSS = require('gulp-csso');
var sass = require('gulp-sass');
var source = require('vinyl-source-stream');
var sourcemaps = require('gulp-sourcemaps');
var sync = require('browser-sync').create();
var uglify = require('gulp-uglify');

var isProd = process.env.NODE_ENV === 'production';

/**
 * SCSS
 */

function scss() {
  return gulp.src('src/styles/main.scss')
    .pipe(gulpif(!isProd, sourcemaps.init()))
    .pipe(sass())
    .on('error', function(err) {
      console.error(err); this.emit('end');
    })
    .pipe(gulpif(isProd, minifyCSS()))
    .pipe(gulpif(!isProd, sourcemaps.write('.')))
    .pipe(gulp.dest('public/styles'))
    .pipe(sync.stream());
}

/**
 * JS
 */

function js() {
  return browserify({entries: ['src/js/main.js'], debug: true})
    .transform(babelify, {presets: 'es2015'})
    .bundle()
    .on('error', function(err) {
      console.error(err); this.emit('end');
    })
    .pipe(source('main.js'))
    .pipe(buffer())
    .pipe(gulpif(!isProd, sourcemaps.init({loadMaps: true})))
    .pipe(uglify())
    .pipe(gulpif(!isProd, sourcemaps.write('.')))
    .pipe(gulp.dest('public/js'))
    .pipe(sync.stream());
};

/**
 * IMAGES
 */

function images() {
  return gulp.src('src/assets/images/*')
    .pipe(gulpif(isProd, imagemin({verbose: true})))
    .pipe(gulp.dest('public/assets/images'));
}

/**
 * FONTS
 */

function fonts() {
  return gulp.src('src/assets/fonts/*')
    .pipe(gulp.dest('public/assets/fonts'));
}

/**
 * GLOBAL
 */

function clean() {
  return del(['public']);
}

gulp.task('build', gulp.series(clean, gulp.parallel(scss, js, images, fonts)));

gulp.task('default', gulp.parallel(scss, js, images, fonts, function(done) {
  sync.init({
    server: {
      baseDir: './public'
    }
  });

  gulp.watch('src/**/*.scss', scss);
  gulp.watch('src/**/*.js', js);

  done();
}));