/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/appearance.js ***!
  \************************************/
window.addEventListener("load", function () {
  var target = document.querySelectorAll(".scr-target");
  var targetArray = Array.prototype.slice.call(target);
  var options = {
    root: null,
    rootMargin: "0px 0px",
    threshold: 0.5
  };
  var observer = new IntersectionObserver(callback, options);
  targetArray.forEach(function (tgt) {
    observer.observe(tgt);
  });

  function callback(entries) {
    entries.forEach(function (entry, i) {
      var target = entry.target;

      if (entry.isIntersecting && !target.classList.contains("is-active")) {
        var delay = i * 100;
        setTimeout(function () {
          target.classList.add("is-active");
        }, delay);
      }
    });
  }
});
/******/ })()
;