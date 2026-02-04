"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["home"],{

/***/ "./assets/home.js":
/*!************************!*\
  !*** ./assets/home.js ***!
  \************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scss/main.scss */ "./assets/scss/main.scss");



document.addEventListener('DOMContentLoaded', () => {
  // 1. Fade-in on scroll
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add fade-in-visible class
        entry.target.classList.add('fade-in-visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  const fadeElements = document.querySelectorAll('.fade-in-scroll');
  fadeElements.forEach(el => observer.observe(el));

  // 2. Form Handling
  const form = document.getElementById('clinic-intake-form');
  const successMsg = document.getElementById('success-message');
  if (form) {
    form.addEventListener('submit', e => {
      e.preventDefault();

      // Basic validation or API call would go here.
      // For now, simulate success.
      const btn = form.querySelector('button[type="submit"]');
      const originalText = btn.innerHTML;
      btn.innerHTML = 'Sending...';
      btn.disabled = true;
      const formData = {
        yourName: form.name.value,
        clinicName: form.clinic.value,
        email: form.email.value,
        whatsapp: form.phone.value,
        website: form.website.value,
        message: form.message.value
      };
      fetch('/intake/submit', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
      }).then(response => response.json()).then(data => {
        if (data.success) {
          const fieldsWrapper = form.querySelector('.space-y-4');
          if (fieldsWrapper) fieldsWrapper.style.display = 'none';
          if (successMsg) successMsg.classList.remove('hidden');
          form.reset();
        } else {
          alert('Submission failed: ' + (data.error || 'Unknown error'));
          btn.innerHTML = originalText;
          btn.disabled = false;
        }
      }).catch(error => {
        console.error('Error:', error);
        alert('Submission failed due to a network error.');
        btn.innerHTML = originalText;
        btn.disabled = false;
      });
    });
  }
});

/***/ }),

