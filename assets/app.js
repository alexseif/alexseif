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
import 'fittext.js';
import fullpage from 'free-fullpage';
/**
 * The following content was designed & implemented under AlexSeif.com
 **/
/**
 * Function to resize text to fill its container
 * @param {HTMLElement} element - The element containing the text
 */
function resizeTextToFill(element) {
    const container = element.parentElement;
    let fontSize = parseInt(window.getComputedStyle(element).fontSize, 10);

    // Increase font size until it fills the container
    while (element.scrollWidth < container.clientWidth && element.scrollHeight < container.clientHeight && element.scrollHeight < (window.innerHeight - 400)) {
        fontSize++;
        element.style.fontSize = fontSize + 'px';
    }

    // Optionally, decrease font size if it exceeds the container
    while (element.scrollWidth > container.clientWidth || element.scrollHeight > container.clientHeight) {
        fontSize--;
        element.style.fontSize = fontSize + 'px';
    }
}


$(function () {
    const textElement = $(".bigtext"); // Adjust selector as needed
    resizeTextToFill(textElement[0]); // Call the function with the first matched element

    $(".x-menu-btn").on("click", function () {
        $(this).toggleClass("x-open");
        $("#nav-container").toggleClass("x-open");
        $('body').toggleClass('menu-open');
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

$(function () {
    createNoise();
});