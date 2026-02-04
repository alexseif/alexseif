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



document.addEventListener('DOMContentLoaded', () => {


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
    }

    ease(current, target, factor = 0.1) {
        return current + (target - current) * factor;
    }

    mousemove(event) {
        const x = event.clientX;
        const y = event.clientY;

        this.isHover = Math.abs(this.x - x) < this.scl * 0.75 &&
            Math.abs(this.y - y) < this.scl * 0.75;

        this.targetX = this.isHover ? x : this.x;
        this.targetY = this.isHover ? y : this.y;
    }

    render() {
        // Smoothly interpolate toward target
        this.new.x = this.ease(this.new.x, this.targetX ?? this.x);
        this.new.y = this.ease(this.new.y, this.targetY ?? this.y);

        this.context.beginPath();
        this.context.arc(this.new.x, this.new.y, this.radius, 0, Math.PI, false);

        this.context.fillStyle = '#fff';
        this.context.globalAlpha = this.isHover ? 1 : 0.25;
        this.context.fill();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const tagInput = document.querySelector('.new-tag-input');
    const tagSelect = document.querySelector('select.tag-autocomplete');

    if (!tagInput || !tagSelect) return; // Exit early if elements are missing

    tagInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter' || e.key === ',') {
            e.preventDefault();
            const newTag = tagInput.value.trim();
            if (newTag) {
                fetch('/tag/ajax/new', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name: newTag })
                })
                    .then(res => res.json())
                    .then(response => {
                        let exists = false;
                        tagSelect.querySelectorAll('option').forEach(option => {
                            if (option.textContent.toLowerCase() === newTag.toLowerCase()) {
                                exists = true;
                                option.selected = true;
                            }
                        });

                        if (!exists) {
                            const newOption = new Option(response.name, response.id, true, true);
                            tagSelect.appendChild(newOption);
                        }

                        tagInput.value = '';
                    })
                    .catch(err => {
                        alert(err.message || 'Error adding tag');
                    });
            }
        }
    });
});

//Services

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('#services .card');
    console.log(cards.length);
    if (cards.length === 0) return;

    // Configuration
    const MIN_INTERVAL = 3000; // 3 seconds
    const MAX_INTERVAL = 6000; // 6 seconds
    const FLIP_DURATION_MS = 1500; // How long the card stays flipped

    function getRandomCardIndex() {
        return Math.floor(Math.random() * cards.length);
    }

    function toggleRandomFlip() {
        const randomIndex = getRandomCardIndex();
        const randomCard = cards[randomIndex];

        // 1. Flip the card
        randomCard.classList.add('is-flipped');

        // 2. Schedule the card to flip back after a duration
        setTimeout(() => {
            randomCard.classList.remove('is-flipped');
        }, FLIP_DURATION_MS);

        // 3. Schedule the next random flip with a new random interval
        const nextInterval = Math.random() * (MAX_INTERVAL - MIN_INTERVAL) + MIN_INTERVAL;
        setTimeout(toggleRandomFlip, nextInterval);
    }

    // Start the random flip cycle after a short delay
    setTimeout(toggleRandomFlip, MIN_INTERVAL);
});