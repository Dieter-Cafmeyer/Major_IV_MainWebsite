/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	eval("__webpack_require__(1);\nmodule.exports = __webpack_require__(2);\n\n\n/*****************\n ** WEBPACK FOOTER\n ** multi main\n ** module id = 0\n ** module chunks = 0\n **/\n//# sourceURL=webpack:///multi_main?");

/***/ },
/* 1 */
/***/ function(module, exports) {

	eval("\"use strict\";\n\n(function () {\n  var button1 = document.querySelector('.button1');\n  var button2 = document.querySelector('.button2');\n  var button3 = document.querySelector('.button3');\n  var subscription = document.querySelector('.subscription');\n\n  var init = function init() {\n    button1.addEventListener(\"click\", firstAbbo);\n    button2.addEventListener(\"click\", secondAbbo);\n    button3.addEventListener(\"click\", thirdAbbo);\n  };\n\n  var firstAbbo = function firstAbbo(e) {\n    e.preventDefault();\n    subscription.value = '50';\n    window.scrollTo(0, 100000);\n    return false;\n  };\n\n  var secondAbbo = function secondAbbo(e) {\n    e.preventDefault();\n    subscription.value = '200';\n    window.scrollTo(0, 100000);\n    return false;\n  };\n\n  var thirdAbbo = function thirdAbbo(e) {\n    e.preventDefault();\n    subscription.value = '500';\n    window.scrollTo(0, 100000);\n    return false;\n  };\n\n  init();\n})();\n\n/*****************\n ** WEBPACK FOOTER\n ** ./_js/script.js\n ** module id = 1\n ** module chunks = 0\n **/\n//# sourceURL=webpack:///./_js/script.js?");

/***/ },
/* 2 */
/***/ function(module, exports) {

	eval("// removed by extract-text-webpack-plugin\n\n/*****************\n ** WEBPACK FOOTER\n ** ./_scss/style.scss\n ** module id = 2\n ** module chunks = 0\n **/\n//# sourceURL=webpack:///./_scss/style.scss?");

/***/ }
/******/ ]);