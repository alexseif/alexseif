"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["wp-optimize"],{

/***/ "./assets/wp-optimize.js":
/*!*******************************!*\
  !*** ./assets/wp-optimize.js ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scss_wp_optimize_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scss/wp-optimize.scss */ "./assets/scss/wp-optimize.scss");


/* global packages */


// Smooth scrolling for anchor links
function initSmoothScrolling() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function () {
  initSmoothScrolling();
});
function formatEGP(price) {
  return new Intl.NumberFormat('en-EG', {
    style: 'currency',
    currency: 'EGP',
    minimumFractionDigits: 0
  }).format(price);
}
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".package-pane");
  const details = document.querySelectorAll(".package-details");
  const pricingCard = document.getElementById("pricing-card");
  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      const key = tab.dataset.package;

      // Toggle active tab
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      // Toggle visible package
      details.forEach(d => d.style.display = "none");
      const activeDetail = document.getElementById(`package-${key}`);
      if (activeDetail) activeDetail.style.display = "block";

      // Format price
      // const priceSpan = activeDetail.querySelector(".price span");
      // if (priceSpan) {
      // const rawPrice = packages[key].price.replace(/[^\d.]/g, '');
      // priceSpan.textContent = formatEGP(parseFloat(rawPrice));
      // }

      // Scroll to pricing card
      if (pricingCard) {
        pricingCard.scrollIntoView({
          behavior: "smooth",
          block: "start"
        });
      }
    });
  });
});

/***/ }),

