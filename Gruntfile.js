module.exports = function(grunt) {

	"use strict";

	var pkginfo = grunt.file.readJSON("package.json");

	grunt.initConfig({

		pkg: pkginfo,

		concat: {
			ie: {
				options: {
					separator: "\n\n"
				},
				src: [
					"bower_components/selectivizr/selectivizr.js",
					"bower_components/respond/dest/respond.min.js"
				],
				dest: "assets/js/build/ie.js"
			}
		},

		uglify: {
			min: {
				files: {
					"assets/js/build/ie.min.js": ["assets/js/build/ie.js"]
				}
			}
		},

		watch: {
			js: {
				files: ["assets/js/src/*.js"],
				tasks: ["concat", "uglify"],
				options: {
					livereload: true,
					files: ['**/*']
				}
			}
		}

	});

	// Load grunt tasks from NPM packages
	grunt.loadNpmTasks("grunt-contrib-concat");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-contrib-watch");

	// Register grunt tasks
	grunt.registerTask("default", ["concat", "uglify"]);

};