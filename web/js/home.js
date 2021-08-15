/**
 * The following content was designed & implemented under AlexSeif.com
 **/

function createNoise() {
    var canvas = document.getElementById("noise-canvas");

    var w = (canvas.width = 64);
    var h = (canvas.height = 64);

    var context = canvas.getContext("2d");

    for (i = 0; i < w; i++) {
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