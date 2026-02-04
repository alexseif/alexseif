"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["graph"],{

/***/ "./assets/graph.js":
/*!*************************!*\
  !*** ./assets/graph.js ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_graph_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scss/graph.scss */ "./assets/scss/graph.scss");
/* harmony import */ var chart_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! chart.js */ "./node_modules/chart.js/dist/chart.esm.js");


chart_js__WEBPACK_IMPORTED_MODULE_1__.Chart.register(...chart_js__WEBPACK_IMPORTED_MODULE_1__.registerables);
const ctx = document.getElementById('performanceTrustChart').getContext('2d');
const chart = new chart_js__WEBPACK_IMPORTED_MODULE_1__.Chart(ctx, {
  type: 'scatter',
  data: {
    datasets: [{
      label: 'High Performance / High Trust',
      data: [{
        x: 3,
        y: 3
      }],
      backgroundColor: 'var(--color-accent)'
    }, {
      label: 'High Performance / Medium Trust',
      data: [{
        x: 2,
        y: 3
      }],
      backgroundColor: 'var(--color-muted)'
    }, {
      label: 'High Performance / Low Trust',
      data: [{
        x: 1,
        y: 3
      }],
      backgroundColor: 'red'
    }
    // … add the other 6 squares here
    ]
  },
  options: {
    plugins: {
      legend: {
        labels: {
          color: 'var(--color-text)' // legend text color
        }
      },
      tooltip: {
        backgroundColor: 'var(--color-surface)',
        titleColor: 'var(--color-text)',
        bodyColor: 'var(--color-text)'
      }
    },
    scales: {
      x: {
        title: {
          display: true,
          text: 'Trust (Off the battlefield)',
          color: 'var(--color-text)'
        },
        min: 0,
        max: 3,
        ticks: {
          stepSize: 1,
          color: 'var(--color-text)'
        },
        grid: {
          color: 'rgba(255,255,255,0.1)' // faint grid lines
        }
      },
      y: {
        title: {
          display: true,
          text: 'Performance (On the battlefield)',
          color: 'var(--color-text)'
        },
        min: 0,
        max: 3,
        ticks: {
          stepSize: 1,
          color: 'var(--color-text)'
        },
        grid: {
          color: 'rgba(255,255,255,0.1)'
        }
      }
    }
  }
});

/***/ }),

