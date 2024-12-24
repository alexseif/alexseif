import './scss/christmas.scss';
//Christmas in nav

/* 
A christmas wonderland in HTML/CSS.
Made by Kevin Jannis (@kevinjannis)
Inspired by: http://dribbble.com/shots/1356999-Christmas
View more at www.janniskev.in
*/
var viewportWidth = $(window).width() - 50;

//////////////////////////
/// Days to christmas
//////////////////////////
const myDate = new Date();
const xmas = Date.parse("Dec 25, 2024")
const today = Date.parse(myDate)

const daysToChristmas = Math.round((xmas - today) / (1000 * 60 * 60 * 24))


if (daysToChristmas == 0)
    $('#days').text("It's Christmas!! Merry Christmas!");

if (daysToChristmas < 0)
    $('#days').text("Christmas was " + -1 * (daysToChristmas) + " days ago.");

if (daysToChristmas > 0)
    $('#days').text(daysToChristmas + " days to Christmas!");

//make snow

snowDrop(150, randomInt(0, viewportWidth));
snow(150, 150);

function snow(num, speed) {
    if (num > 0) {
        setTimeout(function () {
            $('#drop_' + randomInt(1, 250)).addClass('animate');
            num--;
            snow(num, speed);
        }, speed);
    }
};

function snowDrop(num, position) {

    if (num > 0) {
        var drop = '<div class="drop snow" id="drop_' + num + '"></div>';

        $('body').append(drop);
        $('#drop_' + num).css('left', position);
        num--;
        snowDrop(num, randomInt(60, 1280));
    }
};

function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
};