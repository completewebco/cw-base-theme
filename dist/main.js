/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./assets/css/app.css?");

/***/ }),

/***/ "./assets/js/main.js":
/*!***************************!*\
  !*** ./assets/js/main.js ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/app.css */ \"./assets/css/app.css\");\n/* harmony import */ var _css_app_css__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_app_css__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _modules_menu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/menu */ \"./assets/js/modules/menu.js\");\n// Build CSS\n // Import JS Modules\n\n // Load Menu Script\n\ndocument.addEventListener('DOMContentLoaded', _modules_menu__WEBPACK_IMPORTED_MODULE_1__[\"default\"]); //Mobile Nav\n\nvar button = document.getElementById('js-mobile');\nvar body = document.getElementsByTagName('body')[0];\nbutton.addEventListener('click', function (e) {\n  if (body.classList.contains('active')) {\n    body.classList.remove('active');\n  } else {\n    body.classList.add('active');\n  }\n}); //Mobile Submenus 2\n\nfunction mobileBtns() {\n  var mobileBtn = document.querySelectorAll(\".js-mobile\");\n  var body = document.getElementsByTagName('body')[0];\n  var mobilebtnText = document.getElementById('js-mobile-btn-text');\n  var i;\n\n  for (i = 0; i < mobileBtn.length; i++) {\n    mobileBtn[i].addEventListener(\"click\", function (ev) {\n      if (body.classList.contains('active')) {\n        body.classList.remove('active');\n        mobilebtnText.innerHTML = \"Menu\";\n      } else {\n        body.classList.add('active');\n        mobilebtnText.innerHTML = \"Close\";\n      }\n    });\n  }\n}\n\nmobileBtns(); // Back to Top\n\nfunction toTop() {\n  var topButton = document.getElementById(\"js-back-to-top\");\n  var bscrollPosY = window.pageYOffset | document.body.scrollTop;\n\n  if (bscrollPosY > 500) {\n    topButton.classList.add('opacity-100');\n  } else if (bscrollPosY <= 500) {\n    topButton.classList.remove('opacity-100');\n  }\n}\n\nwindow.onscroll = function () {\n  toTop();\n}; //Mobile Submenus\n\n\nfunction mobileMenu() {\n  var mobileSub = document.querySelectorAll(\".menu-item-has-children > a\");\n  var i;\n\n  for (i = 0; i < mobileSub.length; i++) {\n    mobileSub[i].addEventListener(\"click\", function (ev) {\n      ev.preventDefault();\n      this.classList.toggle(\"active\");\n      var panel = this.nextElementSibling;\n\n      if (panel.style.maxHeight) {\n        panel.style.maxHeight = null;\n      } else {\n        panel.style.maxHeight = panel.scrollHeight + \"px\";\n      }\n    });\n  }\n}\n\nwindow.onload = function () {\n  var w = document.documentElement.clientWidth || document.body.clientWidth || window.innerWidth;\n  var targetWidth = 1024;\n\n  if (w < targetWidth) {\n    mobileMenu();\n  }\n};\n\n//# sourceURL=webpack:///./assets/js/main.js?");

/***/ }),

/***/ "./assets/js/modules/menu.js":
/*!***********************************!*\
  !*** ./assets/js/modules/menu.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony default export */ __webpack_exports__[\"default\"] = (function () {\n  var toggles = document.querySelectorAll('.toggle');\n  var menu = document.querySelector('.nav-mobile');\n\n  if (!toggles || !menu) {\n    return;\n  }\n\n  var active = false;\n  toggles.forEach(function (toggle) {\n    toggle.addEventListener('click', function () {\n      if (active) {\n        open();\n      } else {\n        close();\n      }\n    });\n  });\n\n  function open() {\n    menu.classList.remove('active');\n    active = false;\n  }\n\n  function close() {\n    menu.classList.add('active');\n    active = true;\n  }\n});\n\n//# sourceURL=webpack:///./assets/js/modules/menu.js?");

/***/ })

/******/ });