/***/ "./assets/scss/graph.scss":
/*!********************************!*\
  !*** ./assets/scss/graph.scss ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["vendors-node_modules_chart_js_dist_chart_esm_js"], function() { return __webpack_exec__("./assets/graph.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiZ3JhcGguanMiLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7O0FBQTJCO0FBSVQ7QUFFbEJBLDJDQUFLLENBQUNFLFFBQVEsQ0FBQyxHQUFHRCxtREFBYSxDQUFDO0FBR2hDLE1BQU1FLEdBQUcsR0FBR0MsUUFBUSxDQUFDQyxjQUFjLENBQUMsdUJBQXVCLENBQUMsQ0FBQ0MsVUFBVSxDQUFDLElBQUksQ0FBQztBQUM3RSxNQUFNQyxLQUFLLEdBQUcsSUFBSVAsMkNBQUssQ0FBQ0csR0FBRyxFQUFFO0VBQ3pCSyxJQUFJLEVBQUUsU0FBUztFQUNmQyxJQUFJLEVBQUU7SUFDRkMsUUFBUSxFQUFFLENBQ047TUFDSUMsS0FBSyxFQUFFLCtCQUErQjtNQUN0Q0YsSUFBSSxFQUFFLENBQUM7UUFBRUcsQ0FBQyxFQUFFLENBQUM7UUFBRUMsQ0FBQyxFQUFFO01BQUUsQ0FBQyxDQUFDO01BQ3RCQyxlQUFlLEVBQUU7SUFDckIsQ0FBQyxFQUNEO01BQ0lILEtBQUssRUFBRSxpQ0FBaUM7TUFDeENGLElBQUksRUFBRSxDQUFDO1FBQUVHLENBQUMsRUFBRSxDQUFDO1FBQUVDLENBQUMsRUFBRTtNQUFFLENBQUMsQ0FBQztNQUN0QkMsZUFBZSxFQUFFO0lBQ3JCLENBQUMsRUFDRDtNQUNJSCxLQUFLLEVBQUUsOEJBQThCO01BQ3JDRixJQUFJLEVBQUUsQ0FBQztRQUFFRyxDQUFDLEVBQUUsQ0FBQztRQUFFQyxDQUFDLEVBQUU7TUFBRSxDQUFDLENBQUM7TUFDdEJDLGVBQWUsRUFBRTtJQUNyQjtJQUNBO0lBQUE7RUFFUixDQUFDO0VBQ0RDLE9BQU8sRUFBRTtJQUNMQyxPQUFPLEVBQUU7TUFDTEMsTUFBTSxFQUFFO1FBQ0pDLE1BQU0sRUFBRTtVQUNKQyxLQUFLLEVBQUUsbUJBQW1CLENBQUM7UUFDL0I7TUFDSixDQUFDO01BQ0RDLE9BQU8sRUFBRTtRQUNMTixlQUFlLEVBQUUsc0JBQXNCO1FBQ3ZDTyxVQUFVLEVBQUUsbUJBQW1CO1FBQy9CQyxTQUFTLEVBQUU7TUFDZjtJQUNKLENBQUM7SUFDREMsTUFBTSxFQUFFO01BQ0pYLENBQUMsRUFBRTtRQUNDWSxLQUFLLEVBQUU7VUFDSEMsT0FBTyxFQUFFLElBQUk7VUFDYkMsSUFBSSxFQUFFLDZCQUE2QjtVQUNuQ1AsS0FBSyxFQUFFO1FBQ1gsQ0FBQztRQUNEUSxHQUFHLEVBQUUsQ0FBQztRQUNOQyxHQUFHLEVBQUUsQ0FBQztRQUNOQyxLQUFLLEVBQUU7VUFDSEMsUUFBUSxFQUFFLENBQUM7VUFDWFgsS0FBSyxFQUFFO1FBQ1gsQ0FBQztRQUNEWSxJQUFJLEVBQUU7VUFDRlosS0FBSyxFQUFFLHVCQUF1QixDQUFDO1FBQ25DO01BQ0osQ0FBQztNQUNETixDQUFDLEVBQUU7UUFDQ1csS0FBSyxFQUFFO1VBQ0hDLE9BQU8sRUFBRSxJQUFJO1VBQ2JDLElBQUksRUFBRSxrQ0FBa0M7VUFDeENQLEtBQUssRUFBRTtRQUNYLENBQUM7UUFDRFEsR0FBRyxFQUFFLENBQUM7UUFDTkMsR0FBRyxFQUFFLENBQUM7UUFDTkMsS0FBSyxFQUFFO1VBQ0hDLFFBQVEsRUFBRSxDQUFDO1VBQ1hYLEtBQUssRUFBRTtRQUNYLENBQUM7UUFDRFksSUFBSSxFQUFFO1VBQ0ZaLEtBQUssRUFBRTtRQUNYO01BQ0o7SUFDSjtFQUNKO0FBQ0osQ0FBQyxDQUFDOzs7Ozs7Ozs7OztBQ2hGRiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9ncmFwaC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc2Nzcy9ncmFwaC5zY3NzP2EwNDEiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3Njc3MvZ3JhcGguc2Nzcyc7XG5pbXBvcnQge1xuICAgIENoYXJ0LFxuICAgIHJlZ2lzdGVyYWJsZXNcbn0gZnJvbSAnY2hhcnQuanMnO1xuXG5DaGFydC5yZWdpc3RlciguLi5yZWdpc3RlcmFibGVzKTtcblxuXG5jb25zdCBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncGVyZm9ybWFuY2VUcnVzdENoYXJ0JykuZ2V0Q29udGV4dCgnMmQnKTtcbmNvbnN0IGNoYXJ0ID0gbmV3IENoYXJ0KGN0eCwge1xuICAgIHR5cGU6ICdzY2F0dGVyJyxcbiAgICBkYXRhOiB7XG4gICAgICAgIGRhdGFzZXRzOiBbXG4gICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgbGFiZWw6ICdIaWdoIFBlcmZvcm1hbmNlIC8gSGlnaCBUcnVzdCcsXG4gICAgICAgICAgICAgICAgZGF0YTogW3sgeDogMywgeTogMyB9XSxcbiAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6ICd2YXIoLS1jb2xvci1hY2NlbnQpJ1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICBsYWJlbDogJ0hpZ2ggUGVyZm9ybWFuY2UgLyBNZWRpdW0gVHJ1c3QnLFxuICAgICAgICAgICAgICAgIGRhdGE6IFt7IHg6IDIsIHk6IDMgfV0sXG4gICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiAndmFyKC0tY29sb3ItbXV0ZWQpJ1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICBsYWJlbDogJ0hpZ2ggUGVyZm9ybWFuY2UgLyBMb3cgVHJ1c3QnLFxuICAgICAgICAgICAgICAgIGRhdGE6IFt7IHg6IDEsIHk6IDMgfV0sXG4gICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiAncmVkJ1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIC8vIOKApiBhZGQgdGhlIG90aGVyIDYgc3F1YXJlcyBoZXJlXG4gICAgICAgIF1cbiAgICB9LFxuICAgIG9wdGlvbnM6IHtcbiAgICAgICAgcGx1Z2luczoge1xuICAgICAgICAgICAgbGVnZW5kOiB7XG4gICAgICAgICAgICAgICAgbGFiZWxzOiB7XG4gICAgICAgICAgICAgICAgICAgIGNvbG9yOiAndmFyKC0tY29sb3ItdGV4dCknIC8vIGxlZ2VuZCB0ZXh0IGNvbG9yXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHRvb2x0aXA6IHtcbiAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6ICd2YXIoLS1jb2xvci1zdXJmYWNlKScsXG4gICAgICAgICAgICAgICAgdGl0bGVDb2xvcjogJ3ZhcigtLWNvbG9yLXRleHQpJyxcbiAgICAgICAgICAgICAgICBib2R5Q29sb3I6ICd2YXIoLS1jb2xvci10ZXh0KSdcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSxcbiAgICAgICAgc2NhbGVzOiB7XG4gICAgICAgICAgICB4OiB7XG4gICAgICAgICAgICAgICAgdGl0bGU6IHtcbiAgICAgICAgICAgICAgICAgICAgZGlzcGxheTogdHJ1ZSxcbiAgICAgICAgICAgICAgICAgICAgdGV4dDogJ1RydXN0IChPZmYgdGhlIGJhdHRsZWZpZWxkKScsXG4gICAgICAgICAgICAgICAgICAgIGNvbG9yOiAndmFyKC0tY29sb3ItdGV4dCknXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBtaW46IDAsXG4gICAgICAgICAgICAgICAgbWF4OiAzLFxuICAgICAgICAgICAgICAgIHRpY2tzOiB7XG4gICAgICAgICAgICAgICAgICAgIHN0ZXBTaXplOiAxLFxuICAgICAgICAgICAgICAgICAgICBjb2xvcjogJ3ZhcigtLWNvbG9yLXRleHQpJ1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgZ3JpZDoge1xuICAgICAgICAgICAgICAgICAgICBjb2xvcjogJ3JnYmEoMjU1LDI1NSwyNTUsMC4xKScgLy8gZmFpbnQgZ3JpZCBsaW5lc1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB5OiB7XG4gICAgICAgICAgICAgICAgdGl0bGU6IHtcbiAgICAgICAgICAgICAgICAgICAgZGlzcGxheTogdHJ1ZSxcbiAgICAgICAgICAgICAgICAgICAgdGV4dDogJ1BlcmZvcm1hbmNlIChPbiB0aGUgYmF0dGxlZmllbGQpJyxcbiAgICAgICAgICAgICAgICAgICAgY29sb3I6ICd2YXIoLS1jb2xvci10ZXh0KSdcbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIG1pbjogMCxcbiAgICAgICAgICAgICAgICBtYXg6IDMsXG4gICAgICAgICAgICAgICAgdGlja3M6IHtcbiAgICAgICAgICAgICAgICAgICAgc3RlcFNpemU6IDEsXG4gICAgICAgICAgICAgICAgICAgIGNvbG9yOiAndmFyKC0tY29sb3ItdGV4dCknXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBncmlkOiB7XG4gICAgICAgICAgICAgICAgICAgIGNvbG9yOiAncmdiYSgyNTUsMjU1LDI1NSwwLjEpJ1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH1cbn0pO1xuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIkNoYXJ0IiwicmVnaXN0ZXJhYmxlcyIsInJlZ2lzdGVyIiwiY3R4IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImdldENvbnRleHQiLCJjaGFydCIsInR5cGUiLCJkYXRhIiwiZGF0YXNldHMiLCJsYWJlbCIsIngiLCJ5IiwiYmFja2dyb3VuZENvbG9yIiwib3B0aW9ucyIsInBsdWdpbnMiLCJsZWdlbmQiLCJsYWJlbHMiLCJjb2xvciIsInRvb2x0aXAiLCJ0aXRsZUNvbG9yIiwiYm9keUNvbG9yIiwic2NhbGVzIiwidGl0bGUiLCJkaXNwbGF5IiwidGV4dCIsIm1pbiIsIm1heCIsInRpY2tzIiwic3RlcFNpemUiLCJncmlkIl0sInNvdXJjZVJvb3QiOiIifQ==