var gulp = require('gulp'), // Подключаем Gulp
    sass = require('gulp-sass'), //Подключаем Sass пакет,
    browserSync = require('browser-sync'), // Подключаем Browser Sync
    concat = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
    uglify = require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
    cssnano = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
    rename = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
    del = require('del'), // Подключаем библиотеку для удаления файлов и папок
    imagemin = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
    pngquant = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
    cache = require('gulp-cache'), // Подключаем библиотеку кеширования
    autoprefixer = require('gulp-autoprefixer'); // Подключаем библиотеку для автоматического добавления префиксов

gulp.task('sass', function() { // Создаем таск Sass
    return gulp.src('app/sass/**/*.scss') // Берем источник
        .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {
            cascade: true
        })) // Создаем префиксы
        .pipe(gulp.dest('css')) // Выгружаем результата в папку app/css
        .pipe(browserSync.reload({
            stream: true
        })) // Обновляем CSS на странице при изменении
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browserSync
        proxy: {
            target: 'wp-proj' // Директория для сервера - app
        },
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: true
        },
        notify: false // Отключаем уведомления
    });
});

gulp.task('scripts', function() {
    return gulp.src([ // Берем все необходимые библиотеки
            'app/libs/jquery/dist/jquery.min.js',
            'app/libs/bootstrap/dist/js/bootstrap.min.js', // Берем jQuery
        ])
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest('js')); // Выгружаем в папку app/js
});

gulp.task('css-libs', ['sass'], function() {
    return gulp.src('app/css/libs.css') // Выбираем файл для минификации
        .pipe(cssnano()) // Сжимаем
        .pipe(rename({
            suffix: '.min'
        })) // Добавляем суффикс .min
        .pipe(gulp.dest('css')); // Выгружаем в папку app/css
});

gulp.task('watch', ['browser-sync', 'css-libs', 'scripts'], function() {
    gulp.watch('app/sass/**/*.scss', ['sass']); // Наблюдение за sass файлами в папке sass
    gulp.watch('./**/*.php', browserSync.reload); // Наблюдение за HTML файлами в корне проекта
    gulp.watch('app/js/**/*.js', browserSync.reload); // Наблюдение за JS файлами в папке js
});

/*gulp.task('clean', function() {
return del.sync('dist'); // Удаляем папку dist перед сборкой
});*/

gulp.task('img', function() {
    return gulp.src('app/img/**/*') // Берем все изображения из app
        .pipe(cache(imagemin({ // Сжимаем их с наилучшими настройками с учетом кеширования
            interlaced: true,
            progressive: true,
            svgoPlugins: [{
                removeViewBox: false
            }],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('img')); // Выгружаем на продакшен
});

gulp.task('build', ['img', 'sass', 'scripts'], function() {

    var buildCss = gulp.src([ // Переносим библиотеки в продакшен
            'app/css/main.css',
            'app/css/libs.min.css'
        ])
        .pipe(gulp.dest('css'))

    var buildFonts = gulp.src('app/fonts/**/*') // Переносим шрифты в продакшен
        .pipe(gulp.dest('fonts'))

    var buildJs = gulp.src('app/js/**/*') // Переносим скрипты в продакшен
        .pipe(gulp.dest('js'))

});

gulp.task('clear', function(callback) {
    return cache.clearAll();
});
gulp.task('default', ['watch']);