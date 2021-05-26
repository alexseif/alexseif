/* 
 * The following content was designed & implemented under AlexSeif.com
 */

// Logo color
function logoColor() {
    var light = $('section:nth-child(even)');
    var light_pos = light.offset().top;
    var light_height = light.height();
 var projects_pos = $('section.projects').offset().top;
 var projects_height = $('section.projects').height();
//  var christmas_pos = $('section.christmas').offset().top;
//  var christmas_height = $('section.christmas').height();
//     var projects_pos = 0;
//     var projects_height = 0;
    var christmas_pos = 0;
    var christmas_height = 0;
    var alx = $('#alx');
    var menu_pos = alx.offset().top;
    alx.height();

    //console.log('light', light_pos);
    //console.log('projects', projects_pos);
    //console.log('menu', menu_pos);

    if (menu_pos > light_pos && menu_pos < (light_pos + light_height)) {
        alx.addClass('menu_black');
        alx.removeClass('menu_white');
    } else {
        alx.removeClass('menu_black');
        alx.addClass('menu_white');
    }
    if (menu_pos > projects_pos && menu_pos < (projects_pos + projects_height)) {
        alx.addClass('menu_black');
        alx.removeClass('menu_white');
    }
    if (menu_pos > christmas_pos && menu_pos < (christmas_pos + christmas_height)) {
        alx.addClass('menu_black');
        alx.removeClass('menu_white');
    }
}

//Footer size
function siteFooter() {
    var siteContent = $('.projects');

    var siteFooter = $('footer');v
    var siteFooterHeight = siteFooter.height();

    siteContent.css({
        "margin-bottom": siteFooterHeight + 80
    });
}

//cycle through emoji greetings
function cycleEmoji() {
    var divs = $('span[id^="cycling-"]').hide(),
        i = 0;
    (function cycle() {
            divs.eq(i).fadeIn(200).delay(1000).fadeOut(200, cycle);
            i = ++i % divs.length;
        }
    )();
}

//cycle through people
function cyclePeople() {
    $("#interactive-text").typed({
        strings: [
            "customers.",
            "employees.",
            "community.",
            "patients.",
            "clients."
        ],
        // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
        stringsElement: null,
        // typing speed
        typeSpeed: 30,
        // time before typing starts
        startDelay: 0,
        // backspacing speed
        backSpeed: 0,
        // time before backspacing
        backDelay: 2000,
        // loop
        loop: true,
        // false = infinite
        loopCount: 2,
        // show cursor
        showCursor: true,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // either html or text
        contentType: 'text',
        preStringTyped: function (count) {
            let txtEl = $('#pre-intr-text');
            switch (count) {
                case 1:
                    txtEl.text("more");
                    break;
                case 2:
                case 3:
                    txtEl.text("");
                    break;
                default:
                    txtEl.text("your");
                    break;
            }
        },
    });
}

$(document).ready(function () {
    // COULD BE SIMPLIFIED FOR THIS PEN BUT I WANT TO MAKE IT AS EASY TO PUT INTO YOUR SITE AS POSSIBLE
    $(window).resize(siteFooter);
    $(window).scroll(logoColor);
    // INITIATE THE Logo
    logoColor();
    // INITIATE THE FOOTER
    siteFooter();

    //hide baseline
    $(".baseline").hide();

    cycleEmoji();
    cyclePeople();

    window.sr = ScrollReveal({reset: true});
    sr.reveal('.sr', {mobile: false, delay: 10, scale: .95});
    sr.reveal('.sr');

    $(".baseline-toggle").click(function () {
        let baseline = $(".baseline");
        baseline.css('opacity', 1);
        baseline.toggle();
    });

    $('.wise-owl').hover(function () {
        $('.wise-owl-msg').fadeToggle();
    });

//  $('.fittext').fitText();
});

// https://www.w3schools.com/howto/howto_js_scroll_indicator.asp 
// When the user scrolls the page, execute scrollIndicator 
window.onscroll = function () {
    scrollIndicator()
};

function scrollIndicator() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}