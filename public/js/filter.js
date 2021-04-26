/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/filter.js":
/*!********************************!*\
  !*** ./resources/js/filter.js ***!
  \********************************/
/***/ (() => {

eval("jQuery(document).ready(function ($) {\n  function addToQueryString(param, value) {\n    if ('URLSearchParams' in window) {\n      var searchParams = new URLSearchParams(window.location.search);\n      searchParams.set(param, value);\n      window.location.search = searchParams.toString();\n    }\n  }\n\n  $('.category_checkbox').on('click', function () {\n    var value = $(this).attr('value');\n\n    if ($(this).is(':checked') == false) {\n      value = \"\";\n    }\n\n    addToQueryString($(this).attr('name'), value);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZmlsdGVyLmpzPzc5N2YiXSwibmFtZXMiOlsialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSIsIiQiLCJhZGRUb1F1ZXJ5U3RyaW5nIiwicGFyYW0iLCJ2YWx1ZSIsIndpbmRvdyIsInNlYXJjaFBhcmFtcyIsIlVSTFNlYXJjaFBhcmFtcyIsImxvY2F0aW9uIiwic2VhcmNoIiwic2V0IiwidG9TdHJpbmciLCJvbiIsImF0dHIiLCJpcyJdLCJtYXBwaW5ncyI6IkFBQUFBLE1BQU0sQ0FBQ0MsUUFBRCxDQUFOLENBQWlCQyxLQUFqQixDQUF1QixVQUFTQyxDQUFULEVBQVk7QUFDakMsV0FBU0MsZ0JBQVQsQ0FBMEJDLEtBQTFCLEVBQWlDQyxLQUFqQyxFQUF3QztBQUNwQyxRQUFJLHFCQUFxQkMsTUFBekIsRUFBaUM7QUFDN0IsVUFBSUMsWUFBWSxHQUFHLElBQUlDLGVBQUosQ0FBb0JGLE1BQU0sQ0FBQ0csUUFBUCxDQUFnQkMsTUFBcEMsQ0FBbkI7QUFFQUgsTUFBQUEsWUFBWSxDQUFDSSxHQUFiLENBQWlCUCxLQUFqQixFQUF3QkMsS0FBeEI7QUFFQUMsTUFBQUEsTUFBTSxDQUFDRyxRQUFQLENBQWdCQyxNQUFoQixHQUF5QkgsWUFBWSxDQUFDSyxRQUFiLEVBQXpCO0FBQ0g7QUFDSjs7QUFDRFYsRUFBQUEsQ0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JXLEVBQXhCLENBQTJCLE9BQTNCLEVBQW9DLFlBQVk7QUFDNUMsUUFBSVIsS0FBSyxHQUFHSCxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFZLElBQVIsQ0FBYSxPQUFiLENBQVo7O0FBQ0EsUUFBSVosQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRYSxFQUFSLENBQVcsVUFBWCxLQUEwQixLQUE5QixFQUFxQztBQUNqQ1YsTUFBQUEsS0FBSyxHQUFHLEVBQVI7QUFDSDs7QUFDREYsSUFBQUEsZ0JBQWdCLENBQUNELENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVksSUFBUixDQUFhLE1BQWIsQ0FBRCxFQUF1QlQsS0FBdkIsQ0FBaEI7QUFFSCxHQVBEO0FBUUQsQ0FsQkQiLCJzb3VyY2VzQ29udGVudCI6WyJqUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCQpIHtcclxuICBmdW5jdGlvbiBhZGRUb1F1ZXJ5U3RyaW5nKHBhcmFtLCB2YWx1ZSkge1xyXG4gICAgICBpZiAoJ1VSTFNlYXJjaFBhcmFtcycgaW4gd2luZG93KSB7XHJcbiAgICAgICAgICB2YXIgc2VhcmNoUGFyYW1zID0gbmV3IFVSTFNlYXJjaFBhcmFtcyh3aW5kb3cubG9jYXRpb24uc2VhcmNoKTtcclxuICAgICAgICAgIFxyXG4gICAgICAgICAgc2VhcmNoUGFyYW1zLnNldChwYXJhbSwgdmFsdWUpO1xyXG4gICAgICAgXHJcbiAgICAgICAgICB3aW5kb3cubG9jYXRpb24uc2VhcmNoID0gc2VhcmNoUGFyYW1zLnRvU3RyaW5nKCk7XHJcbiAgICAgIH1cclxuICB9XHJcbiAgJCgnLmNhdGVnb3J5X2NoZWNrYm94Jykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICBsZXQgdmFsdWUgPSAkKHRoaXMpLmF0dHIoJ3ZhbHVlJyk7XHJcbiAgICAgIGlmICgkKHRoaXMpLmlzKCc6Y2hlY2tlZCcpID09IGZhbHNlKSB7XHJcbiAgICAgICAgICB2YWx1ZSA9IFwiXCI7XHJcbiAgICAgIH1cclxuICAgICAgYWRkVG9RdWVyeVN0cmluZygkKHRoaXMpLmF0dHIoJ25hbWUnKSwgdmFsdWUpO1xyXG5cclxuICB9KVxyXG59KTsiXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2ZpbHRlci5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/filter.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/filter.js"]();
/******/ 	
/******/ })()
;