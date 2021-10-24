const gulp = require("gulp");
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass")(require("node-sass"));
const sassGlob = require("gulp-sass-glob");

// Compile sass into CSS & auto-inject into browsers
gulp.task("sass", function () {
  return gulp
    .src("scss/**/*.scss")
    .pipe(sassGlob())
    .pipe(sass())
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
});

// Static Server + watching scss/php files
gulp.task(
  "serve",
  gulp.series("sass", function () {
    browserSync.init({
      proxy: "minnanowordpress.local",
    });

    gulp.watch("scss/**/*.scss", gulp.series("sass"));
    gulp.watch("./*.php").on("change", browserSync.reload);
  })
);

gulp.task("default", gulp.series("serve"));
