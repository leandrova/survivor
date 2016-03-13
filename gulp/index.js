'use strict';

var env = require('node-env-file');
var fs = require('fs');
var onlyScripts = require('./util/script-filter');
var tasks = fs.readdirSync('./gulp/tasks/').filter(onlyScripts);

env('./.env', { overwrite: true });

tasks.forEach(function(task) {
  require('./tasks/' + task);
});
