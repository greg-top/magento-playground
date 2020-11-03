"use strict";

const gulp = require("gulp");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
sass.compiler = require("node-sass");
const cleanCss = require("gulp-clean-css");

gulp.task("sass", function () {
    return gulp
        .src("./scss/styles.scss")
        .pipe(concat("banner.scss"))
        .pipe(sass().on("error", sass.logError))
        .pipe(cleanCss())
        .pipe(gulp.dest("../"));
});