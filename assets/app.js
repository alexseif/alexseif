/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */


// start the Stimulus application
import './bootstrap';
import 'html5shiv';
// any CSS you import will output into a single css file (app.css in this case)
import './scss/app.scss';
import $ from 'jquery';
require('bootstrap');

/**
 * The following content was designed & implemented under AlexSeif.com
 **/


$(document).ready(function () {
    // $(".fittext").fitText();
    $(".x-menu-btn").click(function () {
        $(this).toggleClass("x-open")
            .blur();
        $("#nav-container").toggleClass("x-open");
        $('body').toggleClass('menu-open');
        // $('.fittext').css('font-size', '100%');
        // $('.fittext').fitText();
        // $('#nav-container nav').toggle("slide");
    });

});

/**
 * Home.js
 */
/**
 * The following content was designed & implemented under AlexSeif.com
 **/

function createNoise() {
    var canvas = document.getElementById("noise-canvas");

    var w = (canvas.width = 64);
    var h = (canvas.height = 64);

    var context = canvas.getContext("2d");

    let i;
    for (i = 0; i < w; i++) {
        let j;
        for (j = 0; j < h; j++) {
            var num = Math.floor(Math.random() * 255);
            context.fillStyle = "rgb(" + num + "," + num + "," + num + ")";
            context.fillRect(i, j, 1, 1);
        }
    }

    $("#noise-bg").css({
        "background-image": "url(" + canvas.toDataURL() + ")"
    });
}

$(document).ready(function () {
    createNoise();
});