/***/ "./assets/scss/wp-optimize.scss":
/*!**************************************!*\
  !*** ./assets/scss/wp-optimize.scss ***!
  \**************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_esnext_iterator_constructor_js-node_modules_core-js_modu-374f7e"], function() { return __webpack_exec__("./assets/wp-optimize.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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dHMvc2Nzcy93cC1vcHRpbWl6ZS5zY3NzPzU4ZjkiXSwic291cmNlc0NvbnRlbnQiOlsiLyogZ2xvYmFsIHBhY2thZ2VzICovXG5pbXBvcnQgXCIuL3Njc3Mvd3Atb3B0aW1pemUuc2Nzc1wiO1xuXG4vLyBTbW9vdGggc2Nyb2xsaW5nIGZvciBhbmNob3IgbGlua3NcbmZ1bmN0aW9uIGluaXRTbW9vdGhTY3JvbGxpbmcoKSB7XG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnYVtocmVmXj1cIiNcIl0nKS5mb3JFYWNoKGFuY2hvciA9PiB7XG4gICAgICAgIGFuY2hvci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICBjb25zdCB0YXJnZXRJZCA9IHRoaXMuZ2V0QXR0cmlidXRlKCdocmVmJyk7XG4gICAgICAgICAgICBjb25zdCB0YXJnZXRFbGVtZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3Rvcih0YXJnZXRJZCk7XG4gICAgICAgICAgICBpZiAodGFyZ2V0RWxlbWVudCkge1xuICAgICAgICAgICAgICAgIHRhcmdldEVsZW1lbnQuc2Nyb2xsSW50b1ZpZXcoe1xuICAgICAgICAgICAgICAgICAgICBiZWhhdmlvcjogJ3Ntb290aCcsXG4gICAgICAgICAgICAgICAgICAgIGJsb2NrOiAnc3RhcnQnXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH0pO1xufVxuXG5cbi8vIEluaXRpYWxpemUgd2hlbiBET00gaXMgcmVhZHlcbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbiAoKSB7XG4gICAgaW5pdFNtb290aFNjcm9sbGluZygpO1xufSk7XG5cblxuXG5mdW5jdGlvbiBmb3JtYXRFR1AocHJpY2UpIHtcbiAgICByZXR1cm4gbmV3IEludGwuTnVtYmVyRm9ybWF0KCdlbi1FRycsIHtcbiAgICAgICAgc3R5bGU6ICdjdXJyZW5jeScsXG4gICAgICAgIGN1cnJlbmN5OiAnRUdQJyxcbiAgICAgICAgbWluaW11bUZyYWN0aW9uRGlnaXRzOiAwXG4gICAgfSkuZm9ybWF0KHByaWNlKTtcbn1cbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJET01Db250ZW50TG9hZGVkXCIsICgpID0+IHtcbiAgICBjb25zdCB0YWJzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5wYWNrYWdlLXBhbmVcIik7XG4gICAgY29uc3QgZGV0YWlscyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIucGFja2FnZS1kZXRhaWxzXCIpO1xuICAgIGNvbnN0IHByaWNpbmdDYXJkID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwcmljaW5nLWNhcmRcIik7XG5cbiAgICB0YWJzLmZvckVhY2godGFiID0+IHtcbiAgICAgICAgdGFiLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XG4gICAgICAgICAgICBjb25zdCBrZXkgPSB0YWIuZGF0YXNldC5wYWNrYWdlO1xuXG4gICAgICAgICAgICAvLyBUb2dnbGUgYWN0aXZlIHRhYlxuICAgICAgICAgICAgdGFicy5mb3JFYWNoKHQgPT4gdC5jbGFzc0xpc3QucmVtb3ZlKFwiYWN0aXZlXCIpKTtcbiAgICAgICAgICAgIHRhYi5jbGFzc0xpc3QuYWRkKFwiYWN0aXZlXCIpO1xuXG4gICAgICAgICAgICAvLyBUb2dnbGUgdmlzaWJsZSBwYWNrYWdlXG4gICAgICAgICAgICBkZXRhaWxzLmZvckVhY2goZCA9PiBkLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIik7XG4gICAgICAgICAgICBjb25zdCBhY3RpdmVEZXRhaWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChgcGFja2FnZS0ke2tleX1gKTtcbiAgICAgICAgICAgIGlmIChhY3RpdmVEZXRhaWwpIGFjdGl2ZURldGFpbC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xuXG4gICAgICAgICAgICAvLyBGb3JtYXQgcHJpY2VcbiAgICAgICAgICAgIC8vIGNvbnN0IHByaWNlU3BhbiA9IGFjdGl2ZURldGFpbC5xdWVyeVNlbGVjdG9yKFwiLnByaWNlIHNwYW5cIik7XG4gICAgICAgICAgICAvLyBpZiAocHJpY2VTcGFuKSB7XG4gICAgICAgICAgICAvLyBjb25zdCByYXdQcmljZSA9IHBhY2thZ2VzW2tleV0ucHJpY2UucmVwbGFjZSgvW15cXGQuXS9nLCAnJyk7XG4gICAgICAgICAgICAvLyBwcmljZVNwYW4udGV4dENvbnRlbnQgPSBmb3JtYXRFR1AocGFyc2VGbG9hdChyYXdQcmljZSkpO1xuICAgICAgICAgICAgLy8gfVxuXG4gICAgICAgICAgICAvLyBTY3JvbGwgdG8gcHJpY2luZyBjYXJkXG4gICAgICAgICAgICBpZiAocHJpY2luZ0NhcmQpIHtcbiAgICAgICAgICAgICAgICBwcmljaW5nQ2FyZC5zY3JvbGxJbnRvVmlldyh7IGJlaGF2aW9yOiBcInNtb290aFwiLCBibG9jazogXCJzdGFydFwiIH0pO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9KTtcbn0pO1xuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbImluaXRTbW9vdGhTY3JvbGxpbmciLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwiYW5jaG9yIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJwcmV2ZW50RGVmYXVsdCIsInRhcmdldElkIiwiZ2V0QXR0cmlidXRlIiwidGFyZ2V0RWxlbWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJzY3JvbGxJbnRvVmlldyIsImJlaGF2aW9yIiwiYmxvY2siLCJmb3JtYXRFR1AiLCJwcmljZSIsIkludGwiLCJOdW1iZXJGb3JtYXQiLCJzdHlsZSIsImN1cnJlbmN5IiwibWluaW11bUZyYWN0aW9uRGlnaXRzIiwiZm9ybWF0IiwidGFicyIsImRldGFpbHMiLCJwcmljaW5nQ2FyZCIsImdldEVsZW1lbnRCeUlkIiwidGFiIiwia2V5IiwiZGF0YXNldCIsInBhY2thZ2UiLCJ0IiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiYWRkIiwiZCIsImRpc3BsYXkiLCJhY3RpdmVEZXRhaWwiXSwic291cmNlUm9vdCI6IiJ9