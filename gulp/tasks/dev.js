'use strict';

var gulp = require('gulp');
var uglify = require('gulp-uglify');
var http = require('http');
var express = require('express');
var del = require('del');
var runSequence = require('run-sequence');
var compress = require('compression');
var fileinclude = require('gulp-file-include');
var connect = require('gulp-connect-php');
var browserSync = require('browser-sync');
var httpProxy = require('http-proxy');

var server = express();
var serverport = 8080;

gulp.task('clean', function() {
  return del('dist');
});

gulp.task('deploy', ['clean'], function() {
	/* assets */
	console.log('Task - deploy - fonts');
	gulp.src('./app/assets/fonts/*.*')
    	.pipe(gulp.dest('dist/assets/fonts'));
    console.log('Task - deploy - images');
    gulp.src('./app/assets/images/*.*')
    	.pipe(gulp.dest('dist/assets/images'));
    gulp.src('./app/assets/images/escudos/*.*')
    	.pipe(gulp.dest('dist/assets/images/escudos'));
    gulp.src('./app/assets/images/jogadores/*.*')
    	.pipe(gulp.dest('dist/assets/images/jogadores'));
    gulp.src('./app/assets/images/temas/*.*')
    	.pipe(gulp.dest('dist/assets/images/temas'));
    console.log('Task - deploy - css');
	gulp.src('./app/css/*.*')
    	.pipe(gulp.dest('dist/css'));
    console.log('Task - deploy - js');
    gulp.src('./app/js/*.*')
    	.pipe(gulp.dest('dist/js'));
    console.log('Task - deploy - html');
    gulp.src('./app/*.html')
    	.pipe(fileinclude({}))
    	.pipe(gulp.dest('./dist'));
  	return;
});

gulp.task('server', ['clean','deploy','watch'], function () {
    connect.server({
        port: 9001,
        base: 'dist',
        open: false
    });

    var proxy = httpProxy.createProxyServer({});

    browserSync({
        notify: false,
        port  : 9000,
        server: {
            baseDir   : ['.tmp', 'dist'],
            routes    : {
                '/bower_components': 'bower_components'
            },
            middleware: function (req, res, next) {
                var url = req.url;

                if (!url.match(/^\/(styles|fonts|bower_components)\//)) {
                    proxy.web(req, res, { target: 'http://127.0.0.1:9001' });
                } else {
                    next();
                }
            }
        }
    });

});

gulp.task('dev', ['clean', 'deploy', 'server'], function() {
	console.log('Task completed')
});

gulp.task('build', ['clean', 'deploy'], function() {
	console.log('Task completed')
});

gulp.task('watch', function() {
	console.log('Task watch')
	gulp.watch('./app/*.html', ['deploy']);
	gulp.watch("app/*.html").on('change', browserSync.reload);
});
