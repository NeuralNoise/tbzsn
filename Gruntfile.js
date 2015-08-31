module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
      phpcs: {
    application: {
        src: ['controllers/*.php', 'models/*.php']
    },
    options: {
        bin: 'vendor/bin/phpcs',
        standard: 'phpcs.xml'
        }
    },
    sass: {
        dist: {
          options: {
            style: 'compressed'
          },
          files: {
            'public/css/main.css': 'public/css/main.scss'
          }
        }
    }
  });

  // Load plugins
 grunt.loadNpmTasks('grunt-phpcs');
 grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task(s).
  grunt.registerTask('default', ['phpcs']);
  grunt.registerTask('design',['sass']);

};
