/**
 * The following content was designed & implemented under AlexSeif.com
 **/


$(document).ready(function () {
    // $(".fittext").fitText();
    $(".x-menu-btn").click(function () {
        $(this).toggleClass("x-open")
            .blur();
        $("#nav-container").toggleClass("x-open");
        $('body').toggleClass('menu-open')
        // $('.fittext').css('font-size', '100%');
        // $('.fittext').fitText();
        // $('#nav-container nav').toggle("slide");
    });
});