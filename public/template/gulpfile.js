	var gulp    		= require('gulp'); 				// Gulp
	var uglify  		= require('gulp-uglify'); 		// Plugin for uglifing javascript
	var less 			= require('gulp-less'); 		// Plugin to compile less
	var sass            = require('gulp-ruby-sass');	// Package to compile scss files
	var path 			= require('path'); 				// Plugin with path utils
	var cssmin 			= require('gulp-minify-css'); 	// Plugin to minfy css
	var rename			= require('gulp-rename'); 		// Plugin for renaming files
	var autoprefixer   	= require('gulp-autoprefixer'); // Plugin to vendor prefix css
	var include 		= require('gulp-include'); 		// Plugin to include files into others
	var notify 			= require("gulp-notify"); 		// Plugin to send notifications to the operating system
	var imagemin 		= require("gulp-imagemin"); 	// Plugin for minifying jpg, png, gif and svg
	var livereload 		= require('gulp-livereload'); 	// Plugin for enable lievreload for your browser
	var	plugins 		= require('gulp-load-plugins')();
	var sourcemaps 		= require('gulp-sourcemaps'); 	
	var runSequence 	= require('run-sequence');
	var filter 			= require('gulp-filter');
	var svg2png  		= require('gulp-svg2png');




	var srcPath 		= 'source/';				// Path to the source files
	var distPath 		= '';			// Path to the distribution files


// Paths that gulp should watch
	var watchPaths		= {
		scripts: 	[srcPath+'assets/js/*.js', srcPath+'assets/js/**/*.js'],
		images: 	[srcPath+'assets/img/**'],
		sass: 		[srcPath+'assets/sass/*.scss', srcPath+'assets/sass/**/*.scss'],
		fonts:    [srcPath+'assets/fonts/**'],
		php:      [srcPath+'assets/php/**'],
		svgpng:   [srcPath+'assets/svg/**/*.svg']
	};



// Task for sass files
gulp.task('sass', function () {
   return sass(srcPath + 'assets/sass/')
	    .on("error", notify.onError({
	        message: 	"Error: <%= error.message %>",
	        title: 		"Error running sass task"
	    }))
	    .pipe(autoprefixer({
        	browsers: 	['> 1%', 'last 2 versions'],
        	cascade: 	false
        }))
        .on("error", notify.onError({
	        message: 	"Error: <%= error.message %>",
	        title: 		"Error running sass/autoprefixer task"
	    }))
        .pipe(cssmin({
        	keepBreaks: false
        }))
        .on("error", notify.onError({
	        message: 	"Error: CSS Min",
	        title: 		"Error running sass/cssmin task"
	    }))
        .pipe(rename({
        	suffix: 	'.min'
        }))
        .pipe(gulp.dest(distPath + 'assets/css'));
});


// Javscript task
	gulp.task('scripts', function(){
		gulp
			.src(srcPath + 'assets/js/*.js')
			.pipe(include())
			.pipe(sourcemaps.init())
			.pipe(uglify())
			.on("error", notify.onError({
		        message: 	"Error: <%= error.message %>",
		        title: 		"Error running scripts task"
		    }))
			.pipe(rename({
				suffix: 	'.min'
			}))
			.pipe(sourcemaps.write('maps'))
			.pipe(gulp.dest(distPath + 'assets/js'));
	});

// Font task
	gulp.task('fonts', function () {
		gulp
			.src([srcPath + 'assets/fonts/**'])
			.pipe(gulp.dest(distPath + 'assets/fonts'));
	});

// HTML task
	gulp.task('html', function () {
		gulp
			.src([srcPath + '**/*.html', srcPath + '**/*.php'])
			.pipe(include())
			.on("error", notify.onError({
                message: 	"Error: <%= error.message %>",
                title: 		"Error running html task"
            }))
			.pipe(gulp.dest(distPath));
	});

// Images task
	gulp.task('images', function () {
		gulp
			.src(srcPath + 'assets/img/**')
			.pipe(imagemin())
			.on("error", notify.onError({
		        message: 	"Error: <%= error.message %>",
		        title: 		"Error running image task"
		    }))
			.pipe(gulp.dest(distPath + 'assets/img'));
	});

// SVG task
	gulp.task('svg', function () {
		gulp
			.src(srcPath + 'assets/svg/**')
			.pipe(imagemin())
			.on("error", notify.onError({
		        message: 	"Error: <%= error.message %>",
		        title: 		"Error running svg task"
		    }))
			.pipe(gulp.dest(distPath + 'assets/svg'));
	});

// SvgToPng  task
	gulp.task('svgpng', function () {
		gulp
			.src(srcPath + 'assets/svg/**/*.svg')
			.pipe(svg2png())
			.on("error", notify.onError({
		        message: 	"Error: <%= error.message %>",
		        title: 		"Error running svg to png task"
		    }))
			.pipe(gulp.dest(distPath + 'assets/img'));
	});

	// PHP task
	gulp.task('php', function () {
		gulp
			.src(srcPath + 'assets/php/**')
			.on("error", notify.onError({
		        message: 	"Error: <%= error.message %>",
		        title: 		"Error running php task"
		    }))
			.pipe(gulp.dest(distPath + 'assets/php'));
	});


// Watch task
	gulp.task('watch', function() {
		gulp.watch(watchPaths.scripts, ['scripts']);
		gulp.watch(watchPaths.images, ['images']);
		gulp.watch(watchPaths.sass, ['sass']);
		gulp.watch(watchPaths.php, ['php']);
		gulp.watch(watchPaths.fonts, ['fonts']);
		gulp.watch(watchPaths.svgpng, ['svg', 'svgpng']);

	});


// Build task	
gulp.task('build', function(callback){
	runSequence('sass', ['images', 'svg', 'php', 'scripts', 'fonts', 'svgpng'], callback);
});


// Default task
	gulp.task('default', ['build', 'watch']);