const gulp = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const purgecssWordpress = require('purgecss-with-wordpress');
const Purgecss = require('purgecss').default;
const fs = require('fs');

gulp.task('style', function () {
    var tailwindcss = require('tailwindcss');
    // 511kb
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([
            tailwindcss('./tailwind.js'),
            require('autoprefixer'),
        ]))
        .pipe(gulp.dest('./'));
});


const purgecss = new Purgecss({
    content: ['**/*.php'],
    css: ['**/*.css'],
    whitelist: purgecssWordpress.whitelist,
    whitelistPatterns: purgecssWordpress.whitelistPatterns
});

gulp.task('purge', async () => {

    const result = await purgecss.purge();
    fs.writeFileSync('production.css', result[0].css);
});