/***/ "./assets/scss/main.scss":
/*!*******************************!*\
  !*** ./assets/scss/main.scss ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_esnext_iterator_constructor_js-node_modules_core-js_modu-374f7e"], function() { return __webpack_exec__("./assets/home.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiaG9tZS5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7OztBQUEwQjtBQUUxQkEsUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRSxNQUFNO0VBQ2hEO0VBQ0EsTUFBTUMsZUFBZSxHQUFHO0lBQ3BCQyxJQUFJLEVBQUUsSUFBSTtJQUNWQyxVQUFVLEVBQUUsS0FBSztJQUNqQkMsU0FBUyxFQUFFO0VBQ2YsQ0FBQztFQUVELE1BQU1DLFFBQVEsR0FBRyxJQUFJQyxvQkFBb0IsQ0FBQyxDQUFDQyxPQUFPLEVBQUVGLFFBQVEsS0FBSztJQUM3REUsT0FBTyxDQUFDQyxPQUFPLENBQUNDLEtBQUssSUFBSTtNQUNyQixJQUFJQSxLQUFLLENBQUNDLGNBQWMsRUFBRTtRQUN0QjtRQUNBRCxLQUFLLENBQUNFLE1BQU0sQ0FBQ0MsU0FBUyxDQUFDQyxHQUFHLENBQUMsaUJBQWlCLENBQUM7UUFDN0NSLFFBQVEsQ0FBQ1MsU0FBUyxDQUFDTCxLQUFLLENBQUNFLE1BQU0sQ0FBQztNQUNwQztJQUNKLENBQUMsQ0FBQztFQUNOLENBQUMsRUFBRVYsZUFBZSxDQUFDO0VBRW5CLE1BQU1jLFlBQVksR0FBR2hCLFFBQVEsQ0FBQ2lCLGdCQUFnQixDQUFDLGlCQUFpQixDQUFDO0VBQ2pFRCxZQUFZLENBQUNQLE9BQU8sQ0FBQ1MsRUFBRSxJQUFJWixRQUFRLENBQUNhLE9BQU8sQ0FBQ0QsRUFBRSxDQUFDLENBQUM7O0VBRWhEO0VBQ0EsTUFBTUUsSUFBSSxHQUFHcEIsUUFBUSxDQUFDcUIsY0FBYyxDQUFDLG9CQUFvQixDQUFDO0VBQzFELE1BQU1DLFVBQVUsR0FBR3RCLFFBQVEsQ0FBQ3FCLGNBQWMsQ0FBQyxpQkFBaUIsQ0FBQztFQUU3RCxJQUFJRCxJQUFJLEVBQUU7SUFDTkEsSUFBSSxDQUFDbkIsZ0JBQWdCLENBQUMsUUFBUSxFQUFHc0IsQ0FBQyxJQUFLO01BQ25DQSxDQUFDLENBQUNDLGNBQWMsQ0FBQyxDQUFDOztNQUVsQjtNQUNBO01BQ0EsTUFBTUMsR0FBRyxHQUFHTCxJQUFJLENBQUNNLGFBQWEsQ0FBQyx1QkFBdUIsQ0FBQztNQUN2RCxNQUFNQyxZQUFZLEdBQUdGLEdBQUcsQ0FBQ0csU0FBUztNQUVsQ0gsR0FBRyxDQUFDRyxTQUFTLEdBQUcsWUFBWTtNQUM1QkgsR0FBRyxDQUFDSSxRQUFRLEdBQUcsSUFBSTtNQUVuQixNQUFNQyxRQUFRLEdBQUc7UUFDYkMsUUFBUSxFQUFFWCxJQUFJLENBQUNZLElBQUksQ0FBQ0MsS0FBSztRQUN6QkMsVUFBVSxFQUFFZCxJQUFJLENBQUNlLE1BQU0sQ0FBQ0YsS0FBSztRQUM3QkcsS0FBSyxFQUFFaEIsSUFBSSxDQUFDZ0IsS0FBSyxDQUFDSCxLQUFLO1FBQ3ZCSSxRQUFRLEVBQUVqQixJQUFJLENBQUNrQixLQUFLLENBQUNMLEtBQUs7UUFDMUJNLE9BQU8sRUFBRW5CLElBQUksQ0FBQ21CLE9BQU8sQ0FBQ04sS0FBSztRQUMzQk8sT0FBTyxFQUFFcEIsSUFBSSxDQUFDb0IsT0FBTyxDQUFDUDtNQUMxQixDQUFDO01BRURRLEtBQUssQ0FBQyxnQkFBZ0IsRUFBRTtRQUNwQkMsTUFBTSxFQUFFLE1BQU07UUFDZEMsT0FBTyxFQUFFO1VBQ0wsY0FBYyxFQUFFO1FBQ3BCLENBQUM7UUFDREMsSUFBSSxFQUFFQyxJQUFJLENBQUNDLFNBQVMsQ0FBQ2hCLFFBQVE7TUFDakMsQ0FBQyxDQUFDLENBQ0dpQixJQUFJLENBQUNDLFFBQVEsSUFBSUEsUUFBUSxDQUFDQyxJQUFJLENBQUMsQ0FBQyxDQUFDLENBQ2pDRixJQUFJLENBQUNHLElBQUksSUFBSTtRQUNWLElBQUlBLElBQUksQ0FBQ0MsT0FBTyxFQUFFO1VBQ2QsTUFBTUMsYUFBYSxHQUFHaEMsSUFBSSxDQUFDTSxhQUFhLENBQUMsWUFBWSxDQUFDO1VBQ3RELElBQUkwQixhQUFhLEVBQUVBLGFBQWEsQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLEdBQUcsTUFBTTtVQUN2RCxJQUFJaEMsVUFBVSxFQUFFQSxVQUFVLENBQUNULFNBQVMsQ0FBQzBDLE1BQU0sQ0FBQyxRQUFRLENBQUM7VUFDckRuQyxJQUFJLENBQUNvQyxLQUFLLENBQUMsQ0FBQztRQUNoQixDQUFDLE1BQU07VUFDSEMsS0FBSyxDQUFDLHFCQUFxQixJQUFJUCxJQUFJLENBQUNRLEtBQUssSUFBSSxlQUFlLENBQUMsQ0FBQztVQUM5RGpDLEdBQUcsQ0FBQ0csU0FBUyxHQUFHRCxZQUFZO1VBQzVCRixHQUFHLENBQUNJLFFBQVEsR0FBRyxLQUFLO1FBQ3hCO01BQ0osQ0FBQyxDQUFDLENBQ0Q4QixLQUFLLENBQUNELEtBQUssSUFBSTtRQUNaRSxPQUFPLENBQUNGLEtBQUssQ0FBQyxRQUFRLEVBQUVBLEtBQUssQ0FBQztRQUM5QkQsS0FBSyxDQUFDLDJDQUEyQyxDQUFDO1FBQ2xEaEMsR0FBRyxDQUFDRyxTQUFTLEdBQUdELFlBQVk7UUFDNUJGLEdBQUcsQ0FBQ0ksUUFBUSxHQUFHLEtBQUs7TUFDeEIsQ0FBQyxDQUFDO0lBQ1YsQ0FBQyxDQUFDO0VBQ047QUFDSixDQUFDLENBQUM7Ozs7Ozs7Ozs7O0FDNUVGIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2hvbWUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3Njc3MvbWFpbi5zY3NzPzAzYmEiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3Njc3MvbWFpbi5zY3NzJztcblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsICgpID0+IHtcbiAgICAvLyAxLiBGYWRlLWluIG9uIHNjcm9sbFxuICAgIGNvbnN0IG9ic2VydmVyT3B0aW9ucyA9IHtcbiAgICAgICAgcm9vdDogbnVsbCxcbiAgICAgICAgcm9vdE1hcmdpbjogJzBweCcsXG4gICAgICAgIHRocmVzaG9sZDogMC4xXG4gICAgfTtcblxuICAgIGNvbnN0IG9ic2VydmVyID0gbmV3IEludGVyc2VjdGlvbk9ic2VydmVyKChlbnRyaWVzLCBvYnNlcnZlcikgPT4ge1xuICAgICAgICBlbnRyaWVzLmZvckVhY2goZW50cnkgPT4ge1xuICAgICAgICAgICAgaWYgKGVudHJ5LmlzSW50ZXJzZWN0aW5nKSB7XG4gICAgICAgICAgICAgICAgLy8gQWRkIGZhZGUtaW4tdmlzaWJsZSBjbGFzc1xuICAgICAgICAgICAgICAgIGVudHJ5LnRhcmdldC5jbGFzc0xpc3QuYWRkKCdmYWRlLWluLXZpc2libGUnKTtcbiAgICAgICAgICAgICAgICBvYnNlcnZlci51bm9ic2VydmUoZW50cnkudGFyZ2V0KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfSwgb2JzZXJ2ZXJPcHRpb25zKTtcblxuICAgIGNvbnN0IGZhZGVFbGVtZW50cyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5mYWRlLWluLXNjcm9sbCcpO1xuICAgIGZhZGVFbGVtZW50cy5mb3JFYWNoKGVsID0+IG9ic2VydmVyLm9ic2VydmUoZWwpKTtcblxuICAgIC8vIDIuIEZvcm0gSGFuZGxpbmdcbiAgICBjb25zdCBmb3JtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NsaW5pYy1pbnRha2UtZm9ybScpO1xuICAgIGNvbnN0IHN1Y2Nlc3NNc2cgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc3VjY2Vzcy1tZXNzYWdlJyk7XG5cbiAgICBpZiAoZm9ybSkge1xuICAgICAgICBmb3JtLmFkZEV2ZW50TGlzdGVuZXIoJ3N1Ym1pdCcsIChlKSA9PiB7XG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgICAgIC8vIEJhc2ljIHZhbGlkYXRpb24gb3IgQVBJIGNhbGwgd291bGQgZ28gaGVyZS5cbiAgICAgICAgICAgIC8vIEZvciBub3csIHNpbXVsYXRlIHN1Y2Nlc3MuXG4gICAgICAgICAgICBjb25zdCBidG4gPSBmb3JtLnF1ZXJ5U2VsZWN0b3IoJ2J1dHRvblt0eXBlPVwic3VibWl0XCJdJyk7XG4gICAgICAgICAgICBjb25zdCBvcmlnaW5hbFRleHQgPSBidG4uaW5uZXJIVE1MO1xuXG4gICAgICAgICAgICBidG4uaW5uZXJIVE1MID0gJ1NlbmRpbmcuLi4nO1xuICAgICAgICAgICAgYnRuLmRpc2FibGVkID0gdHJ1ZTtcblxuICAgICAgICAgICAgY29uc3QgZm9ybURhdGEgPSB7XG4gICAgICAgICAgICAgICAgeW91ck5hbWU6IGZvcm0ubmFtZS52YWx1ZSxcbiAgICAgICAgICAgICAgICBjbGluaWNOYW1lOiBmb3JtLmNsaW5pYy52YWx1ZSxcbiAgICAgICAgICAgICAgICBlbWFpbDogZm9ybS5lbWFpbC52YWx1ZSxcbiAgICAgICAgICAgICAgICB3aGF0c2FwcDogZm9ybS5waG9uZS52YWx1ZSxcbiAgICAgICAgICAgICAgICB3ZWJzaXRlOiBmb3JtLndlYnNpdGUudmFsdWUsXG4gICAgICAgICAgICAgICAgbWVzc2FnZTogZm9ybS5tZXNzYWdlLnZhbHVlXG4gICAgICAgICAgICB9O1xuXG4gICAgICAgICAgICBmZXRjaCgnL2ludGFrZS9zdWJtaXQnLCB7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgaGVhZGVyczoge1xuICAgICAgICAgICAgICAgICAgICAnQ29udGVudC1UeXBlJzogJ2FwcGxpY2F0aW9uL2pzb24nLFxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgYm9keTogSlNPTi5zdHJpbmdpZnkoZm9ybURhdGEpXG4gICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgIC50aGVuKHJlc3BvbnNlID0+IHJlc3BvbnNlLmpzb24oKSlcbiAgICAgICAgICAgICAgICAudGhlbihkYXRhID0+IHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGRhdGEuc3VjY2Vzcykge1xuICAgICAgICAgICAgICAgICAgICAgICAgY29uc3QgZmllbGRzV3JhcHBlciA9IGZvcm0ucXVlcnlTZWxlY3RvcignLnNwYWNlLXktNCcpO1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGZpZWxkc1dyYXBwZXIpIGZpZWxkc1dyYXBwZXIuc3R5bGUuZGlzcGxheSA9ICdub25lJztcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChzdWNjZXNzTXNnKSBzdWNjZXNzTXNnLmNsYXNzTGlzdC5yZW1vdmUoJ2hpZGRlbicpO1xuICAgICAgICAgICAgICAgICAgICAgICAgZm9ybS5yZXNldCgpO1xuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgYWxlcnQoJ1N1Ym1pc3Npb24gZmFpbGVkOiAnICsgKGRhdGEuZXJyb3IgfHwgJ1Vua25vd24gZXJyb3InKSk7XG4gICAgICAgICAgICAgICAgICAgICAgICBidG4uaW5uZXJIVE1MID0gb3JpZ2luYWxUZXh0O1xuICAgICAgICAgICAgICAgICAgICAgICAgYnRuLmRpc2FibGVkID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgIC5jYXRjaChlcnJvciA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnNvbGUuZXJyb3IoJ0Vycm9yOicsIGVycm9yKTtcbiAgICAgICAgICAgICAgICAgICAgYWxlcnQoJ1N1Ym1pc3Npb24gZmFpbGVkIGR1ZSB0byBhIG5ldHdvcmsgZXJyb3IuJyk7XG4gICAgICAgICAgICAgICAgICAgIGJ0bi5pbm5lckhUTUwgPSBvcmlnaW5hbFRleHQ7XG4gICAgICAgICAgICAgICAgICAgIGJ0bi5kaXNhYmxlZCA9IGZhbHNlO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9XG59KTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJvYnNlcnZlck9wdGlvbnMiLCJyb290Iiwicm9vdE1hcmdpbiIsInRocmVzaG9sZCIsIm9ic2VydmVyIiwiSW50ZXJzZWN0aW9uT2JzZXJ2ZXIiLCJlbnRyaWVzIiwiZm9yRWFjaCIsImVudHJ5IiwiaXNJbnRlcnNlY3RpbmciLCJ0YXJnZXQiLCJjbGFzc0xpc3QiLCJhZGQiLCJ1bm9ic2VydmUiLCJmYWRlRWxlbWVudHMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZWwiLCJvYnNlcnZlIiwiZm9ybSIsImdldEVsZW1lbnRCeUlkIiwic3VjY2Vzc01zZyIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImJ0biIsInF1ZXJ5U2VsZWN0b3IiLCJvcmlnaW5hbFRleHQiLCJpbm5lckhUTUwiLCJkaXNhYmxlZCIsImZvcm1EYXRhIiwieW91ck5hbWUiLCJuYW1lIiwidmFsdWUiLCJjbGluaWNOYW1lIiwiY2xpbmljIiwiZW1haWwiLCJ3aGF0c2FwcCIsInBob25lIiwid2Vic2l0ZSIsIm1lc3NhZ2UiLCJmZXRjaCIsIm1ldGhvZCIsImhlYWRlcnMiLCJib2R5IiwiSlNPTiIsInN0cmluZ2lmeSIsInRoZW4iLCJyZXNwb25zZSIsImpzb24iLCJkYXRhIiwic3VjY2VzcyIsImZpZWxkc1dyYXBwZXIiLCJzdHlsZSIsImRpc3BsYXkiLCJyZW1vdmUiLCJyZXNldCIsImFsZXJ0IiwiZXJyb3IiLCJjYXRjaCIsImNvbnNvbGUiXSwic291cmNlUm9vdCI6IiJ9