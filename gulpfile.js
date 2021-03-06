'use strict';

var gulp = require('gulp'),// подключение галп
	sass = require('gulp-sass'),
	//concatCss = require('gulp-concat-css'),//присоединяем все файлы css в один
	rename = require('gulp-rename'),//переименовываем конкат и миниф файл
	cleanCSS = require('gulp-clean-css'),//минифицируем
	autoprefixer = require('gulp-autoprefixer'),//автопрефикер
	livereload = require('gulp-livereload'),//
	connect = require('gulp-connect'),//соед с уд сервером
	concat = require('gulp-concat'),//конкатенация
	uglify = require('gulp-uglify'),
	cache = require('gulp-cache'),//когда картинко много кэш
	notify = require("gulp-notify");//уведомление о действии

//livereload
	gulp.task('connect', function() {
	  connect.server({
	    root: 'app',
	    livereload: true
	  });
	});

//sass и css
gulp.task('sass', function () {
  return gulp.src(['app/sass/**/*.sass', 'app/sass/**/*.scss'])//путь к папке с файлами, м которыми будем работать
    .pipe(autoprefixer({
        browsers: ['last 15 versions']
    }))
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(cleanCSS()) //минифицируем css
    .pipe(rename('libs.min.css'))//как назовем скомпилированный min- файл
    .pipe(gulp.dest('app/css'))//куда выкладываем итоговый файл
    .pipe(connect.reload());
});

//сжимаем библиотеки css

//js
gulp.task('scripts', function() {
  return gulp.src('app/libs/main.js')
    // .pipe(concat('all.min.js'))
    // .pipe(uglify())
    // .pipe(gulp.dest('app/js'))
    .pipe(connect.reload());
});

//html
gulp.task('html', function () {
	gulp.src('app/*.html')
	.pipe(connect.reload());
});


//автом вызов галп при любом изменении css-файлов
gulp.task('watch', function () {
    // gulp.watch('app/css/*css', ['css']) //следим за изменениями всех css, и при их изменении запускаем таск css
	gulp.watch(['app/sass/**/*.sass', 'app/sass/**/*.scss'], ['sass']) //следим за изменениями всех css, и при их изменении запускаем таск css
	// gulp.watch('app/jade/index.jade', ['jade'])
	gulp.watch('app/libs/*.js', ['scripts'])
	gulp.watch('app/*.html', ['html']);
});

//удаление папки dist перед сборкой
gulp.task('clean', function() {
	return del.sync('dist'); // Удаляем папку dist перед сборкой
});

//чистим кэш
gulp.task('clear', function (callback) {
	return cache.clearAll();
})

//в продакшн
gulp.task('build', ['clean', 'sass', 'scripts'], function() {

	var buildCss = gulp.src(['app/css/libs.min.css'])
	.pipe(gulp.dest('dist/css'));

	// var buildFonts = gulp.src('app/fonts/**/*') // Переносим шрифты в продакшен
	// .pipe(gulp.dest('dist/fonts'));

	var buildJs = gulp.src('app/js/**/*') // Переносим скрипты в продакшен
	.pipe(gulp.dest('dist/js'));

	var buildHtml = gulp.src('app/*.html') // Переносим HTML в продакшен
	.pipe(gulp.dest('dist'));

});

//задачи по-умолчанию
gulp.task('default', ['connect', 'watch','sass', 'html','scripts']);








