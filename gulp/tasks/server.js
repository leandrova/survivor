'use strict';

var gulp = require('gulp'),
    express = require('express'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync'),
    httpProxy = require('http-proxy');
    
var server = express();

gulp.task('server', function () {
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
