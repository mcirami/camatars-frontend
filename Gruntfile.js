// Configuring Grunt tasks:
// http://gruntjs.com/configuring-tasks

module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Tasks

        // grunt-contrib-sass
        // requires you to have Ruby and Sass but is more stable
        sass: {
            dist: {
                files: [{
                expand: true,
                cwd: 'scss',
                src: ['**/*.scss'],
                dest: 'css',
                ext: '.css'
                }],
            },
        },
      
        cssmin: {
            my_target: {
                files: [{
                    expand: true,
                    cwd: 'css',
                    src: ['main.css', '!main.min.css'],
                    dest: 'css',
                    ext: '.min.css'

                }]
            }
        },
      
        // grunt-contrib-concat
        // Concatenates JS files in order
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['js/vendor/modernizr-2.6.2.min.js', 'js/plugins.js', 'js/main.js'],
                dest: 'js/built.js'
            }
        },
      
        // grunt-contrib-uglify
        // Minifies js files
        uglify: {
            options: {
                mangle: false
            },
            dist: {
                files: {
                'js/built.min.js': ['js/built.js']
                }
            }
        },

        watch: {

            html: {
                files: [
                    '*.html'
                ],
                options: {
                    livereload: true
                }
            },

            php: {
                files: [
                    '*.php'
                ],
                options: {
                    livereload: true
                }
            },

            sass: {
                files: [
                    '**/*.scss'
                ],
                tasks: ['sass', 'cssmin']
            },

            css: {
                files: [
                    'css/main.min.css'
                ],

                options: {
                    livereload: true // reload the css not the sass changes
                }
            },

            scripts: {
                files: [
                    'js/*.js'
                ],
                options: {
                    livereload: true,
                    spawn: false
                },
                tasks: ['concat', 'uglify']
            },

            images: {
                files: [
                    'images/{,**/}*.{png,jpg,jpeg,gif,webp,svg}'
                ],
                options: {
                    livereload: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['watch', 'php', 'sass', 'cssmin']);
};