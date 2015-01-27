module.exports = function(grunt) {

    // Configuration
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

		sass: {
			dist: {
				options: {
					style: 'compact'
				},
				files: {
					'style.css': 'css/style.scss'
				}
			}
		},
		autoprefixer: {
			single_file: {
				src: 'style.css',
				dest: 'style.css'
			}
        },
		copy: {
		  main: {
		    files: [
		    ]
		  }
		},
		watch: {
			css: {
				files: ['css/*.scss', 'css/**/*.scss'],
				tasks: ['sass','autoprefixer', 'copy'],
			}
		}
    });

	// Plugins
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');

	// Tasks
	grunt.registerTask('default', ['sass', 'watch', 'copy', 'autoprefixer']);
};
