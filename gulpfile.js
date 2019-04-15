const fabAssemble = require('fabricator-assemble');
const browserSync = require('browser-sync');
const csso = require('gulp-csso');
const del = require('del');
const gulp = require('gulp');
const argv = require('minimist')(process.argv.slice(2));
const log = require('fancy-log');
const gulpif = require('gulp-if');
const imagemin = require('gulp-imagemin');
const prefix = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const webpack = require('webpack');
sass.compiler = require('node-sass');
// var markdown = require('gulp-markdown');

let server = false;
function reload(done) {
  if (server) server.reload();
  done();
}


// configuration
// ==========================================
const config = {
  dev: !!argv.dev,
  styles: {
    browsers: [
      'ie 11',
      'edge >= 16',
      'chrome >= 70',
      'firefox >= 63',
      'safari >= 11',
      'iOS >= 12',
      'ChromeAndroid >= 70',
    ],
    fabricator: {
      src: 'src/assets/fabricator/styles/fabricator.scss',
      dest: 'dist/assets/fabricator/styles',
      watch: 'src/assets/fabricator/styles/**/*.scss',
    },
    strapless: {
        src: 'src/assets/strapless/default/styles/strapless.scss',
        dest: 'dist/assets/strapless/styles',
        watch: 'src/assets/strapless/default/styles/**/*.scss',
    },
    // strapless_absconders: {
    //     src: 'src/assets/absconders/styles/strapless.scss',
    //     dest: 'dist/assets/absconders/styles',
    //     watch: 'src/assets/absconders/styles/**/*.scss',
    // },
    // strapless_Employment: {
    //     src: 'src/assets/employment/styles/strapless.scss',
    //     dest: 'dist/assets/employment/styles',
    //     watch: 'src/assets/employment/styles/**/*.scss',
    // }
  },
  scripts: {
    fabricator: {
      src: './src/assets/fabricator/scripts/fabricator.js',
      dest: 'dist/assets/fabricator/scripts',
      watch: 'src/assets/fabricator/scripts/**/*',
    },
    strapless: {
      src: [
        './node_modules/what-input/dist/what-input.js',
        //'./src/assets/strapless/default/scripts/what-input.js',
        './src/assets/strapless/default/scripts/strapless.js'
      ],
      dest: 'dist/assets/strapless/scripts',
      watch: 'src/assets/strapless/default/scripts/**/*',
    },
    // strapless_absconders: {
    //   src: './src/assets/absconders/scripts/strapless.js',
    //   dest: 'dist/assets/absconders/scripts',
    //   watch: 'src/assets/absconders/scripts/**/*',
    // },
    // strapless_employment: {
    //   src: './src/assets/employment/scripts/strapless.js',
    //   dest: 'dist/assets/employment/scripts',
    //   watch: 'src/assets/employment/scripts/**/*',
    // }
  },
  images: {
      fabricator: {
        src: ['src/assets/fabricator/images/**/*', 'src/favicon.ico'],
        dest: 'dist/assets/fabricator/images',
        watch: 'src/assets/fabricator/images/**/*',
      },
    strapless: {
      src: ['src/assets/nawcc/images/**/*', 'src/favicon.ico'],
      dest: 'dist/assets/strapless/images',
      watch: 'src/assets/nawcc/images/**/*',
    },
    // strapless_absconders: {
    //   src: ['src/assets/absconders/images/**/*', 'src/favicon.ico'],
    //   dest: 'dist/assets/absconders/images',
    //   watch: 'src/assets/absconders/images/**/*',
    // },
    // strapless_employment: {
    //   src: ['src/assets/employment/images/**/*', 'src/favicon.ico'],
    //   dest: 'dist/assets/employment/images',
    //   watch: 'src/assets/employment/images/**/*',
    // }
  },
  templates: {
    watch: 'src/**/*.{html,md,json,yml}',
  },
  dest: 'dist',
};


// gulp.task('markdown', function () {
//     return gulp.src('src/docs/*.md')
//         .pipe(markdown())
//         .pipe(gulp.dest('dist/markdown'))
//         .pipe(gulp.dest('src/learn'));
// });

// clean
// ==========================================
const clean = () => del([config.dest]);


// styles
// ==========================================
function stylesFabricator() {
  return gulp
    .src(config.styles.fabricator.src)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(prefix(config.styles.browsers))
    .pipe(gulpif(!config.dev, csso()))
    .pipe(rename('f.css'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.styles.fabricator.dest));
}

