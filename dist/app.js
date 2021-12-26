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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_change_tab_name__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/change-tab-name */ \"./src/js/components/change-tab-name.js\");\n/* harmony import */ var _components_accordion__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/accordion */ \"./src/js/components/accordion.js\");\n/* harmony import */ var _components_add_span__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/add-span */ \"./src/js/components/add-span.js\");\n/* harmony import */ var _components_button_floating_action__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/button_floating_action */ \"./src/js/components/button_floating_action.js\");\n\n\n\n\n\nObject(_components_change_tab_name__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\nObject(_components_accordion__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\nObject(_components_add_span__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\nObject(_components_button_floating_action__WEBPACK_IMPORTED_MODULE_3__[\"default\"])();\n\n//# sourceURL=webpack:///./src/js/app.js?");

/***/ }),

/***/ "./src/js/components/accordion.js":
/*!****************************************!*\
  !*** ./src/js/components/accordion.js ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nconst accordionToggle = () => {\nif (document.readyState !== \"loading\") {\n    ToggleAccordion();\n    } else {\n    document.addEventListener(\"DOMContentLoaded\", function () {\n        ToggleAccordion();\n    });\n    }\n    \n    \n    function ToggleAccordion() {\n    var element = document.querySelectorAll(\".accordion\");\n    \n    if (element){\n        element.forEach(function (el) {\n            let accordionTab = el.querySelector(\".accordion_tab\");\n            accordionTab.addEventListener(\"click\", function (event) {\n                event.preventDefault;\n                el.classList.toggle(\"accordion-active\");\n            })\n        })\n    }\n}\n}\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (accordionToggle);\n\n//# sourceURL=webpack:///./src/js/components/accordion.js?");

/***/ }),

/***/ "./src/js/components/add-span.js":
/*!***************************************!*\
  !*** ./src/js/components/add-span.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// Ce script sert à ajouter une span à l'intérieur des balises qui ont\n// la class \"js_add-span\". Cela à appliquer le soulignement des textes\n// au hover de ceux-ci\n\nconst addSpan = () => {\n\ndocument.addEventListener('DOMContentLoaded', function () {\n\n    Array.from(document.getElementsByClassName(\"js_add-span\")).forEach(item => {\n        const html = item.innerHTML;\n        item.innerHTML = \"<span class=span_underline>\" + html + \"</span>\";\n        \n    });\n\n    // Ci-dessous, on ajoute une div autour du select pour voir pouvoir ajouter un ::after (la flèche) + animation de la flèche\n\n    Array.from(document.getElementsByClassName(\"frm_form_field\")).forEach(item => {\n        \n        Array.from(item.getElementsByTagName(\"select\")).forEach(selectItem => {\n            \n            const wrapper = wrapper || document.createElement('div');\n            wrapper.classList.add(\"select-wrapper\");\n            selectItem.parentNode.appendChild(wrapper);\n            wrapper.appendChild(selectItem);\n\n            // wrapper.addEventListener(\"click\", () => {\n            //     if(wrapper.classList.contains(\"select-wrapper-active\")) {\n            //         wrapper.classList.remove(\"select-wrapper-active\");\n            //     } else {\n            //         wrapper.classList.add(\"select-wrapper-active\");\n            //     }\n            // })\n\n        })\n\n        \n    });\n\n\n});\n\n}\n/* harmony default export */ __webpack_exports__[\"default\"] = (addSpan);\n\n//# sourceURL=webpack:///./src/js/components/add-span.js?");

/***/ }),

/***/ "./src/js/components/button_floating_action.js":
/*!*****************************************************!*\
  !*** ./src/js/components/button_floating_action.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n\nconst buttonFloatingAction = () => {\ndocument.addEventListener('DOMContentLoaded', function () {\n    let buttonfaDefault = document.querySelectorAll(\".js-buttonfa_default\"); \n    let buttonfaSocial = document.querySelectorAll(\".js-buttonfa_social\"); \n\n    buttonfaDefault.forEach((item) => {\n    \n        item.onanimationend = () => {\n            item.classList.remove('buttonfa_default-hover'); \n        };\n        item.addEventListener(\"mouseover\", function(){\n            item.classList.add('buttonfa_default-hover');\n        });\n    \n    })    \n\n\n    buttonfaSocial.forEach((item) => {\n    \n        item.onanimationend = () => {\n            item.classList.remove('buttonfa_social-hover'); \n        };\n        item.addEventListener(\"mouseover\", function(){\n            item.classList.add('buttonfa_social-hover');\n        });\n    \n    })\n});\n\n}\n/* harmony default export */ __webpack_exports__[\"default\"] = (buttonFloatingAction);\n\n//# sourceURL=webpack:///./src/js/components/button_floating_action.js?");

/***/ }),

/***/ "./src/js/components/change-tab-name.js":
/*!**********************************************!*\
  !*** ./src/js/components/change-tab-name.js ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n\nconst changeTabName = ()  => { \n\n\n    var pageTitle = document.title;\n    var attentionMessage = 'We miss you ❤';\n    var blinkEvent = null;\n  \n    document.addEventListener('visibilitychange', function(e) {\n      var isPageActive = !document.hidden;\n  \n      if(!isPageActive){\n        blink();\n      }else {\n        document.title = pageTitle;\n        clearInterval(blinkEvent);\n      }\n    });\n  \n    function blink(){\n      blinkEvent = setInterval(function() {\n        if(document.title === attentionMessage){\n          document.title = pageTitle;\n        }else {\n          document.title = attentionMessage;\n        }\n      }, 100);\n    }\n  }\n\n  /* harmony default export */ __webpack_exports__[\"default\"] = (changeTabName);\n\n//# sourceURL=webpack:///./src/js/components/change-tab-name.js?");

/***/ })

/******/ });