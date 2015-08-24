module.exports = function(grunt){
	
	//Configure main project settings
	grunt.initConfig({

		//Basic settings and info about our plugins
		pkg: grunt.file.readJSON('package.json'),

		//Name of plugin: cssmin
		cssmin: {
			combine: {
				files: {
					'css/main.css': ['css/custom.css', 'css/eventify.css', 'css/owl.carousel.css', 
					'css/owl-theme.css', 'css/owl.transitions.css', 'css/prettify.css']
				}
			}
		},

		//uglify
		uglify: {
			dist: {
				files: {
					'js/eventify.min.js': ['js/eventify.js'],
				}
			}
		}
	});

	//Load the plugin
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	//Do the task
	grunt.registerTask('default', ['cssmin', 'uglify']);
};