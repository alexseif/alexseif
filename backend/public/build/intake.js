"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["intake"],{

/***/ "./assets/intake.js":
/*!**************************!*\
  !*** ./assets/intake.js ***!
  \**************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_esnext_iterator_some_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/esnext.iterator.some.js */ "./node_modules/core-js/modules/esnext.iterator.some.js");
/* harmony import */ var core_js_modules_esnext_iterator_some_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_some_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _scss_intake_scss__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scss/intake.scss */ "./assets/scss/intake.scss");



/*
 * Intake Form JavaScript
 * Handles multi-step form navigation, progress animation, and interactions
 */


document.addEventListener('DOMContentLoaded', () => {
  const intakeForm = document.getElementById('intake-form');
  if (!intakeForm) return; // Exit if not on intake page

  const progressFill = document.getElementById('progress-fill');
  const totalSteps = 5; // Steps 1-5
  let currentStep = 1;

  // Form data storage (UI only, no submission)
  const formData = {};

  // Initialize
  updateProgress();
  showStep(currentStep);

  // Event listeners for navigation buttons
  document.addEventListener('click', e => {
    if (e.target.classList.contains('btn-next')) {
      const nextStep = parseInt(e.target.dataset.next);
      if (validateStep(currentStep)) {
        collectFormData(currentStep);
        goToStep(nextStep);
      }
    } else if (e.target.classList.contains('btn-prev')) {
      const prevStep = parseInt(e.target.dataset.prev);
      goToStep(prevStep);
    } else if (e.target.classList.contains('btn-submit')) {
      if (validateStep(currentStep)) {
        collectFormData(currentStep);
        showCompletion();
      }
    }
  });
  function goToStep(step) {
    hideStep(currentStep);
    currentStep = step;
    showStep(currentStep);
    updateProgress();
  }
  function showStep(step) {
    const stepElement = document.getElementById(`step-${step}`);
    if (stepElement) {
      stepElement.classList.add('active');
    }
  }
  function hideStep(step) {
    const stepElement = document.getElementById(`step-${step}`);
    if (stepElement) {
      stepElement.classList.remove('active');
    }
  }
  function updateProgress() {
    const progress = (currentStep - 1) / totalSteps * 100;
    progressFill.style.width = `${progress}%`;
  }
  function validateStep(step) {
    const stepElement = document.getElementById(`step-${step}`);
    const requiredFields = stepElement.querySelectorAll('input[required], select[required]');
    const radioGroups = stepElement.querySelectorAll('input[type="radio"][required]');
    let isValid = true;

    // Validate regular required fields
    requiredFields.forEach(field => {
      if (!field.value.trim()) {
        field.style.borderColor = '#ef4444'; // Red border for invalid
        isValid = false;
      } else {
        field.style.borderColor = '#d1d5db'; // Reset to default
      }
    });

    // Validate radio button groups (at least one selected per group)
    const radioNames = new Set();
    radioGroups.forEach(radio => radioNames.add(radio.name));
    radioNames.forEach(name => {
      const group = stepElement.querySelectorAll(`input[name="${name}"]`);
      const checked = Array.from(group).some(radio => radio.checked);
      if (!checked) {
        group.forEach(radio => radio.style.outline = '2px solid #ef4444');
        isValid = false;
      } else {
        group.forEach(radio => radio.style.outline = 'none');
      }
    });
    return isValid;
  }
  function collectFormData(step) {
    const stepElement = document.getElementById(`step-${step}`);
    const fields = stepElement.querySelectorAll('input, select, textarea');
    fields.forEach(field => {
      if (field.name) {
        if (field.type === 'checkbox') {
          formData[field.name] = field.checked ? field.value || true : false;
        } else if (field.type === 'radio') {
          if (field.checked) {
            formData[field.name] = field.value;
          }
        } else {
          formData[field.name] = field.value;
        }
      }
    });
  }
  function showCompletion() {
    // Send form data to backend before redirect
    const submitBtn = document.querySelector('.btn-submit');
    const originalText = submitBtn.textContent;
    submitBtn.disabled = true;
    submitBtn.textContent = 'Submitting...';
    fetch('/intake/submit', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(formData)
    }).then(response => response.json()).then(data => {
      if (data.success) {
        console.log('Form submitted successfully');
      } else {
        console.log('Submission failed: ' + (data.error || 'Unknown error'));
      }
    }).catch(error => {
      console.error('Error:', error);
      console.log('Submission failed due to network error');
    }).finally(() => {
      // Always redirect to thank you page
      window.location.href = '/intake/thank-you';
    });
  }

  // Reset field borders and outlines on input/change
  document.addEventListener('input', e => {
    if (e.target.matches('input, select, textarea')) {
      e.target.style.borderColor = '#d1d5db';
    }
  });
  document.addEventListener('change', e => {
    if (e.target.matches('input[type="radio"]')) {
      // Reset outline for all radios in the same group
      const group = document.querySelectorAll(`input[name="${e.target.name}"]`);
      group.forEach(radio => radio.style.outline = 'none');
    }
  });

  // Keyboard navigation (Enter to next step)
  document.addEventListener('keydown', e => {
    if (e.key === 'Enter' && currentStep < totalSteps) {
      const nextBtn = document.querySelector('.step.active .btn-next');
      if (nextBtn) {
        nextBtn.click();
      }
    }
  });
});

