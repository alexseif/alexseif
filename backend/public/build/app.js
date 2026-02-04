"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.push.js */ "./node_modules/core-js/modules/es.array.push.js");
/* harmony import */ var core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _scss_app_scss__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scss/app.scss */ "./assets/scss/app.scss");



/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// start the Stimulus application
// import './bootstrap';
// any CSS you import will output into a single css file (app.css in this case)


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
    if (window.scrollY > 100) {
      // adjust the scroll threshold as needed
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
    this.new = {
      x: x,
      y: y
    };
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
    this.isHover = Math.abs(this.x - x) < this.scl * 0.75 && Math.abs(this.y - y) < this.scl * 0.75;
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
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            name: newTag
          })
        }).then(res => res.json()).then(response => {
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
        }).catch(err => {
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

/***/ }),

/***/ "./assets/scss/app.scss":
/*!******************************!*\
  !*** ./assets/scss/app.scss ***!
  \******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/core-js/internals/array-set-length.js":
/*!************************************************************!*\
  !*** ./node_modules/core-js/internals/array-set-length.js ***!
  \************************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {


var DESCRIPTORS = __webpack_require__(/*! ../internals/descriptors */ "./node_modules/core-js/internals/descriptors.js");
var isArray = __webpack_require__(/*! ../internals/is-array */ "./node_modules/core-js/internals/is-array.js");

var $TypeError = TypeError;
// eslint-disable-next-line es/no-object-getownpropertydescriptor -- safe
var getOwnPropertyDescriptor = Object.getOwnPropertyDescriptor;

// Safari < 13 does not throw an error in this case
var SILENT_ON_NON_WRITABLE_LENGTH_SET = DESCRIPTORS && !function () {
  // makes no sense without proper strict mode support
  if (this !== undefined) return true;
  try {
    // eslint-disable-next-line es/no-object-defineproperty -- safe
    Object.defineProperty([], 'length', { writable: false }).length = 1;
  } catch (error) {
    return error instanceof TypeError;
  }
}();

module.exports = SILENT_ON_NON_WRITABLE_LENGTH_SET ? function (O, length) {
  if (isArray(O) && !getOwnPropertyDescriptor(O, 'length').writable) {
    throw new $TypeError('Cannot set read only .length');
  } return O.length = length;
} : function (O, length) {
  return O.length = length;
};


/***/ }),

/***/ "./node_modules/core-js/internals/does-not-exceed-safe-integer.js":
/*!************************************************************************!*\
  !*** ./node_modules/core-js/internals/does-not-exceed-safe-integer.js ***!
  \************************************************************************/
/***/ (function(module) {


var $TypeError = TypeError;
var MAX_SAFE_INTEGER = 0x1FFFFFFFFFFFFF; // 2 ** 53 - 1 == 9007199254740991

module.exports = function (it) {
  if (it > MAX_SAFE_INTEGER) throw $TypeError('Maximum allowed index exceeded');
  return it;
};


/***/ }),

/***/ "./node_modules/core-js/internals/is-array.js":
/*!****************************************************!*\
  !*** ./node_modules/core-js/internals/is-array.js ***!
  \****************************************************/
