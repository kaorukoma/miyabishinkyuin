// プラグインを読み込む
const gulp = require('gulp');
const sass = require ('gulp-sass')(require('sass'));
const postcss =require('gulp-postcss');
// const concat = require('gulp-concat');
const autoprefixer = require('autoprefixer');
const imagemin = require('gulp-imagemin');
const imageminGifsicle = require('imagemin-gifsicle');
const imageminMozjpeg = require('imagemin-mozjpeg');
const imageminPngquant = require('imagemin-pngquant');
const imageminSvgo =require ('imagemin-svgo');
const browserSync =require  ('browser-sync').create();
const plumber = require ('gulp-plumber');
const notify  = require('gulp-notify');
const sassGlob = require("gulp-sass-glob-use-forward");
const gulpDartSass = require('gulp-dart-sass');
const userDir =require('os').homedir();
const themeDir ='${userDir}/Local Sites/miyabishinkyuin/app/piblic/wp-content/themes/miyabishinkyuuin';

// const fiber = require('fibers');

// HTMLを読み込む
function phpCopy(){
    return gulp.src('src/**/*.php')
    .pipe(gulp.dest('./'));
}

// Sassをコンパイルする
function cssTranspile(){
    return gulp.src('src/sass/**/*.scss')
    .pipe(sass())
    .pipe(sassGlob())    // glob機能を使って@useや@forwardを省略する
    // .pipe(sass({ // sass option
    //     fiber: fiber,
    //     outputStyle: "expanded"
    //   }))
    .pipe(
        sass.sync({
            includePaths:['node_modules','src/sass'],
            outputStyle: 'expanded'
        }).on('error',sass.logError)
    )
      .pipe(gulpDartSass({
        outputStyle: 'expanded'
      }))
    .pipe(postcss([autoprefixer()]))
    .pipe(plumber({
        errorHandler:notify.onError('Error:< %= error.message %>'),
    }))
    .pipe(gulp.dest('./css'))
    .pipe(notify({
    message:'Sassをコンパイルしました',
    onLast: true,
    }));

}sass.compiler = require("sass"); // Dart Sass = "sass"


// javascriptをコンパイルする
function jsTranspile(){
    return gulp.src('src/js/*.js')
    .pipe(gulp.dest('./js'));
}
// jsファイルを結合する
// function task() {
//     return gulp.src(['./src/js/*.js'])
//     .pipe(concat('script.js'))
//     .pipe(gulp.dest('./dest/js/'));
//   }
//   exports.task = task;



// 画像を圧縮する
function imageCompress(){
    return gulp.src('src/img/**/*.{jpg,jpeg,gif,png,svg}')
    .pipe(imagemin([
        imageminGifsicle({optimizationLevel:3}),
        imageminMozjpeg({quality:80}),
        imageminPngquant(),
        imageminSvgo({
            plugins:[{
                name:'removeViewBox',
                active:false,
            }]
        })
    ],{verbose:true}))
    .pipe(gulp.dest('./img/'));
}

// ブラウザのオートリロードを初期化する関数
function browserSyncInit(){
    browserSync.init({
        proxy:
        'http://miyabishinkyuin.wp/', //destフォルダを表示//
        
    });
}
// ブラウザのオートリロードを実際に行う関数
function browserSyncReload(callback){
    browserSync.reload();
    callback();
}
// ファイルの変更を監視して、変更されたら変更・圧縮を行い、ブラウザをリロードする関数
function watchFiles(){
    gulp.watch('src/**/*.php', gulp.series(phpCopy,browserSyncReload));
    gulp.watch('src/sass/**/*.scss', gulp.series(cssTranspile,browserSyncReload));
    gulp.watch('src/img/**/*',gulp.series(imageCompress,browserSyncReload));
}




// デフォルトタスクでは、①HTMLのコピー②Sassのコンパイルを連続して実行する
exports.default = gulp.series(phpCopy,cssTranspile,imageCompress,jsTranspile,
    gulp.parallel(browserSyncInit,watchFiles)//ファイルを監視し続ける（終わらない）終わらせる時はControl+ Cで//
    );