/***/ }),

/***/ "./assets/scss/intake.scss":
/*!*********************************!*\
  !*** ./assets/scss/intake.scss ***!
  \*********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/core-js/modules/es.iterator.some.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/modules/es.iterator.some.js ***!
  \**********************************************************/
/***/ (function(__unused_webpack_module, __unused_webpack_exports, __webpack_require__) {


var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var iterate = __webpack_require__(/*! ../internals/iterate */ "./node_modules/core-js/internals/iterate.js");
var aCallable = __webpack_require__(/*! ../internals/a-callable */ "./node_modules/core-js/internals/a-callable.js");
var anObject = __webpack_require__(/*! ../internals/an-object */ "./node_modules/core-js/internals/an-object.js");
var getIteratorDirect = __webpack_require__(/*! ../internals/get-iterator-direct */ "./node_modules/core-js/internals/get-iterator-direct.js");

// `Iterator.prototype.some` method
// https://tc39.es/ecma262/#sec-iterator.prototype.some
$({ target: 'Iterator', proto: true, real: true }, {
  some: function some(predicate) {
    anObject(this);
    aCallable(predicate);
    var record = getIteratorDirect(this);
    var counter = 0;
    return iterate(record, function (value, stop) {
      if (predicate(value, counter++)) return stop();
    }, { IS_RECORD: true, INTERRUPTED: true }).stopped;
  }
});


/***/ }),

/***/ "./node_modules/core-js/modules/esnext.iterator.some.js":
/*!**************************************************************!*\
  !*** ./node_modules/core-js/modules/esnext.iterator.some.js ***!
  \**************************************************************/
