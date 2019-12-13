/* 
 * The following content was designed & implemented under AlexSeif.com
 */

// Logo color
function logoColor() {
  var light_pos = $('section:nth-child(even)').offset().top;
  var light_height = $('section:nth-child(even)').height();
  var projects_pos = $('section.projects').offset().top;
  var projects_height = $('section.projects').height();
  var menu_pos = $('#alx').offset().top;
  var menu_height = $('#alx').height();
  var scroll = $(window).scrollTop();

  //console.log('light', light_pos);
  //console.log('projects', projects_pos);
  //console.log('menu', menu_pos);
  //console.log('scroll', scroll);

  if (menu_pos > light_pos && menu_pos < (light_pos + light_height)) {
    $('#alx').addClass('menu_black');
    $('#alx').removeClass('menu_white');
  } else {
    $('#alx').removeClass('menu_black');
    $('#alx').addClass('menu_white');
  }
  if (menu_pos > projects_pos && menu_pos < (projects_pos + projects_height)) {
    $('.page-elements').css('max-width', 100);
    $('#alx').addClass('menu_black');
    $('#alx').removeClass('menu_white');
  } else {
    $('.page-elements').css('max-width', 'unset');
  }
}
//Footer size
function siteFooter() {
  var siteContent = $('.projects');
  var siteContentHeight = siteContent.height();
  var siteContentWidth = siteContent.width();

  var siteFooter = $('footer');
  var siteFooterHeight = siteFooter.height();
  var siteFooterWidth = siteFooter.width();

  //console.log('Content Height = ' + siteContentHeight + 'px');
  //console.log('Content Width = ' + siteContentWidth + 'px');
  //console.log('Footer Height = ' + siteFooterHeight + 'px');
  //console.log('Footer Width = ' + siteFooterWidth + 'px');

  siteContent.css({
    "margin-bottom": siteFooterHeight + 100
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
      switch (count) {
        case 1:
          $('#pre-intr-text').text("more");
          break;
        case 2:
        case 3:
          $('#pre-intr-text').text("");
          break;
        default:
          $('#pre-intr-text').text("your");
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
    $(".baseline").css('opacity', 1);
    $(".baseline").toggle();
  });

  $('.wise-owl').hover(function () {
    $('.wise-owl-msg').fadeToggle();
  });
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