/***/ (function(module, __unused_webpack_exports, __webpack_require__) {


var classof = __webpack_require__(/*! ../internals/classof-raw */ "./node_modules/core-js/internals/classof-raw.js");

// `IsArray` abstract operation
// https://tc39.es/ecma262/#sec-isarray
// eslint-disable-next-line es/no-array-isarray -- safe
module.exports = Array.isArray || function isArray(argument) {
  return classof(argument) === 'Array';
};


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.push.js":
/*!*******************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.push.js ***!
  \*******************************************************/
/***/ (function(__unused_webpack_module, __unused_webpack_exports, __webpack_require__) {


var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var toObject = __webpack_require__(/*! ../internals/to-object */ "./node_modules/core-js/internals/to-object.js");
var lengthOfArrayLike = __webpack_require__(/*! ../internals/length-of-array-like */ "./node_modules/core-js/internals/length-of-array-like.js");
var setArrayLength = __webpack_require__(/*! ../internals/array-set-length */ "./node_modules/core-js/internals/array-set-length.js");
var doesNotExceedSafeInteger = __webpack_require__(/*! ../internals/does-not-exceed-safe-integer */ "./node_modules/core-js/internals/does-not-exceed-safe-integer.js");
var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");

var INCORRECT_TO_LENGTH = fails(function () {
  return [].push.call({ length: 0x100000000 }, 1) !== 4294967297;
});

// V8 <= 121 and Safari <= 15.4; FF < 23 throws InternalError
// https://bugs.chromium.org/p/v8/issues/detail?id=12681
var properErrorOnNonWritableLength = function () {
  try {
    // eslint-disable-next-line es/no-object-defineproperty -- safe
    Object.defineProperty([], 'length', { writable: false }).push();
  } catch (error) {
    return error instanceof TypeError;
  }
};

var FORCED = INCORRECT_TO_LENGTH || !properErrorOnNonWritableLength();

// `Array.prototype.push` method
// https://tc39.es/ecma262/#sec-array.prototype.push
$({ target: 'Array', proto: true, arity: 1, forced: FORCED }, {
  // eslint-disable-next-line no-unused-vars -- required for `.length`
  push: function push(item) {
    var O = toObject(this);
    var len = lengthOfArrayLike(O);
    var argCount = arguments.length;
    doesNotExceedSafeInteger(len + argCount);
    for (var i = 0; i < argCount; i++) {
      O[len] = arguments[i];
      len++;
    }
    setArrayLength(O, len);
    return len;
  }
});


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_esnext_iterator_constructor_js-node_modules_core-js_modu-374f7e"], function() { return __webpack_exec__("./assets/app.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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cEQsY0FBYyxtQkFBTyxDQUFDLDJFQUF1Qjs7QUFFN0M7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLDBDQUEwQyxpQkFBaUI7QUFDM0QsSUFBSTtBQUNKO0FBQ0E7QUFDQSxDQUFDOztBQUVEO0FBQ0E7QUFDQTtBQUNBLElBQUk7QUFDSixFQUFFO0FBQ0Y7QUFDQTs7Ozs7Ozs7Ozs7QUMxQmE7QUFDYjtBQUNBLHlDQUF5Qzs7QUFFekM7QUFDQTtBQUNBO0FBQ0E7Ozs7Ozs7Ozs7O0FDUGE7QUFDYixjQUFjLG1CQUFPLENBQUMsaUZBQTBCOztBQUVoRDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Ozs7Ozs7Ozs7O0FDUmE7QUFDYixRQUFRLG1CQUFPLENBQUMsdUVBQXFCO0FBQ3JDLGVBQWUsbUJBQU8sQ0FBQyw2RUFBd0I7QUFDL0Msd0JBQXdCLG1CQUFPLENBQUMsbUdBQW1DO0FBQ25FLHFCQUFxQixtQkFBTyxDQUFDLDJGQUErQjtBQUM1RCwrQkFBK0IsbUJBQU8sQ0FBQyxtSEFBMkM7QUFDbEYsWUFBWSxtQkFBTyxDQUFDLHFFQUFvQjs7QUFFeEM7QUFDQSx3QkFBd0IscUJBQXFCO0FBQzdDLENBQUM7O0FBRUQsaUNBQWlDO0FBQ2pDO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsMENBQTBDLGlCQUFpQjtBQUMzRCxJQUFJO0FBQ0o7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7QUFDQSxJQUFJLHdEQUF3RDtBQUM1RDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxvQkFBb0IsY0FBYztBQUNsQztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc2Nzcy9hcHAuc2Nzcz80ODIzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9hcnJheS1zZXQtbGVuZ3RoLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9kb2VzLW5vdC1leGNlZWQtc2FmZS1pbnRlZ2VyLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9pcy1hcnJheS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLmFycmF5LnB1c2guanMiXSwic291cmNlc0NvbnRlbnQiOlsiLypcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcbiAqXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxuICovXG5cblxuLy8gc3RhcnQgdGhlIFN0aW11bHVzIGFwcGxpY2F0aW9uXG4vLyBpbXBvcnQgJy4vYm9vdHN0cmFwJztcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcbmltcG9ydCAnLi9zY3NzL2FwcC5zY3NzJztcblxuLyoqXG4gKiBUaGUgZm9sbG93aW5nIGNvbnRlbnQgd2FzIGRlc2lnbmVkICYgaW1wbGVtZW50ZWQgdW5kZXIgQWxleFNlaWYuY29tXG4gKiovXG4vKipcbiAqIEZ1bmN0aW9uIHRvIHJlc2l6ZSB0ZXh0IHRvIGZpbGwgaXRzIGNvbnRhaW5lclxuICogQHBhcmFtIHtIVE1MRWxlbWVudH0gZWxlbWVudCAtIFRoZSBlbGVtZW50IGNvbnRhaW5pbmcgdGhlIHRleHRcbiAqL1xuXG5cblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsICgpID0+IHtcblxuXG4gICAgLy8gYXNzZXRzL2pzL05hdi5qc1xuXG4gICAgY29uc3QgbmF2RGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ25hdicpO1xuICAgIGNvbnN0IGZvb3RlckRpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCdmb290ZXInKTtcblxuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdzY3JvbGwnLCAoKSA9PiB7XG4gICAgICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA+IDEwMCkgeyAvLyBhZGp1c3QgdGhlIHNjcm9sbCB0aHJlc2hvbGQgYXMgbmVlZGVkXG4gICAgICAgICAgICBuYXZEaXYuY2xhc3NMaXN0LmFkZCgnc2Nyb2xsZWQnKTtcbiAgICAgICAgICAgIGZvb3RlckRpdlswXS5jbGFzc0xpc3QuYWRkKCdzY3JvbGxlZCcpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgbmF2RGl2LmNsYXNzTGlzdC5yZW1vdmUoJ3Njcm9sbGVkJyk7XG4gICAgICAgICAgICBmb290ZXJEaXZbMF0uY2xhc3NMaXN0LnJlbW92ZSgnc2Nyb2xsZWQnKTtcbiAgICAgICAgfVxuICAgIH0pO1xufSk7XG5cbi8qKlxuICogSG9tZS5qc1xuICovXG4vKipcbiAqIFRoZSBmb2xsb3dpbmcgY29udGVudCB3YXMgZGVzaWduZWQgJiBpbXBsZW1lbnRlZCB1bmRlciBBbGV4U2VpZi5jb21cbiAqKi9cblxuXG5cbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBpbml0LCBmYWxzZSk7XG5cbmxldCBBUFA7XG5cbmZ1bmN0aW9uIGluaXQoKSB7XG4gICAgQVBQID0gbmV3IEFwcCgpO1xuXG4gICAgZXZlbnRzKCk7XG5cbiAgICBsb29wKCk7XG59XG5cbmZ1bmN0aW9uIGxvb3AoKSB7XG4gICAgQVBQLnJlbmRlcigpO1xuXG4gICAgcmVxdWVzdEFuaW1hdGlvbkZyYW1lKGxvb3ApO1xufVxuXG5mdW5jdGlvbiBldmVudHMoKSB7XG4gICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignbW91c2Vtb3ZlJywgQVBQLm1vdXNlbW92ZUhhbmRsZXIsIGZhbHNlKTtcbiAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdtb3VzZWxlYXZlJywgQVBQLm1vdXNlbGVhdmVIYW5kbGVyLCBmYWxzZSk7XG5cbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigncmVzaXplJywgQVBQLnJlc2l6ZSwgZmFsc2UpO1xufVxuXG5jbGFzcyBBcHAge1xuICAgIGNvbnN0cnVjdG9yKCkge1xuICAgICAgICB0aGlzLmNhbnZhcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdkb3RDYW52YXMnKTtcbiAgICAgICAgdGhpcy5jb250ZXh0ID0gdGhpcy5jYW52YXMuZ2V0Q29udGV4dCgnMmQnKTtcblxuICAgICAgICB0aGlzLmNhbnZhcy53aWR0aCA9IHRoaXMud2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcbiAgICAgICAgdGhpcy5jYW52YXMuaGVpZ2h0ID0gdGhpcy5oZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XG5cbiAgICAgICAgdGhpcy5zZXR1cERvdHMoKTtcblxuICAgICAgICB0aGlzLnJlc2l6ZSA9IHRoaXMucmVzaXplLmJpbmQodGhpcyk7XG4gICAgICAgIHRoaXMubW91c2Vtb3ZlSGFuZGxlciA9IHRoaXMubW91c2Vtb3ZlSGFuZGxlci5iaW5kKHRoaXMpO1xuICAgICAgICB0aGlzLm1vdXNlbGVhdmVIYW5kbGVyID0gdGhpcy5tb3VzZWxlYXZlSGFuZGxlci5iaW5kKHRoaXMpO1xuICAgIH1cblxuICAgIHNldHVwRG90cygpIHtcbiAgICAgICAgdGhpcy5kb3RzID0gW107XG4gICAgICAgIHRoaXMuc2NsID0gMzA7XG4gICAgICAgIHRoaXMuY29scyA9IHRoaXMud2lkdGggLyB0aGlzLnNjbDtcbiAgICAgICAgdGhpcy5yb3dzID0gdGhpcy5oZWlnaHQgLyB0aGlzLnNjbDtcblxuICAgICAgICBsZXQgaWQgPSAwO1xuICAgICAgICBmb3IgKGxldCB4ID0gMDsgeCA8IHRoaXMuY29sczsgeCArPSAxKSB7XG4gICAgICAgICAgICBmb3IgKGxldCB5ID0gMDsgeSA8IHRoaXMucm93czsgeSArPSAxKSB7XG4gICAgICAgICAgICAgICAgdGhpcy5kb3RzLnB1c2gobmV3IERvdChpZCwgeCAqIHRoaXMuc2NsLCB5ICogdGhpcy5zY2wsIHRoaXMuY29udGV4dCwgdGhpcy5zY2wpKTtcbiAgICAgICAgICAgICAgICBpZCArPSAxO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuXG4gICAgcmVzaXplKCkge1xuICAgICAgICB0aGlzLmNhbnZhcy53aWR0aCA9IHRoaXMud2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcbiAgICAgICAgdGhpcy5jYW52YXMuaGVpZ2h0ID0gdGhpcy5oZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQ7XG5cbiAgICAgICAgdGhpcy5zZXR1cERvdHMoKTtcbiAgICB9XG5cbiAgICBtb3VzZW1vdmVIYW5kbGVyKGV2ZW50KSB7XG4gICAgICAgIHRoaXMuZG90cy5mb3JFYWNoKGQgPT4ge1xuICAgICAgICAgICAgZC5tb3VzZW1vdmUoZXZlbnQpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBtb3VzZWxlYXZlSGFuZGxlcigpIHtcbiAgICAgICAgdGhpcy5kb3RzLmZvckVhY2goZCA9PiB7XG4gICAgICAgICAgICBkLmlzSG92ZXIgPSBmYWxzZTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgcmVuZGVyKCkge1xuICAgICAgICB0aGlzLmNvbnRleHQuY2xlYXJSZWN0KDAsIDAsIHRoaXMud2lkdGgsIHRoaXMuaGVpZ2h0KTtcblxuICAgICAgICB0aGlzLmRvdHMuZm9yRWFjaChkID0+IHtcbiAgICAgICAgICAgIGQucmVuZGVyKCk7XG4gICAgICAgIH0pO1xuICAgIH1cbn1cblxuY2xhc3MgRG90IHtcbiAgICBjb25zdHJ1Y3RvcihpZCwgeCwgeSwgY29udGV4dCwgc2NsKSB7XG4gICAgICAgIHRoaXMuaWQgPSBpZDtcbiAgICAgICAgdGhpcy54ID0geDtcbiAgICAgICAgdGhpcy55ID0geTtcbiAgICAgICAgdGhpcy5uZXcgPSB7IHg6IHgsIHk6IHkgfTtcbiAgICAgICAgdGhpcy5yYWRpdXMgPSAxO1xuXG4gICAgICAgIHRoaXMuY29udGV4dCA9IGNvbnRleHQ7XG4gICAgICAgIHRoaXMuc2NsID0gc2NsO1xuICAgICAgICB0aGlzLmlzSG92ZXIgPSBmYWxzZTtcbiAgICB9XG5cbiAgICBlYXNlKGN1cnJlbnQsIHRhcmdldCwgZmFjdG9yID0gMC4xKSB7XG4gICAgICAgIHJldHVybiBjdXJyZW50ICsgKHRhcmdldCAtIGN1cnJlbnQpICogZmFjdG9yO1xuICAgIH1cblxuICAgIG1vdXNlbW92ZShldmVudCkge1xuICAgICAgICBjb25zdCB4ID0gZXZlbnQuY2xpZW50WDtcbiAgICAgICAgY29uc3QgeSA9IGV2ZW50LmNsaWVudFk7XG5cbiAgICAgICAgdGhpcy5pc0hvdmVyID0gTWF0aC5hYnModGhpcy54IC0geCkgPCB0aGlzLnNjbCAqIDAuNzUgJiZcbiAgICAgICAgICAgIE1hdGguYWJzKHRoaXMueSAtIHkpIDwgdGhpcy5zY2wgKiAwLjc1O1xuXG4gICAgICAgIHRoaXMudGFyZ2V0WCA9IHRoaXMuaXNIb3ZlciA/IHggOiB0aGlzLng7XG4gICAgICAgIHRoaXMudGFyZ2V0WSA9IHRoaXMuaXNIb3ZlciA/IHkgOiB0aGlzLnk7XG4gICAgfVxuXG4gICAgcmVuZGVyKCkge1xuICAgICAgICAvLyBTbW9vdGhseSBpbnRlcnBvbGF0ZSB0b3dhcmQgdGFyZ2V0XG4gICAgICAgIHRoaXMubmV3LnggPSB0aGlzLmVhc2UodGhpcy5uZXcueCwgdGhpcy50YXJnZXRYID8/IHRoaXMueCk7XG4gICAgICAgIHRoaXMubmV3LnkgPSB0aGlzLmVhc2UodGhpcy5uZXcueSwgdGhpcy50YXJnZXRZID8/IHRoaXMueSk7XG5cbiAgICAgICAgdGhpcy5jb250ZXh0LmJlZ2luUGF0aCgpO1xuICAgICAgICB0aGlzLmNvbnRleHQuYXJjKHRoaXMubmV3LngsIHRoaXMubmV3LnksIHRoaXMucmFkaXVzLCAwLCBNYXRoLlBJLCBmYWxzZSk7XG5cbiAgICAgICAgdGhpcy5jb250ZXh0LmZpbGxTdHlsZSA9ICcjZmZmJztcbiAgICAgICAgdGhpcy5jb250ZXh0Lmdsb2JhbEFscGhhID0gdGhpcy5pc0hvdmVyID8gMSA6IDAuMjU7XG4gICAgICAgIHRoaXMuY29udGV4dC5maWxsKCk7XG4gICAgfVxufVxuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgKCkgPT4ge1xuICAgIGNvbnN0IHRhZ0lucHV0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5ldy10YWctaW5wdXQnKTtcbiAgICBjb25zdCB0YWdTZWxlY3QgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdzZWxlY3QudGFnLWF1dG9jb21wbGV0ZScpO1xuXG4gICAgaWYgKCF0YWdJbnB1dCB8fCAhdGFnU2VsZWN0KSByZXR1cm47IC8vIEV4aXQgZWFybHkgaWYgZWxlbWVudHMgYXJlIG1pc3NpbmdcblxuICAgIHRhZ0lucHV0LmFkZEV2ZW50TGlzdGVuZXIoJ2tleXByZXNzJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgaWYgKGUua2V5ID09PSAnRW50ZXInIHx8IGUua2V5ID09PSAnLCcpIHtcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgIGNvbnN0IG5ld1RhZyA9IHRhZ0lucHV0LnZhbHVlLnRyaW0oKTtcbiAgICAgICAgICAgIGlmIChuZXdUYWcpIHtcbiAgICAgICAgICAgICAgICBmZXRjaCgnL3RhZy9hamF4L25ldycsIHtcbiAgICAgICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgICAgIGhlYWRlcnM6IHsgJ0NvbnRlbnQtVHlwZSc6ICdhcHBsaWNhdGlvbi9qc29uJyB9LFxuICAgICAgICAgICAgICAgICAgICBib2R5OiBKU09OLnN0cmluZ2lmeSh7IG5hbWU6IG5ld1RhZyB9KVxuICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgIC50aGVuKHJlcyA9PiByZXMuanNvbigpKVxuICAgICAgICAgICAgICAgICAgICAudGhlbihyZXNwb25zZSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBsZXQgZXhpc3RzID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgICAgICAgICB0YWdTZWxlY3QucXVlcnlTZWxlY3RvckFsbCgnb3B0aW9uJykuZm9yRWFjaChvcHRpb24gPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChvcHRpb24udGV4dENvbnRlbnQudG9Mb3dlckNhc2UoKSA9PT0gbmV3VGFnLnRvTG93ZXJDYXNlKCkpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZXhpc3RzID0gdHJ1ZTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb3B0aW9uLnNlbGVjdGVkID0gdHJ1ZTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKCFleGlzdHMpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25zdCBuZXdPcHRpb24gPSBuZXcgT3B0aW9uKHJlc3BvbnNlLm5hbWUsIHJlc3BvbnNlLmlkLCB0cnVlLCB0cnVlKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YWdTZWxlY3QuYXBwZW5kQ2hpbGQobmV3T3B0aW9uKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICAgICAgdGFnSW5wdXQudmFsdWUgPSAnJztcbiAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgLmNhdGNoKGVyciA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICBhbGVydChlcnIubWVzc2FnZSB8fCAnRXJyb3IgYWRkaW5nIHRhZycpO1xuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH0pO1xufSk7XG5cbi8vU2VydmljZXNcblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsICgpID0+IHtcbiAgICBjb25zdCBjYXJkcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJyNzZXJ2aWNlcyAuY2FyZCcpO1xuICAgIGNvbnNvbGUubG9nKGNhcmRzLmxlbmd0aCk7XG4gICAgaWYgKGNhcmRzLmxlbmd0aCA9PT0gMCkgcmV0dXJuO1xuXG4gICAgLy8gQ29uZmlndXJhdGlvblxuICAgIGNvbnN0IE1JTl9JTlRFUlZBTCA9IDMwMDA7IC8vIDMgc2Vjb25kc1xuICAgIGNvbnN0IE1BWF9JTlRFUlZBTCA9IDYwMDA7IC8vIDYgc2Vjb25kc1xuICAgIGNvbnN0IEZMSVBfRFVSQVRJT05fTVMgPSAxNTAwOyAvLyBIb3cgbG9uZyB0aGUgY2FyZCBzdGF5cyBmbGlwcGVkXG5cbiAgICBmdW5jdGlvbiBnZXRSYW5kb21DYXJkSW5kZXgoKSB7XG4gICAgICAgIHJldHVybiBNYXRoLmZsb29yKE1hdGgucmFuZG9tKCkgKiBjYXJkcy5sZW5ndGgpO1xuICAgIH1cblxuICAgIGZ1bmN0aW9uIHRvZ2dsZVJhbmRvbUZsaXAoKSB7XG4gICAgICAgIGNvbnN0IHJhbmRvbUluZGV4ID0gZ2V0UmFuZG9tQ2FyZEluZGV4KCk7XG4gICAgICAgIGNvbnN0IHJhbmRvbUNhcmQgPSBjYXJkc1tyYW5kb21JbmRleF07XG5cbiAgICAgICAgLy8gMS4gRmxpcCB0aGUgY2FyZFxuICAgICAgICByYW5kb21DYXJkLmNsYXNzTGlzdC5hZGQoJ2lzLWZsaXBwZWQnKTtcblxuICAgICAgICAvLyAyLiBTY2hlZHVsZSB0aGUgY2FyZCB0byBmbGlwIGJhY2sgYWZ0ZXIgYSBkdXJhdGlvblxuICAgICAgICBzZXRUaW1lb3V0KCgpID0+IHtcbiAgICAgICAgICAgIHJhbmRvbUNhcmQuY2xhc3NMaXN0LnJlbW92ZSgnaXMtZmxpcHBlZCcpO1xuICAgICAgICB9LCBGTElQX0RVUkFUSU9OX01TKTtcblxuICAgICAgICAvLyAzLiBTY2hlZHVsZSB0aGUgbmV4dCByYW5kb20gZmxpcCB3aXRoIGEgbmV3IHJhbmRvbSBpbnRlcnZhbFxuICAgICAgICBjb25zdCBuZXh0SW50ZXJ2YWwgPSBNYXRoLnJhbmRvbSgpICogKE1BWF9JTlRFUlZBTCAtIE1JTl9JTlRFUlZBTCkgKyBNSU5fSU5URVJWQUw7XG4gICAgICAgIHNldFRpbWVvdXQodG9nZ2xlUmFuZG9tRmxpcCwgbmV4dEludGVydmFsKTtcbiAgICB9XG5cbiAgICAvLyBTdGFydCB0aGUgcmFuZG9tIGZsaXAgY3ljbGUgYWZ0ZXIgYSBzaG9ydCBkZWxheVxuICAgIHNldFRpbWVvdXQodG9nZ2xlUmFuZG9tRmxpcCwgTUlOX0lOVEVSVkFMKTtcbn0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIid1c2Ugc3RyaWN0JztcbnZhciBERVNDUklQVE9SUyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kZXNjcmlwdG9ycycpO1xudmFyIGlzQXJyYXkgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtYXJyYXknKTtcblxudmFyICRUeXBlRXJyb3IgPSBUeXBlRXJyb3I7XG4vLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgZXMvbm8tb2JqZWN0LWdldG93bnByb3BlcnR5ZGVzY3JpcHRvciAtLSBzYWZlXG52YXIgZ2V0T3duUHJvcGVydHlEZXNjcmlwdG9yID0gT2JqZWN0LmdldE93blByb3BlcnR5RGVzY3JpcHRvcjtcblxuLy8gU2FmYXJpIDwgMTMgZG9lcyBub3QgdGhyb3cgYW4gZXJyb3IgaW4gdGhpcyBjYXNlXG52YXIgU0lMRU5UX09OX05PTl9XUklUQUJMRV9MRU5HVEhfU0VUID0gREVTQ1JJUFRPUlMgJiYgIWZ1bmN0aW9uICgpIHtcbiAgLy8gbWFrZXMgbm8gc2Vuc2Ugd2l0aG91dCBwcm9wZXIgc3RyaWN0IG1vZGUgc3VwcG9ydFxuICBpZiAodGhpcyAhPT0gdW5kZWZpbmVkKSByZXR1cm4gdHJ1ZTtcbiAgdHJ5IHtcbiAgICAvLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgZXMvbm8tb2JqZWN0LWRlZmluZXByb3BlcnR5IC0tIHNhZmVcbiAgICBPYmplY3QuZGVmaW5lUHJvcGVydHkoW10sICdsZW5ndGgnLCB7IHdyaXRhYmxlOiBmYWxzZSB9KS5sZW5ndGggPSAxO1xuICB9IGNhdGNoIChlcnJvcikge1xuICAgIHJldHVybiBlcnJvciBpbnN0YW5jZW9mIFR5cGVFcnJvcjtcbiAgfVxufSgpO1xuXG5tb2R1bGUuZXhwb3J0cyA9IFNJTEVOVF9PTl9OT05fV1JJVEFCTEVfTEVOR1RIX1NFVCA/IGZ1bmN0aW9uIChPLCBsZW5ndGgpIHtcbiAgaWYgKGlzQXJyYXkoTykgJiYgIWdldE93blByb3BlcnR5RGVzY3JpcHRvcihPLCAnbGVuZ3RoJykud3JpdGFibGUpIHtcbiAgICB0aHJvdyBuZXcgJFR5cGVFcnJvcignQ2Fubm90IHNldCByZWFkIG9ubHkgLmxlbmd0aCcpO1xuICB9IHJldHVybiBPLmxlbmd0aCA9IGxlbmd0aDtcbn0gOiBmdW5jdGlvbiAoTywgbGVuZ3RoKSB7XG4gIHJldHVybiBPLmxlbmd0aCA9IGxlbmd0aDtcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgJFR5cGVFcnJvciA9IFR5cGVFcnJvcjtcbnZhciBNQVhfU0FGRV9JTlRFR0VSID0gMHgxRkZGRkZGRkZGRkZGRjsgLy8gMiAqKiA1MyAtIDEgPT0gOTAwNzE5OTI1NDc0MDk5MVxuXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIChpdCkge1xuICBpZiAoaXQgPiBNQVhfU0FGRV9JTlRFR0VSKSB0aHJvdyAkVHlwZUVycm9yKCdNYXhpbXVtIGFsbG93ZWQgaW5kZXggZXhjZWVkZWQnKTtcbiAgcmV0dXJuIGl0O1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBjbGFzc29mID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NsYXNzb2YtcmF3Jyk7XG5cbi8vIGBJc0FycmF5YCBhYnN0cmFjdCBvcGVyYXRpb25cbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtaXNhcnJheVxuLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLWFycmF5LWlzYXJyYXkgLS0gc2FmZVxubW9kdWxlLmV4cG9ydHMgPSBBcnJheS5pc0FycmF5IHx8IGZ1bmN0aW9uIGlzQXJyYXkoYXJndW1lbnQpIHtcbiAgcmV0dXJuIGNsYXNzb2YoYXJndW1lbnQpID09PSAnQXJyYXknO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciAkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2V4cG9ydCcpO1xudmFyIHRvT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLW9iamVjdCcpO1xudmFyIGxlbmd0aE9mQXJyYXlMaWtlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2xlbmd0aC1vZi1hcnJheS1saWtlJyk7XG52YXIgc2V0QXJyYXlMZW5ndGggPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktc2V0LWxlbmd0aCcpO1xudmFyIGRvZXNOb3RFeGNlZWRTYWZlSW50ZWdlciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kb2VzLW5vdC1leGNlZWQtc2FmZS1pbnRlZ2VyJyk7XG52YXIgZmFpbHMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZmFpbHMnKTtcblxudmFyIElOQ09SUkVDVF9UT19MRU5HVEggPSBmYWlscyhmdW5jdGlvbiAoKSB7XG4gIHJldHVybiBbXS5wdXNoLmNhbGwoeyBsZW5ndGg6IDB4MTAwMDAwMDAwIH0sIDEpICE9PSA0Mjk0OTY3Mjk3O1xufSk7XG5cbi8vIFY4IDw9IDEyMSBhbmQgU2FmYXJpIDw9IDE1LjQ7IEZGIDwgMjMgdGhyb3dzIEludGVybmFsRXJyb3Jcbi8vIGh0dHBzOi8vYnVncy5jaHJvbWl1bS5vcmcvcC92OC9pc3N1ZXMvZGV0YWlsP2lkPTEyNjgxXG52YXIgcHJvcGVyRXJyb3JPbk5vbldyaXRhYmxlTGVuZ3RoID0gZnVuY3Rpb24gKCkge1xuICB0cnkge1xuICAgIC8vIGVzbGludC1kaXNhYmxlLW5leHQtbGluZSBlcy9uby1vYmplY3QtZGVmaW5lcHJvcGVydHkgLS0gc2FmZVxuICAgIE9iamVjdC5kZWZpbmVQcm9wZXJ0eShbXSwgJ2xlbmd0aCcsIHsgd3JpdGFibGU6IGZhbHNlIH0pLnB1c2goKTtcbiAgfSBjYXRjaCAoZXJyb3IpIHtcbiAgICByZXR1cm4gZXJyb3IgaW5zdGFuY2VvZiBUeXBlRXJyb3I7XG4gIH1cbn07XG5cbnZhciBGT1JDRUQgPSBJTkNPUlJFQ1RfVE9fTEVOR1RIIHx8ICFwcm9wZXJFcnJvck9uTm9uV3JpdGFibGVMZW5ndGgoKTtcblxuLy8gYEFycmF5LnByb3RvdHlwZS5wdXNoYCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLnB1c2hcbiQoeyB0YXJnZXQ6ICdBcnJheScsIHByb3RvOiB0cnVlLCBhcml0eTogMSwgZm9yY2VkOiBGT1JDRUQgfSwge1xuICAvLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbm8tdW51c2VkLXZhcnMgLS0gcmVxdWlyZWQgZm9yIGAubGVuZ3RoYFxuICBwdXNoOiBmdW5jdGlvbiBwdXNoKGl0ZW0pIHtcbiAgICB2YXIgTyA9IHRvT2JqZWN0KHRoaXMpO1xuICAgIHZhciBsZW4gPSBsZW5ndGhPZkFycmF5TGlrZShPKTtcbiAgICB2YXIgYXJnQ291bnQgPSBhcmd1bWVudHMubGVuZ3RoO1xuICAgIGRvZXNOb3RFeGNlZWRTYWZlSW50ZWdlcihsZW4gKyBhcmdDb3VudCk7XG4gICAgZm9yICh2YXIgaSA9IDA7IGkgPCBhcmdDb3VudDsgaSsrKSB7XG4gICAgICBPW2xlbl0gPSBhcmd1bWVudHNbaV07XG4gICAgICBsZW4rKztcbiAgICB9XG4gICAgc2V0QXJyYXlMZW5ndGgoTywgbGVuKTtcbiAgICByZXR1cm4gbGVuO1xuICB9XG59KTtcbiJdLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJuYXZEaXYiLCJnZXRFbGVtZW50QnlJZCIsImZvb3RlckRpdiIsImdldEVsZW1lbnRzQnlUYWdOYW1lIiwid2luZG93Iiwic2Nyb2xsWSIsImNsYXNzTGlzdCIsImFkZCIsInJlbW92ZSIsImluaXQiLCJBUFAiLCJBcHAiLCJldmVudHMiLCJsb29wIiwicmVuZGVyIiwicmVxdWVzdEFuaW1hdGlvbkZyYW1lIiwibW91c2Vtb3ZlSGFuZGxlciIsIm1vdXNlbGVhdmVIYW5kbGVyIiwicmVzaXplIiwiY29uc3RydWN0b3IiLCJjYW52YXMiLCJjb250ZXh0IiwiZ2V0Q29udGV4dCIsIndpZHRoIiwiaW5uZXJXaWR0aCIsImhlaWdodCIsImlubmVySGVpZ2h0Iiwic2V0dXBEb3RzIiwiYmluZCIsImRvdHMiLCJzY2wiLCJjb2xzIiwicm93cyIsImlkIiwieCIsInkiLCJwdXNoIiwiRG90IiwiZXZlbnQiLCJmb3JFYWNoIiwiZCIsIm1vdXNlbW92ZSIsImlzSG92ZXIiLCJjbGVhclJlY3QiLCJuZXciLCJyYWRpdXMiLCJlYXNlIiwiY3VycmVudCIsInRhcmdldCIsImZhY3RvciIsImNsaWVudFgiLCJjbGllbnRZIiwiTWF0aCIsImFicyIsInRhcmdldFgiLCJ0YXJnZXRZIiwiYmVnaW5QYXRoIiwiYXJjIiwiUEkiLCJmaWxsU3R5bGUiLCJnbG9iYWxBbHBoYSIsImZpbGwiLCJ0YWdJbnB1dCIsInF1ZXJ5U2VsZWN0b3IiLCJ0YWdTZWxlY3QiLCJlIiwia2V5IiwicHJldmVudERlZmF1bHQiLCJuZXdUYWciLCJ2YWx1ZSIsInRyaW0iLCJmZXRjaCIsIm1ldGhvZCIsImhlYWRlcnMiLCJib2R5IiwiSlNPTiIsInN0cmluZ2lmeSIsIm5hbWUiLCJ0aGVuIiwicmVzIiwianNvbiIsInJlc3BvbnNlIiwiZXhpc3RzIiwicXVlcnlTZWxlY3RvckFsbCIsIm9wdGlvbiIsInRleHRDb250ZW50IiwidG9Mb3dlckNhc2UiLCJzZWxlY3RlZCIsIm5ld09wdGlvbiIsIk9wdGlvbiIsImFwcGVuZENoaWxkIiwiY2F0Y2giLCJlcnIiLCJhbGVydCIsIm1lc3NhZ2UiLCJjYXJkcyIsImNvbnNvbGUiLCJsb2ciLCJsZW5ndGgiLCJNSU5fSU5URVJWQUwiLCJNQVhfSU5URVJWQUwiLCJGTElQX0RVUkFUSU9OX01TIiwiZ2V0UmFuZG9tQ2FyZEluZGV4IiwiZmxvb3IiLCJyYW5kb20iLCJ0b2dnbGVSYW5kb21GbGlwIiwicmFuZG9tSW5kZXgiLCJyYW5kb21DYXJkIiwic2V0VGltZW91dCIsIm5leHRJbnRlcnZhbCJdLCJzb3VyY2VSb290IjoiIn0=