/***/ (function(__unused_webpack_module, __unused_webpack_exports, __webpack_require__) {


// TODO: Remove from `core-js@4`
__webpack_require__(/*! ../modules/es.iterator.some */ "./node_modules/core-js/modules/es.iterator.some.js");


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_esnext_iterator_constructor_js-node_modules_core-js_modu-374f7e"], function() { return __webpack_exec__("./assets/intake.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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NkNBQTZDO0FBQ2pEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsS0FBSyxJQUFJLG9DQUFvQztBQUM3QztBQUNBLENBQUM7Ozs7Ozs7Ozs7O0FDbkJZO0FBQ2I7QUFDQSxtQkFBTyxDQUFDLHVGQUE2QiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9pbnRha2UuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3Njc3MvaW50YWtlLnNjc3M/YmIzZiIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLml0ZXJhdG9yLnNvbWUuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lc25leHQuaXRlcmF0b3Iuc29tZS5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxuICogSW50YWtlIEZvcm0gSmF2YVNjcmlwdFxuICogSGFuZGxlcyBtdWx0aS1zdGVwIGZvcm0gbmF2aWdhdGlvbiwgcHJvZ3Jlc3MgYW5pbWF0aW9uLCBhbmQgaW50ZXJhY3Rpb25zXG4gKi9cblxuaW1wb3J0ICcuL3Njc3MvaW50YWtlLnNjc3MnO1xuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgKCkgPT4ge1xuICAgIGNvbnN0IGludGFrZUZvcm0gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnaW50YWtlLWZvcm0nKTtcbiAgICBpZiAoIWludGFrZUZvcm0pIHJldHVybjsgLy8gRXhpdCBpZiBub3Qgb24gaW50YWtlIHBhZ2VcblxuICAgIGNvbnN0IHByb2dyZXNzRmlsbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdwcm9ncmVzcy1maWxsJyk7XG4gICAgY29uc3QgdG90YWxTdGVwcyA9IDU7IC8vIFN0ZXBzIDEtNVxuICAgIGxldCBjdXJyZW50U3RlcCA9IDE7XG5cbiAgICAvLyBGb3JtIGRhdGEgc3RvcmFnZSAoVUkgb25seSwgbm8gc3VibWlzc2lvbilcbiAgICBjb25zdCBmb3JtRGF0YSA9IHt9O1xuXG4gICAgLy8gSW5pdGlhbGl6ZVxuICAgIHVwZGF0ZVByb2dyZXNzKCk7XG4gICAgc2hvd1N0ZXAoY3VycmVudFN0ZXApO1xuXG4gICAgLy8gRXZlbnQgbGlzdGVuZXJzIGZvciBuYXZpZ2F0aW9uIGJ1dHRvbnNcbiAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChlKSA9PiB7XG4gICAgICAgIGlmIChlLnRhcmdldC5jbGFzc0xpc3QuY29udGFpbnMoJ2J0bi1uZXh0JykpIHtcbiAgICAgICAgICAgIGNvbnN0IG5leHRTdGVwID0gcGFyc2VJbnQoZS50YXJnZXQuZGF0YXNldC5uZXh0KTtcbiAgICAgICAgICAgIGlmICh2YWxpZGF0ZVN0ZXAoY3VycmVudFN0ZXApKSB7XG4gICAgICAgICAgICAgICAgY29sbGVjdEZvcm1EYXRhKGN1cnJlbnRTdGVwKTtcbiAgICAgICAgICAgICAgICBnb1RvU3RlcChuZXh0U3RlcCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0gZWxzZSBpZiAoZS50YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKCdidG4tcHJldicpKSB7XG4gICAgICAgICAgICBjb25zdCBwcmV2U3RlcCA9IHBhcnNlSW50KGUudGFyZ2V0LmRhdGFzZXQucHJldik7XG4gICAgICAgICAgICBnb1RvU3RlcChwcmV2U3RlcCk7XG4gICAgICAgIH0gZWxzZSBpZiAoZS50YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKCdidG4tc3VibWl0JykpIHtcbiAgICAgICAgICAgIGlmICh2YWxpZGF0ZVN0ZXAoY3VycmVudFN0ZXApKSB7XG4gICAgICAgICAgICAgICAgY29sbGVjdEZvcm1EYXRhKGN1cnJlbnRTdGVwKTtcbiAgICAgICAgICAgICAgICBzaG93Q29tcGxldGlvbigpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICBmdW5jdGlvbiBnb1RvU3RlcChzdGVwKSB7XG4gICAgICAgIGhpZGVTdGVwKGN1cnJlbnRTdGVwKTtcbiAgICAgICAgY3VycmVudFN0ZXAgPSBzdGVwO1xuICAgICAgICBzaG93U3RlcChjdXJyZW50U3RlcCk7XG4gICAgICAgIHVwZGF0ZVByb2dyZXNzKCk7XG4gICAgfVxuXG4gICAgZnVuY3Rpb24gc2hvd1N0ZXAoc3RlcCkge1xuICAgICAgICBjb25zdCBzdGVwRWxlbWVudCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGBzdGVwLSR7c3RlcH1gKTtcbiAgICAgICAgaWYgKHN0ZXBFbGVtZW50KSB7XG4gICAgICAgICAgICBzdGVwRWxlbWVudC5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIGZ1bmN0aW9uIGhpZGVTdGVwKHN0ZXApIHtcbiAgICAgICAgY29uc3Qgc3RlcEVsZW1lbnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChgc3RlcC0ke3N0ZXB9YCk7XG4gICAgICAgIGlmIChzdGVwRWxlbWVudCkge1xuICAgICAgICAgICAgc3RlcEVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBmdW5jdGlvbiB1cGRhdGVQcm9ncmVzcygpIHtcbiAgICAgICAgY29uc3QgcHJvZ3Jlc3MgPSAoKGN1cnJlbnRTdGVwIC0gMSkgLyB0b3RhbFN0ZXBzKSAqIDEwMDtcbiAgICAgICAgcHJvZ3Jlc3NGaWxsLnN0eWxlLndpZHRoID0gYCR7cHJvZ3Jlc3N9JWA7XG4gICAgfVxuXG4gICAgZnVuY3Rpb24gdmFsaWRhdGVTdGVwKHN0ZXApIHtcbiAgICAgICAgY29uc3Qgc3RlcEVsZW1lbnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChgc3RlcC0ke3N0ZXB9YCk7XG4gICAgICAgIGNvbnN0IHJlcXVpcmVkRmllbGRzID0gc3RlcEVsZW1lbnQucXVlcnlTZWxlY3RvckFsbCgnaW5wdXRbcmVxdWlyZWRdLCBzZWxlY3RbcmVxdWlyZWRdJyk7XG4gICAgICAgIGNvbnN0IHJhZGlvR3JvdXBzID0gc3RlcEVsZW1lbnQucXVlcnlTZWxlY3RvckFsbCgnaW5wdXRbdHlwZT1cInJhZGlvXCJdW3JlcXVpcmVkXScpO1xuICAgICAgICBsZXQgaXNWYWxpZCA9IHRydWU7XG5cbiAgICAgICAgLy8gVmFsaWRhdGUgcmVndWxhciByZXF1aXJlZCBmaWVsZHNcbiAgICAgICAgcmVxdWlyZWRGaWVsZHMuZm9yRWFjaChmaWVsZCA9PiB7XG4gICAgICAgICAgICBpZiAoIWZpZWxkLnZhbHVlLnRyaW0oKSkge1xuICAgICAgICAgICAgICAgIGZpZWxkLnN0eWxlLmJvcmRlckNvbG9yID0gJyNlZjQ0NDQnOyAvLyBSZWQgYm9yZGVyIGZvciBpbnZhbGlkXG4gICAgICAgICAgICAgICAgaXNWYWxpZCA9IGZhbHNlO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICBmaWVsZC5zdHlsZS5ib3JkZXJDb2xvciA9ICcjZDFkNWRiJzsgLy8gUmVzZXQgdG8gZGVmYXVsdFxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcblxuICAgICAgICAvLyBWYWxpZGF0ZSByYWRpbyBidXR0b24gZ3JvdXBzIChhdCBsZWFzdCBvbmUgc2VsZWN0ZWQgcGVyIGdyb3VwKVxuICAgICAgICBjb25zdCByYWRpb05hbWVzID0gbmV3IFNldCgpO1xuICAgICAgICByYWRpb0dyb3Vwcy5mb3JFYWNoKHJhZGlvID0+IHJhZGlvTmFtZXMuYWRkKHJhZGlvLm5hbWUpKTtcblxuICAgICAgICByYWRpb05hbWVzLmZvckVhY2gobmFtZSA9PiB7XG4gICAgICAgICAgICBjb25zdCBncm91cCA9IHN0ZXBFbGVtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoYGlucHV0W25hbWU9XCIke25hbWV9XCJdYCk7XG4gICAgICAgICAgICBjb25zdCBjaGVja2VkID0gQXJyYXkuZnJvbShncm91cCkuc29tZShyYWRpbyA9PiByYWRpby5jaGVja2VkKTtcbiAgICAgICAgICAgIGlmICghY2hlY2tlZCkge1xuICAgICAgICAgICAgICAgIGdyb3VwLmZvckVhY2gocmFkaW8gPT4gcmFkaW8uc3R5bGUub3V0bGluZSA9ICcycHggc29saWQgI2VmNDQ0NCcpO1xuICAgICAgICAgICAgICAgIGlzVmFsaWQgPSBmYWxzZTtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgZ3JvdXAuZm9yRWFjaChyYWRpbyA9PiByYWRpby5zdHlsZS5vdXRsaW5lID0gJ25vbmUnKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG5cbiAgICAgICAgcmV0dXJuIGlzVmFsaWQ7XG4gICAgfVxuXG4gICAgZnVuY3Rpb24gY29sbGVjdEZvcm1EYXRhKHN0ZXApIHtcbiAgICAgICAgY29uc3Qgc3RlcEVsZW1lbnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChgc3RlcC0ke3N0ZXB9YCk7XG4gICAgICAgIGNvbnN0IGZpZWxkcyA9IHN0ZXBFbGVtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ2lucHV0LCBzZWxlY3QsIHRleHRhcmVhJyk7XG5cbiAgICAgICAgZmllbGRzLmZvckVhY2goZmllbGQgPT4ge1xuICAgICAgICAgICAgaWYgKGZpZWxkLm5hbWUpIHtcbiAgICAgICAgICAgICAgICBpZiAoZmllbGQudHlwZSA9PT0gJ2NoZWNrYm94Jykge1xuICAgICAgICAgICAgICAgICAgICBmb3JtRGF0YVtmaWVsZC5uYW1lXSA9IGZpZWxkLmNoZWNrZWQgPyBmaWVsZC52YWx1ZSB8fCB0cnVlIDogZmFsc2U7XG4gICAgICAgICAgICAgICAgfSBlbHNlIGlmIChmaWVsZC50eXBlID09PSAncmFkaW8nKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChmaWVsZC5jaGVja2VkKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBmb3JtRGF0YVtmaWVsZC5uYW1lXSA9IGZpZWxkLnZhbHVlO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgZm9ybURhdGFbZmllbGQubmFtZV0gPSBmaWVsZC52YWx1ZTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIGZ1bmN0aW9uIHNob3dDb21wbGV0aW9uKCkge1xuICAgICAgICAvLyBTZW5kIGZvcm0gZGF0YSB0byBiYWNrZW5kIGJlZm9yZSByZWRpcmVjdFxuICAgICAgICBjb25zdCBzdWJtaXRCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuYnRuLXN1Ym1pdCcpO1xuICAgICAgICBjb25zdCBvcmlnaW5hbFRleHQgPSBzdWJtaXRCdG4udGV4dENvbnRlbnQ7XG4gICAgICAgIHN1Ym1pdEJ0bi5kaXNhYmxlZCA9IHRydWU7XG4gICAgICAgIHN1Ym1pdEJ0bi50ZXh0Q29udGVudCA9ICdTdWJtaXR0aW5nLi4uJztcblxuICAgICAgICBmZXRjaCgnL2ludGFrZS9zdWJtaXQnLCB7XG4gICAgICAgICAgICBtZXRob2Q6ICdQT1NUJyxcbiAgICAgICAgICAgIGhlYWRlcnM6IHtcbiAgICAgICAgICAgICAgICAnQ29udGVudC1UeXBlJzogJ2FwcGxpY2F0aW9uL2pzb24nLFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGJvZHk6IEpTT04uc3RyaW5naWZ5KGZvcm1EYXRhKVxuICAgICAgICB9KVxuICAgICAgICAgICAgLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxuICAgICAgICAgICAgLnRoZW4oZGF0YSA9PiB7XG4gICAgICAgICAgICAgICAgaWYgKGRhdGEuc3VjY2Vzcykge1xuICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZygnRm9ybSBzdWJtaXR0ZWQgc3VjY2Vzc2Z1bGx5Jyk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coJ1N1Ym1pc3Npb24gZmFpbGVkOiAnICsgKGRhdGEuZXJyb3IgfHwgJ1Vua25vd24gZXJyb3InKSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIC5jYXRjaChlcnJvciA9PiB7XG4gICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcignRXJyb3I6JywgZXJyb3IpO1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKCdTdWJtaXNzaW9uIGZhaWxlZCBkdWUgdG8gbmV0d29yayBlcnJvcicpO1xuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIC5maW5hbGx5KCgpID0+IHtcbiAgICAgICAgICAgICAgICAvLyBBbHdheXMgcmVkaXJlY3QgdG8gdGhhbmsgeW91IHBhZ2VcbiAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvaW50YWtlL3RoYW5rLXlvdSc7XG4gICAgICAgICAgICB9KTtcbiAgICB9XG5cbiAgICAvLyBSZXNldCBmaWVsZCBib3JkZXJzIGFuZCBvdXRsaW5lcyBvbiBpbnB1dC9jaGFuZ2VcbiAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIChlKSA9PiB7XG4gICAgICAgIGlmIChlLnRhcmdldC5tYXRjaGVzKCdpbnB1dCwgc2VsZWN0LCB0ZXh0YXJlYScpKSB7XG4gICAgICAgICAgICBlLnRhcmdldC5zdHlsZS5ib3JkZXJDb2xvciA9ICcjZDFkNWRiJztcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgKGUpID0+IHtcbiAgICAgICAgaWYgKGUudGFyZ2V0Lm1hdGNoZXMoJ2lucHV0W3R5cGU9XCJyYWRpb1wiXScpKSB7XG4gICAgICAgICAgICAvLyBSZXNldCBvdXRsaW5lIGZvciBhbGwgcmFkaW9zIGluIHRoZSBzYW1lIGdyb3VwXG4gICAgICAgICAgICBjb25zdCBncm91cCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoYGlucHV0W25hbWU9XCIke2UudGFyZ2V0Lm5hbWV9XCJdYCk7XG4gICAgICAgICAgICBncm91cC5mb3JFYWNoKHJhZGlvID0+IHJhZGlvLnN0eWxlLm91dGxpbmUgPSAnbm9uZScpO1xuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICAvLyBLZXlib2FyZCBuYXZpZ2F0aW9uIChFbnRlciB0byBuZXh0IHN0ZXApXG4gICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigna2V5ZG93bicsIChlKSA9PiB7XG4gICAgICAgIGlmIChlLmtleSA9PT0gJ0VudGVyJyAmJiBjdXJyZW50U3RlcCA8IHRvdGFsU3RlcHMpIHtcbiAgICAgICAgICAgIGNvbnN0IG5leHRCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc3RlcC5hY3RpdmUgLmJ0bi1uZXh0Jyk7XG4gICAgICAgICAgICBpZiAobmV4dEJ0bikge1xuICAgICAgICAgICAgICAgIG5leHRCdG4uY2xpY2soKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH0pO1xufSk7XG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIndXNlIHN0cmljdCc7XG52YXIgJCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9leHBvcnQnKTtcbnZhciBpdGVyYXRlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2l0ZXJhdGUnKTtcbnZhciBhQ2FsbGFibGUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYS1jYWxsYWJsZScpO1xudmFyIGFuT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FuLW9iamVjdCcpO1xudmFyIGdldEl0ZXJhdG9yRGlyZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2dldC1pdGVyYXRvci1kaXJlY3QnKTtcblxuLy8gYEl0ZXJhdG9yLnByb3RvdHlwZS5zb21lYCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtaXRlcmF0b3IucHJvdG90eXBlLnNvbWVcbiQoeyB0YXJnZXQ6ICdJdGVyYXRvcicsIHByb3RvOiB0cnVlLCByZWFsOiB0cnVlIH0sIHtcbiAgc29tZTogZnVuY3Rpb24gc29tZShwcmVkaWNhdGUpIHtcbiAgICBhbk9iamVjdCh0aGlzKTtcbiAgICBhQ2FsbGFibGUocHJlZGljYXRlKTtcbiAgICB2YXIgcmVjb3JkID0gZ2V0SXRlcmF0b3JEaXJlY3QodGhpcyk7XG4gICAgdmFyIGNvdW50ZXIgPSAwO1xuICAgIHJldHVybiBpdGVyYXRlKHJlY29yZCwgZnVuY3Rpb24gKHZhbHVlLCBzdG9wKSB7XG4gICAgICBpZiAocHJlZGljYXRlKHZhbHVlLCBjb3VudGVyKyspKSByZXR1cm4gc3RvcCgpO1xuICAgIH0sIHsgSVNfUkVDT1JEOiB0cnVlLCBJTlRFUlJVUFRFRDogdHJ1ZSB9KS5zdG9wcGVkO1xuICB9XG59KTtcbiIsIid1c2Ugc3RyaWN0Jztcbi8vIFRPRE86IFJlbW92ZSBmcm9tIGBjb3JlLWpzQDRgXG5yZXF1aXJlKCcuLi9tb2R1bGVzL2VzLml0ZXJhdG9yLnNvbWUnKTtcbiJdLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJpbnRha2VGb3JtIiwiZ2V0RWxlbWVudEJ5SWQiLCJwcm9ncmVzc0ZpbGwiLCJ0b3RhbFN0ZXBzIiwiY3VycmVudFN0ZXAiLCJmb3JtRGF0YSIsInVwZGF0ZVByb2dyZXNzIiwic2hvd1N0ZXAiLCJlIiwidGFyZ2V0IiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJuZXh0U3RlcCIsInBhcnNlSW50IiwiZGF0YXNldCIsIm5leHQiLCJ2YWxpZGF0ZVN0ZXAiLCJjb2xsZWN0Rm9ybURhdGEiLCJnb1RvU3RlcCIsInByZXZTdGVwIiwicHJldiIsInNob3dDb21wbGV0aW9uIiwic3RlcCIsImhpZGVTdGVwIiwic3RlcEVsZW1lbnQiLCJhZGQiLCJyZW1vdmUiLCJwcm9ncmVzcyIsInN0eWxlIiwid2lkdGgiLCJyZXF1aXJlZEZpZWxkcyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJyYWRpb0dyb3VwcyIsImlzVmFsaWQiLCJmb3JFYWNoIiwiZmllbGQiLCJ2YWx1ZSIsInRyaW0iLCJib3JkZXJDb2xvciIsInJhZGlvTmFtZXMiLCJTZXQiLCJyYWRpbyIsIm5hbWUiLCJncm91cCIsImNoZWNrZWQiLCJBcnJheSIsImZyb20iLCJzb21lIiwib3V0bGluZSIsImZpZWxkcyIsInR5cGUiLCJzdWJtaXRCdG4iLCJxdWVyeVNlbGVjdG9yIiwib3JpZ2luYWxUZXh0IiwidGV4dENvbnRlbnQiLCJkaXNhYmxlZCIsImZldGNoIiwibWV0aG9kIiwiaGVhZGVycyIsImJvZHkiLCJKU09OIiwic3RyaW5naWZ5IiwidGhlbiIsInJlc3BvbnNlIiwianNvbiIsImRhdGEiLCJzdWNjZXNzIiwiY29uc29sZSIsImxvZyIsImVycm9yIiwiY2F0Y2giLCJmaW5hbGx5Iiwid2luZG93IiwibG9jYXRpb24iLCJocmVmIiwibWF0Y2hlcyIsImtleSIsIm5leHRCdG4iLCJjbGljayJdLCJzb3VyY2VSb290IjoiIn0=