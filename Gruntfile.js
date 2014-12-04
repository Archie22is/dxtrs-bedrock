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
                    'css/app.css':                  'scss/app.scss',
                    'css/style.css':                'scss/style.scss',
                    'includes/admin/css/admin.css': 'includes/admin/scss/admin.scss',
                    'includes/admin/css/login.css': 'includes/admin/scss/login.scss'
                }
            }
        },

        uglify: {
            build: {
                files: {
                    'js/app.min.js':                    ['js/app.js'],
                    'js/js.min.js':                     ['js/js.js'],
                    'includes/admin/js/admin.min.js':   ['includes/admin/js/admin.js'],
                    'js/foundation.min.js':             ['bower_components/foundation/js/foundation.js'],
                    'js/modernizr.min.js':              ['bower_components/foundation/js/vendor/modernizr.js']
                }
            }
        },

        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: '_images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'images/'
                }]
            }
        },

        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        src:    ['images/**'],
                        dest:   'build/'
                    },
                    {
                        expand: true,
                        src:    ['js/**/*.min.js'],
                        dest:   'build/',
                    },
                    {
                        expand: true,
                        src:    ['css/**'],
                        dest:   'build/',
                    },
                    {
                        expand: true,
                        src:    ['**/*.php'],
                        dest:   'build/',
                        options: {
                            process: function (content, srcpath) {
                                return content.replace(/\.js/g, ".min.js");
                            }
                        }
                    },
                    {
                        expand: true,
                        src:    ['style.css', 'screenshot.png'],
                        dest:   'build/'
                    }
                ]
            }
        },

        watch: {
            options: { livereload: true },
            grunt: { files: ['Gruntfile.js'] },

            sass: {
                files: 'scss/**/*.scss',
                tasks: ['sass']
            },

            php: {
                files: ['**/*.php']
            },

            uglify: {
                files: [
                    'js/**/*.js', '!js/**/*.min.js',
                    'includes/admin/js/**/*.js', '!includes/admin/js/**/*.min.js'
                ],
                tasks: ['uglify']
            },
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-notify');

    grunt.registerTask('build', ['sass', 'uglify', 'imagemin']);
    grunt.registerTask('production', ['sass', 'uglify', 'imagemin', 'copy']);
    grunt.registerTask('default', ['build', 'watch']);
}
