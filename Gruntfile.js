module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: [
                'Gruntfile.js',
                'assets/js/*.js',
                '!assets/js/scripts.min.js',
                '!assets/js/scripts-head.min.js'
            ]
        },
        less: {
            dist: {
                files: {
                    'assets/css/main.min.css': [
                        'assets/less/main.less'
                    ]
                },
                options: {
                    compress: true,
                    // LESS source map
                    // To enable, set sourceMap to true and update sourceMapRootpath based on your install
                    sourceMap: true,
                    sourceMapFilename: 'assets/css/main.min.css.map',
                    sourceMapRootpath: '/frontend/templates/basic/'
                }
            }
        },

        uglify: {
            dist: {
                files: {
                    'assets/js/scripts.min.js': [
                        'assets/vendor/js/bootstrap/transition.js',
                        'assets/vendor/js/bootstrap/alert.js',
                        'assets/vendor/js/bootstrap/button.js',
                        'assets/vendor/js/bootstrap/carousel.js',
                        'assets/vendor/js/bootstrap/collapse.js',
                        'assets/vendor/js/bootstrap/dropdown.js',
                        'assets/vendor/js/bootstrap/modal.js',
                        'assets/vendor/js/bootstrap/tooltip.js',
                        'assets/vendor/js/bootstrap/popover.js',
                        'assets/vendor/js/bootstrap/scrollspy.js',
                        'assets/vendor/js/bootstrap/tab.js',
                        'assets/vendor/js/bootstrap/affix.js',
                        'assets/vendor/js/fancybox/fancybox.pack.js',
                        'assets/vendor/js/fancybox/fancybox-buttons.js',
                        'assets/vendor/js/fancybox/fancybox-media.js',
                        'assets/vendor/js/fancybox/fancybox-thumbs.js',
                        'assets/vendor/js/*.js',
                        'assets/js/_*.js',

                        '!assets/vendor/js/modernizr.js',
                        '!assets/vendor/js/respond.js'
                    ],
                    'assets/js/scripts-head.min.js': [
                        'assets/vendor/js/modernizr.js',
                        'assets/vendor/js/respond.js'
                    ]
                },
                options: {
                  // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
                  // sourceMap: 'assets/js/scripts.min.js.map',
                  // sourceMappingURL: '/wp-content/themes/koucink_trebic/assets/js/scripts.min.js.map'
                }
            }
        },

        /*version: {
            options: {
                //file: 'lib/scripts.php',
                css: 'assets/css/main.min.css',
                cssHandle: 'roots_main',
                js: 'assets/js/scripts.min.js',
                jsHandle: 'roots_scripts'
            }
        },*/

        watch: {
            js: {
                files: [
                    '<%= jshint.all %>'
                ],
                tasks: ['uglify'] //, 'version', 'jshint' odstraněno
            },
            less: {
                files: [
                    'assets/less/*.less',
                    'assets/less/components/*.less',
                    'assets/less/layouts/*.less',
                    'assets/less/layouts/pages/*.less'
                ],
                tasks: ['less'] //, 'version' odstraněno
            },
            livereload: {
                // Browser live reloading
                // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
                options: {
                    livereload: true
                },
                files: [
                    'assets/css/main.min.css',
                    'assets/js/scripts.min.js',
                    '*.php'
                ]
            }
        },

        clean: {
            dist: [
                'assets/css/main.min.css',
                'assets/js/*.min.js'
            ]
        }


    });

    // Load tasks
    grunt.loadNpmTasks('grunt-contrib-clean');
    //grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');

    // Register tasks
    grunt.registerTask('default', [
        'clean',
        'less',
        'uglify',
        //'version'
    ]);
    grunt.registerTask('dev', [
        'watch'
    ]);
};

