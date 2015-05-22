module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'expanded',
          sourceMap: true
        },
        files: {
          'css/uthsc.css': 'scss/uthsc.scss'
        }
      }
    },

    compass: {
      dist: {
        options: {
          importPath: 'bower_components/foundation/scss',
          outputStyle: 'expanded',
          sassDir: 'scss',
          cssDir: 'css',
          sourcemap: true
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

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass')
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('build', ['uglify','copy']);
  grunt.registerTask('default', ['sass','watch']);
}