/*!
 * Panel View for Keep Gruntfile
 * http://eichefam.net/projects/keep
 * @author Paul Eiche
 */
 
/**
 * Grunt Module
 */
module.exports = function(grunt) {
	
    var target = grunt.option('target') || 'prod';
    
    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
        copy: {
            main: {
                files: [
                    {
                        cwd: 'bower_components/jquery/dist',
                        src: 'jquery.min.js',
                        dest: 'js',
                        expand: true
                    },
                    {
                        cwd: 'bower_components/fluidbox',
                        src: 'jquery.fluidbox.min.js',
                        dest: 'js',
                        expand: true
                    },
                    {
                        cwd: 'bower_components/fluidbox/css',
                        src: 'fluidbox.css',
                        dest: 'css',
                        expand: true
                    }
                ]
            }
        },
        jshint: {
            files: ['GruntFile.js', 'js/src/*.js'],
            options: {
                'globals': {
                    jQuery: true,
                    alert: true                }
            }
        },
        uglify: {
            build: {
                files: [{
                    expand: true,
                    cwd: 'js/src',
                    dest: 'js',
                    src: '**/*.js',
                    ext: '.min.js'
                }]
            }
        },
        watch: {
            javascript: {
                files: 'js/src/*.js',
                tasks: ['jshint', 'uglify']
            }
		}
	});
    
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.registerTask('build', ['copy', 'uglify']);
	grunt.registerTask('validate', ['jshint']);
	grunt.registerTask('default', ['watch']);
};
