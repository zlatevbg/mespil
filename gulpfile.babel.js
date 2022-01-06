import gulp from 'gulp'
import tildeImporter from 'node-sass-tilde-importer'
import merge from 'merge-stream'
import notifier from 'node-notifier'
import postcssImportUrl from 'postcss-import-url'
import uglify from 'gulp-uglify-es'
import prefixer from 'autoprefixer'
import cssnano from 'cssnano'
import gp from 'gulp-load-plugins'
const $ = gp()
import minimist from 'minimist'
import config from './config.json'

let options = minimist(process.argv.slice(2), config.knownOptions)

let stylesTasks = []
let scriptsTasks = []
let copyTasks = []

// postCSS processors
const processors = [
    postcssImportUrl({ modernBrowser: true }),
    prefixer(),
    cssnano({
        safe: true
    }),
]

// Error handler
const onError = function (error) {
    notifier.notify({
        title: 'Error',
        message: 'Compilation failure.',
        appID: 'Laravel',
    })

    console.log(error)
    this.emit('end')
}

// Copy files
for (let subdomain in config.copy) {
    for (let task in config.copy[subdomain]) {
        copyTasks.push('copy/' + subdomain + '/' + task)

        gulp.task('copy/' + subdomain + '/' + task, done => {
            return gulp.src(config.copy[subdomain][task].src)
                .pipe($.plumber({ errorHandler: onError }))
                .pipe($.if(!options.skipcache, $.newer(config.copy[subdomain][task].dst + task)))
                .pipe($.if(typeof config.copy[subdomain][task].src === 'object', $.concat(task)))
                .pipe($.if(Boolean(config.copy[subdomain][task].header), $.header(config.copy[subdomain][task].header)))
                .pipe($.if(Boolean(config.copy[subdomain][task].replace), $.each((content, file, callback) => {
                    let newContent = content
                    for (let key in config.copy[subdomain][task].replace) {
                        newContent = newContent.replace(new RegExp(key, 'gm'), config.copy[subdomain][task].replace[key])
                    }
                    callback(null, newContent)
                })))
                .pipe($.if(Boolean(config.copy[subdomain][task].footer), $.footer(config.copy[subdomain][task].footer)))
                .pipe($.if(Boolean(config.copy[subdomain][task].name), $.rename(config.copy[subdomain][task].name), $.rename(task)))
                .pipe(gulp.dest(config.copy[subdomain][task].dst))
                .on('end', function() {
                    notifier.notify({
                        title: 'Copy compiled!',
                        message: task,
                        appID: 'Laravel',
                    })
                    done()
                })
        })
    }
}

// Compile sass
for (let subdomain in config.styles) {
    for (let task in config.styles[subdomain]) {
        stylesTasks.push('styles/' + subdomain + '/' + task)

        gulp.task('styles/' + subdomain + '/' + task, done => {
            return gulp.src(config.styles[subdomain][task].src)
                .pipe($.plumber({ errorHandler: onError }))
                .pipe($.if(!options.skipcache, $.newer({
                    dest: (config.styles[subdomain][task].dst + task),
                    extra: config.styles[subdomain][task].watch,
                })))
                .pipe($.if(typeof config.styles[subdomain][task].src === 'object', $.concat(task)))
                // .pipe($.if(!options.production, $.sourcemaps.init()))
                .pipe($.sass({
                    importer: tildeImporter
                }))
                .pipe($.postcss(processors))
                .pipe($.if(Boolean(config.styles[subdomain][task].name), $.rename(config.styles[subdomain][task].name), $.rename(task)))
                // .pipe($.if(!options.production, $.sourcemaps.write('./')))
                .pipe($.size({
                    title: 'styles.' + task,
                    gzip: true,
                }))
                .pipe(gulp.dest(config.styles[subdomain][task].dst))
                .on('end', function() {
                    notifier.notify({
                        title: 'Sass compiled!',
                        message: task,
                        appID: 'Laravel',
                    })
                    done()
                })
        })
    }
}

// Compile js
for (let subdomain in config.scripts) {
    for (let task in config.scripts[subdomain]) {
        scriptsTasks.push('scripts/' + subdomain + '/' + task)

        gulp.task('scripts/' + subdomain + '/' + task, done => {
            return gulp.src(config.scripts[subdomain][task].src)
                .pipe($.plumber({ errorHandler: onError }))
                .pipe($.if(!options.skipcache, $.newer({
                    dest: (config.scripts[subdomain][task].dst + task),
                    extra: config.scripts[subdomain][task].watch,
                })))
                // .pipe($.if(!options.production, $.sourcemaps.init()))
                .pipe($.if(typeof config.scripts[subdomain][task].src === 'object', $.concat(task)))
                // .pipe($.if(Boolean(config.scripts[subdomain][task].babel), $.babel({ compact: false })))
                .pipe($.include()) // include & require files after babel, ie only babelify my own files, not included vendor files
                // .pipe($.if(options.production, uglify()))
                .pipe(uglify())
                .pipe($.if(Boolean(config.scripts[subdomain][task].name), $.rename(config.scripts[subdomain][task].name), $.rename(task)))
                // .pipe($.if(!options.production, $.sourcemaps.write('./')))
                .pipe($.size({
                    title: 'scripts.' + task,
                    gzip: true,
                }))
                .pipe(gulp.dest(config.scripts[subdomain][task].dst))
                .on('end', function() {
                    notifier.notify({
                        title: 'Javascript compiled!',
                        message: task,
                        appID: 'Laravel',
                    })
                    done()
                })
        })
    }
}

// Optimize images
gulp.task('images', () => {
    let tasks = []

    for (let task in config.images) {
        let t = gulp.src(config.images[task].src)
            .pipe($.plumber({ errorHandler: onError }))
            .pipe($.newer(config.images[task].dst))
            .pipe($.imagemin())
            .pipe(gulp.dest(config.images[task].dst))
            .on('end', function() {
                notifier.notify({
                    title: 'Images processed!',
                    message: 'Done!',
                    appID: 'Laravel',
                })
                done()
            })
        tasks.push(t)
    };

  return merge(tasks)
})

gulp.task('copy', gulp.series(...copyTasks, done => {
    notifier.notify({
        title: 'Copy Files',
        message: 'Done!',
        appID: 'Laravel',
    })
    done()
}))

gulp.task('styles', gulp.series(...stylesTasks, done => {
    notifier.notify({
        title: 'Compile Styles',
        message: 'Done!',
        appID: 'Laravel',
    })
    done()
}))

gulp.task('scripts', gulp.series(...scriptsTasks, done => {
    notifier.notify({
        title: 'Compile Scripts',
        message: 'Done!',
        appID: 'Laravel',
    })
    done()
}))

gulp.task('default', gulp.series('copy', gulp.parallel('styles', 'scripts')), () => notifier.notify({ // [...copyTasks, ...stylesTasks, ...scriptsTasks]
    title: (options.production ? 'Production' : 'Development') + ' Build',
    message: 'Done!',
    appID: 'Laravel',
}))

gulp.task('watch', () => {
    for (let subdomain in config.styles) {
        for (let task in config.styles[subdomain]) {
            if (config.styles[subdomain][task].watch) {
                gulp.watch(config.styles[subdomain][task].watch, gulp.series('styles/' + subdomain + '/' + task))
            }
        }
    }

    for (let subdomain in config.scripts) {
        for (let task in config.scripts[subdomain]) {
            if (config.scripts[subdomain][task].watch) {
                gulp.watch(config.scripts[subdomain][task].watch, gulp.series('scripts/' + subdomain + '/' + task))
            }
        }
    }
})
