module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      src: {
        files: ['sass/*.scss'],
        tasks: ['default'],
      }
    },
    sass: {                              // Task 
      dist: {                            // Target 
        options: {                       // Target options 
          style: 'expanded'
        },
        files: {                         // Dictionary of files 
          'css/styles.css': 'sass/styles.scss',       // 'destination': 'source' 
        }
      }
    },
    autoprefixer: {
      dist: {
          files: {
              'build/halostyle.css': 'css/styles.css'
          }
      }
    },
    uglify: {
      options: {
          mangle: false
      },
      my_target: {
        files: {
          'build/haloscripts.min.js': ['js/ie10-viewport-bug-workaround.js', 'js/handlebars/**.js', 'js/jquery.storelocator.js', 'js/instafeed.js', 'js/main.js']
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['sass','autoprefixer']);

};