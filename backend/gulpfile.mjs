import gulp from 'gulp';
import * as sass from 'sass';
import gulpSass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import cleanCSS from 'gulp-clean-css';

const sassCompiler = gulpSass(sass);

// Paths
const paths = {
    scss: {
        src: 'assets/scss/**/*.scss',
        dest: 'public/css'
    }
};

// Compile SCSS to CSS
function styles() {
    return gulp.src(paths.scss.src)
        .pipe(sassCompiler().on('error', sassCompiler.logError))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.scss.dest));
}

// Watch for changes in SCSS files
function watch() {
    gulp.watch(paths.scss.src, styles);
}

// Define complex tasks
const build = gulp.series(styles);
const dev = gulp.series(build, watch);

// Export tasks
export {styles, watch, build, dev};