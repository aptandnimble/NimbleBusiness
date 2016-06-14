module.exports = function(grunt) {
    
  grunt.initConfig ({
    sass: {
      dist: {
        files: {
          '../library/css/style.css' : '../library/scss/style.scss'
        }
      }
    },
    jshint: {
      all: ['Gruntfile.js', 'library/**/*.js', 'test/**/*.js']
    },
    watch: {
      source: {
        files: ['../library/scss/**/*.scss'],
        tasks: ['sass'],
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
 
 
  grunt.registerTask('default',['sass']); 
  grunt.registerTask('default',['jshint']);
  grunt.registerTask('default',['watch']);

  grunt.registerTask('default', ['sass', 'jshint', 'watch']);

};
