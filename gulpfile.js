'use strict'

var gulp = require('gulp');
var concatCss = require('gulp-concat-css');
var rename = require('gulp-rename');
var minifyCss = require('gulp-minify-css');
var uncss = require('gulp-uncss');
var concat = require('gulp-concat');
var jsmin = require('gulp-jsmin');
var notify = require('gulp-notify');
 

 // css
gulp.task('default', function () {
  return gulp.src('css/*.css')
    .pipe(concatCss('bundle.css'))
    .pipe(minifyCss())
    .pipe(rename('bundle.min.css'))
    .pipe(gulp.dest('app/css/'))
    .pipe(notify('Done!'));
});

 // css for tests
gulp.task('testCss', function () {
  return gulp.src('css/*.css')
    .pipe(concatCss('bundle.css'))
    .pipe(gulp.dest('app/css/'));
    //.pipe(notify('Done!'));
});


//uncss uikit
/*
gulp.task('uncssUikit', function() {
	return gulp.src('css/uikit/uikit.css')
	.pipe(uncss({
		html: ['html/index.html', 'html/catalog.html', 'html/register.html']
	}))
	.pipe(rename('uikit-uncss.css'))
	.pipe(gulp.dest('css/'));
});
*/

//uncss uikit Flat
gulp.task('uncssFlat', function() {
	return gulp.src('css/uikit/uikit.almost-flat.css')
	.pipe(uncss({
		html: ['html/index.html', 'html/catalog.html', 'html/register.html']
	}))
	.pipe(rename('3-uikit-flat-uncss.css'))
	.pipe(gulp.dest('css/'));
});

//uncss uikit Gradient
gulp.task('uncssGradient', function() {
	return gulp.src('css/uikit/uikit.gradient.css')
	.pipe(uncss({
		html: ['html/index.html', 'html/catalog.html', 'html/register.html']
	}))
	.pipe(rename('2-uikit-gradient-uncss.css'))
	.pipe(gulp.dest('css/'));
});

//uncss Balzac Theme Shop
gulp.task('uncssBalzac', function() {
	return gulp.src('css/shopCss/balzacTheme.css')
	.pipe(uncss({
		html: ['html/catalog.html']
	}))
	.pipe(minifyCss())
	.pipe(rename('8-BalzacThemeUncss.css'))
	.pipe(gulp.dest('css/'));
});

// js

gulp.task('scripts', function() {
	return gulp.src('js/*.js')
	.pipe(concat('allScripts.js'))
	.pipe(jsmin())
	.pipe(rename('allScripts.min.js'))
	.pipe(gulp.dest('app/js/'))
	.pipe(notify('Done!'));
});

// countUpSettings minify
gulp.task('countUp', function() {
	return gulp.src('app/js/countUpSettings.js')
	.pipe(jsmin())
	.pipe(rename('countUpSettings.min.js'))
	.pipe(gulp.dest('app/js/'));
});

//gulp watch
gulp.task('watch', function() {
	gulp.watch('css/*.css', ['default'])
});