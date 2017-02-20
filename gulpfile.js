var gulp = require('gulp');
var sass = require('gulp-sass');
var inject = require('gulp-inject');
var wiredep = require('wiredep').stream;
var del = require('del');
var mainBowerFiles = require('main-bower-files');
var filter = require('gulp-filter');
var concat = require('gulp-concat');
var csso = require('gulp-csso');
var uglify = require('gulp-uglify');
var bower = './bower_components';

gulp.task('clean', function(cb){
  del(['dist'], cb);
});

gulp.task('php', function(){
  return gulp.src('src/*.php')
    .pipe(gulp.dest('dist/wp-content/themes/bs'));
});

gulp.task('css', function(){
  return gulp.src('src/*.css')
    .pipe(gulp.dest('dist/wp-content/themes/bs'));
});

gulp.task('styles', function(){
  var injectAppFiles = gulp.src('src/styles/*.scss', {read: false});
  var injectGlobalFiles = gulp.src('src/global/*.scss', {read: false});

  function transformFilepath(filepath) {
    return '@import "' + filepath + '";';
  }

  var injectAppOptions = {
    transform: transformFilepath,
    starttag: '// inject:app',
    endtag: '// endinject',
    addRootSlash: false
  };

  var injectGlobalOptions = {
    transform: transformFilepath,
    starttag: '// inject:global',
    endtag: '// endinject',
    addRootSlash: false
  };

  return gulp.src('src/main.scss')
    .pipe(wiredep())
    .pipe(inject(injectGlobalFiles, injectGlobalOptions))
    .pipe(inject(injectAppFiles, injectAppOptions))
    .pipe(sass())
    //.pipe(csso())
    .pipe(gulp.dest('dist/wp-content/themes/bs/styles'));
});

gulp.task('scripts', function() {
  return gulp.src([bower + '/jquery/dist/jquery.js', bower + '/bootstrap-sass/assets/javascripts/bootstrap.js','./src/scripts/*.js'])
  .pipe(concat('main.js'))
  .pipe(uglify())
  .pipe(gulp.dest('dist/wp-content/themes/bs/scripts'));
});

gulp.task('default', ['styles', 'scripts', 'php', 'css'], function(){
  var injectFilesCss = gulp.src(['dist/wp-content/themes/bs/styles/main.css']);
  var injectFilesJs = gulp.src(['dist/wp-content/themes/bs/scripts/main.js']);

  var injectOptions = {
    addRootSlash: false,
    ignorePath: ['src', 'dist']
  };

  return gulp.src('src/*.php')
    //.pipe(inject(injectFilesCss, injectOptions))
    //.pipe(inject(injectFilesJs, injectOptions))
    .pipe(gulp.dest('dist/wp-content/themes/bs'));
});

gulp.task('watch', function(){
  gulp.watch('src/*', ['default']); 
  gulp.watch('src/styles/*', ['default']); 
  gulp.watch('src/scripts/*', ['default']); 
  gulp.watch('src/global/*', ['default']); 
})