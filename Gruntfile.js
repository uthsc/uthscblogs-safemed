module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            options: {
                includePaths: ['bower_components/foundation/scss']
            },
            dist: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    'css/app.css': 'scss/app.scss',
                    'css/style.css': 'scss/style.scss',
                    'css/uthsc.css': 'scss/uthsc.scss'
                }
            }
        },

        compass: {                  // Task
            dist: {                   // Target
                options: {              // Target options
                    sassDir: 'scss',
                    cssDir: 'css'
                }
            }
        },

        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    'js/modernizr.min.js': ['bower_components/modernizr/modernizr.js']
                }
            }
        },

        copy: {
            main: {
                nonull: true,
                src: 'bower_components/foundation/js/foundation.min.js',
                dest: 'js/foundation.min.js'
            }
        },

        watch: {
            grunt: { files: ['Gruntfile.js'] },

            compass: {
                files: 'scss/**/*.scss',
                tasks: ['compass']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-compass')
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('build', ['uglify','copy']);
    grunt.registerTask('default', ['build','compass','watch']);
}