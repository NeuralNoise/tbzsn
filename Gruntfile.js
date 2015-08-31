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
    }
  });

  // Load plugins
 grunt.loadNpmTasks('grunt-phpcs');

  // Default task(s).
  grunt.registerTask('default', ['phpcs']);

};
