var gulp = require("gulp");
var browserSync = require("browser-sync").create();
const sass = require("gulp-sass")(require("node-sass"));

// Compile sass into CSS & auto-inject into browsers
gulp.task("sass", function () {
  return gulp
    .src("scss/*.scss")
    .pipe(sass())
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
});

// Static Server + watching scss/html files
gulp.task(
  "serve",
  gulp.series("sass", function () {
    browserSync.init({
      proxy: "minnanowordpress.local",
    });

    gulp.watch("scss/*.scss", gulp.series("sass"));
    gulp.watch("./*.php").on("change", browserSync.reload);
  })
);

gulp.task("default", gulp.series("serve"));