function stylesStrapless() {
  return gulp
    .src(config.styles.strapless.src)
    .pipe(gulpif(config.dev, sourcemaps.init()))
    .pipe(
      sass({
        includePaths: ['./node_modules', './node_modules/susy/sass']
      }).on('error', sass.logError)
    )
    .pipe(prefix(config.styles.browsers))
    .pipe(gulpif(!config.dev, csso()))
    .pipe(gulpif(config.dev, sourcemaps.write()))
    .pipe(gulp.dest(config.styles.strapless.dest));
}

// gulp.task('sass', function() {
//   return gulp.src('scss/*.scss')
//       .pipe(sass({
//           outputStyle: 'compressed',
//           includePaths: ['node_modules/susy/sass']
//       }).on('error', sass.logError))
//       .pipe(gulp.dest('dist/css'));
// });

const styles = gulp.parallel(stylesFabricator, stylesStrapless);


// scripts
// ==========================================
const webpackConfig = require('./webpack.config')(config);

function scripts(done) {
  webpack(webpackConfig, (err, stats) => {
    if (err) {
      log.error(err());
    }
    const result = stats.toJson();
    if (result.errors.length) {
      result.errors.forEach(error => {
        log.error(error);
      });
    }
    done();
  });
}


// images
// ==========================================
function imgFavicon() {
  return gulp.src('src/favicon.ico').pipe(gulp.dest(config.dest));
}

function imgMinification() {
  return gulp
    .src(config.images.strapless.src)
    .pipe(imagemin())
    .pipe(gulp.dest(config.images.strapless.dest));
}
const images = gulp.series(imgFavicon, imgMinification);

// assembly
// ==========================================
function assembler(done) {
  fabAssemble({
    logErrors: config.dev,
    dest: config.dest,
    helpers: {
      // {{ default description "string of content used if description var is undefined" }}
      default: function defaultFn(...args) {
        return args.find(value => !!value);
      },
      // {{ concat str1 "string 2" }}
      concat: function concat(...args) {
        return args.slice(0, args.length - 1).join('');
      },
      // {{> (dynamicPartial name) }} ---- name = 'nameOfComponent'
      dynamicPartial: function dynamicPartial(name) {
        return name;
      },
      eq: function eq(v1, v2) {
        return v1 === v2;
      },
      ne: function ne(v1, v2) {
        return v1 !== v2;
      },
      and: function and(v1, v2) {
        return v1 && v2;
      },
      or: function or(v1, v2) {
        return v1 || v2;
      },
      not: function not(v1) {
        return !v1;
      },
      gte: function gte(a, b) {
        return +a >= +b;
      },
      lte: function lte(a, b) {
        return +a <= +b;
      },
      plus: function plus(a, b) {
        return +a + +b;
      },
      minus: function minus(a, b) {
        return +a - +b;
      },
      divide: function divide(a, b) {
        return +a / +b;
      },
      multiply: function multiply(a, b) {
        return +a * +b;
      },
      abs: function abs(a) {
        return Math.abs(a);
      },
      mod: function mod(a, b) {
        return +a % +b;
      },
      markdown: require('helper-markdown'),
    },
  });
  done();
}



// server
// ==========================================
function serve(done) {
  server = browserSync.create();
  server.init({
    server: {
      baseDir: config.dest,
    },
    notify: false,
    logPrefix: 'FABRICATOR',
  });
  done();
}

function watch() {
  gulp.watch(
    config.templates.watch,
    { interval: 500 },
    gulp.series(assembler, reload)
  );
  // gulp.watch(
  //   [config.scripts.fabricator.watch, config.scripts.Strapless.watch],
  //   { interval: 500 },
  //   gulp.series(scripts, reload)
  // );
  // gulp.watch(
  //   config.images.Strapless.watch,
  //   { interval: 500 },
  //   gulp.series(images, reload)
  // );
  gulp.watch(
    [config.styles.fabricator.watch, config.styles.strapless.watch],
    { interval: 500 },
    gulp.series(styles, reload)
  );
}


// default build task
// ==========================================
let tasks = [clean, styles, scripts, images, assembler];
if (config.dev) tasks = tasks.concat([serve, watch]);
// if (config.dev) tasks = tasks.concat([serve]);
gulp.task('default', gulp.series(tasks));
