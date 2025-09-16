/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */


// start the Stimulus application
// import './bootstrap';
// any CSS you import will output into a single css file (app.css in this case)
import './scss/app.scss';

/**
 * The following content was designed & implemented under AlexSeif.com
 **/
/**
 * Function to resize text to fill its container
 * @param {HTMLElement} element - The element containing the text
 */



$(function () {



    // assets/js/Nav.js

    const navDiv = document.getElementById('nav');
    const footerDiv = document.getElementsByTagName('footer');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) { // adjust the scroll threshold as needed
            navDiv.classList.add('scrolled');
            footerDiv[0].classList.add('scrolled');
        } else {
            navDiv.classList.remove('scrolled');
            footerDiv[0].classList.remove('scrolled');
        }
    });
});

/**
 * Home.js
 */
/**
 * The following content was designed & implemented under AlexSeif.com
 **/



document.addEventListener('DOMContentLoaded', init, false);

let APP;

function init() {
    APP = new App();

    events();

    loop();
}

function loop() {
    APP.render();

    requestAnimationFrame(loop);
}

function events() {
    document.addEventListener('mousemove', APP.mousemoveHandler, false);
    document.addEventListener('mouseleave', APP.mouseleaveHandler, false);

    window.addEventListener('resize', APP.resize, false);
}

class App {
    constructor() {
        this.canvas = document.getElementById('dotCanvas');
        this.context = this.canvas.getContext('2d');

        this.canvas.width = this.width = window.innerWidth;
        this.canvas.height = this.height = window.innerHeight;

        this.setupDots();

        this.resize = this.resize.bind(this);
        this.mousemoveHandler = this.mousemoveHandler.bind(this);
        this.mouseleaveHandler = this.mouseleaveHandler.bind(this);
    }

    setupDots() {
        this.dots = [];
        this.scl = 30;
        this.cols = this.width / this.scl;
        this.rows = this.height / this.scl;

        let id = 0;
        for (let x = 0; x < this.cols; x += 1) {
            for (let y = 0; y < this.rows; y += 1) {
                this.dots.push(new Dot(id, x * this.scl, y * this.scl, this.context, this.scl));
                id += 1;
            }
        }
    }

    resize() {
        this.canvas.width = this.width = window.innerWidth;
        this.canvas.height = this.height = window.innerHeight;

        this.setupDots();
    }

    mousemoveHandler(event) {
        this.dots.forEach(d => {
            d.mousemove(event);
        });
    }

    mouseleaveHandler() {
        this.dots.forEach(d => {
            d.isHover = false;
        });
    }

    render() {
        this.context.clearRect(0, 0, this.width, this.height);

        this.dots.forEach(d => {
            d.render();
        });
    }
}


class Dot {
    constructor(id, x, y, context, scl) {
        this.id = id;
        this.x = x;
        this.y = y;
        this.new = { x: x, y: y };
        this.radius = 1;

        this.context = context;
        this.scl = scl;
        this.isHover = false;
        this.isANimated = false;
    }

    mousemove(event) {
        const x = event.clientX;
        const y = event.clientY;

        this.isHover = Math.abs(this.x - x) < this.scl / 4 * 3 && Math.abs(this.y - y) < this.scl / 4 * 3 ? true : false;

        if (this.isHover) {
            TweenMax.to(
                this.new,
                0.4,
                { x: x, y: y });

        } else {
            TweenMax.to(
                this.new,
                0.4,
                { x: this.x, y: this.y });

        }
    }

    render() {
        this.context.beginPath();
        this.context.arc(this.new.x, this.new.y, this.radius, 0, Math.PI, false);

        this.context.fillStyle = '#fff';
        this.context.globalAlpha = this.isHover ? 1 : 0.25;
        this.context.fill();
    }

}
$(document).ready(function () {
    // Autocomplete functionality for tags
    const tagInput = $('.new-tag-input');
    const tagSelect = $('select.tag-autocomplete');

    tagInput.on('keypress', function (e) {
        if (e.which === 13 || e.which === 44) { // Enter key or comma pressed
            e.preventDefault();
            const newTag = tagInput.val().trim();
            if (newTag) {
                // Send the new tag via AJAX
                $.ajax({
                    url: '/tag/ajax/new',
                    method: 'POST',
                    data: { name: newTag },
                    success: function (response) {
                        // Check if the tag already exists
                        let exists = false;
                        tagSelect.find('option').each(function () {
                            if ($(this).text().toLowerCase() === newTag.toLowerCase()) {
                                exists = true;
                                $(this).prop('selected', true);
                            }
                        });

                        // If the tag doesn't exist, add it
                        if (!exists) {
                            const newOption = new Option(response.name, response.id, true, true);
                            tagSelect.append(newOption);
                        }

                        // Clear the input
                        tagInput.val('');
                    },
                    error: function (xhr) {
                        alert(xhr.responseJSON.error);
                    }
                });
            }
        }
    });
});
