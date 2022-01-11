/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/scrollHandle.js ***!
  \**************************************/
var app = new Vue({
  el: "#app",
  data: {
    buttonActive: false,
    scroll: 0
  },
  mounted: function mounted() {
    window.addEventListener("scroll", this.scrollWindow);
  },
  methods: {
    scrollTop: function scrollTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    },
    scrollWindow: function scrollWindow() {
      var showPoint = 500;
      this.scroll = window.scrollY;

      if (showPoint <= this.scroll) {
        this.buttonActive = true;
      } else {
        this.buttonActive = false;
      }
    } // toggleBtn: function() {
    //     this.show = !this.show
    // }

  }
});
/******/ })()
;