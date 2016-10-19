module.exports = function(grunt) {

	//configure task(s)
	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			build: {
				src: 'src/js/*.js',
				dest: 'js/script.min.js'
			},
			dev: {
				options: {
					beutify: true,
					mangle: false,
					compress: false,
					preserveComments: true
				},
				src: 'src/js/*.js',
				dest: 'js/script.min.js'
			}

		},

		sass: {
			dev: {

				options:{
					outputStyle: 'expanded'

				},

				files : [


					{


						src : ['**/*.scss', '!**/_*.scss'],


						cwd : 'src/scss',


						dest : 'css',


						ext : '.css',


						expand : true


					}


				],

			},
			build: {

				options: {
					outputStyle: 'compressed'
				},

				files : [


					{


						src : ['**/*.scss', '!**/_*.scss'],


						cwd : 'src/scss',


						dest : 'css',


						ext : '.css',


						expand : true


					}


				],
			}
		},


		cssmin: {

			dev:{
			  target: {
			    files: [{
			            expand: true,
					    cwd: 'css',
					    src: ['*.css', '!*.min.css'],
					    dest: 'css',
					    ext: '.min.css'
			    }]
			  }
			}
		},

		watch: {
			js: {
				files: ['src/js/*.js'],
				tasks: ['uglify:dev']
			},
			css: {
				files: ['src/scss/**/*.scss'],
				tasks: ['sass:dev','cssmin:dev']
			}
		},

	});

	//load the plugins
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');


	//Register tastks

	grunt.registerTask('default', ['uglify:dev','sass:dev', 'cssmin:dev']);
	grunt.registerTask('build', ['uglify:build', 'sass:build', 'cssmin:dev']);


};