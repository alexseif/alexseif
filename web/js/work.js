/* 
 * The following content was designed & implemented under AlexSeif.com
 */


var canvas = document.getElementById('work-canvas'),
    header = document.querySelector('ul'),
    content = document.getElementById('site-wrapper'),
    ctx = canvas.getContext('2d');


function mouseIsOn(event) {

    canvas.style.transition = 'none';
    canvas.style.top = -(event.clientY / 20) + 'px';
    canvas.style.left = -(event.clientX / 20) + 'px';
}

function mouseIsOut(event) {

    canvas.style.transition = 'all 0.33s ease';
    canvas.style.top = '0px';
    canvas.style.left = '0px';
}


header.addEventListener('mousemove', mouseIsOn);
header.addEventListener('mouseout', mouseIsOut);

make_base();

function make_base(imgPath) {
    base_image = new Image();
    base_image.src = imgPath;
    base_image.onload = function () {
        ctx.drawImage(base_image, 0, 0);
    }
}

$('.work-item').mouseover(function () {
    make_base($(this).data('img'));
});
//rgb(57, 55, 53)
const [red, green, blue] = [69, 111, 225]
// const [red, green, blue] = [69, 111, 225]
const workPreviewBG = document.querySelector('.work-preview__bg')
const color_array = ["#FF6138", "#FFBE53", "#2980B9", "#282741"]
window.addEventListener('scroll', () => {
    const y = 1 + (window.scrollY || window.pageYOffset) / 150
    const [r, g, b] = [red / y, green / y, blue / y].map(Math.round)
    workPreviewBG.style.backgroundColor = `rgb(${r}, ${g}, ${b})`
})