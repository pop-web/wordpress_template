const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass')(require('node-sass'));
const sassGlob = require('gulp-sass-glob');
const webpackStream = require('webpack-stream');
const webpack = require('webpack');
const webpackConfig = require('./webpack.config');

// Sass
gulp.task('sass', () => {
  return gulp
    .src('scss/**/*.scss')
    .pipe(sassGlob())
    .pipe(sass())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

// webpack
gulp.task('webpack', (done) => {
  webpackStream(webpackConfig, webpack).pipe(gulp.dest('./js/dist/'));
  done();
});

// watching
gulp.task(
  'serve',
  gulp.series(['sass', 'webpack'], () => {
    browserSync.init({
      port: 3333,
      // proxyオプションは開くアプリケーションのサーバーのURLを指定
      // proxy: "minnanowordpress.local",
      proxy: 'localhost:10013',
    });

    gulp.watch('scss/**/*.scss', gulp.series('sass'));
    gulp.watch('js/src/*.js', gulp.series('webpack'));
    gulp.watch('./**/*.php').on('change', browserSync.reload);
  }),
);

gulp.task('default', gulp.series('serve'));
