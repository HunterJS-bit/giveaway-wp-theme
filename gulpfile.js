var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
const { watch } = require('gulp');

gulp.task('style', function() {
    var tailwindcss = require('tailwindcss');

    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([
            tailwindcss('./tailwind.js'),
            require('autoprefixer'),
        ]))
        .pipe(gulp.dest('./'));
});

// watch('sass/style.scss', () => {
//     // gulp.start('style');
// })