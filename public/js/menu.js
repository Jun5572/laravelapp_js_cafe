/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/
var modal_wrapper = document.querySelector(".modal-wrapper");
var menus = document.querySelectorAll(".menu-item");
var images = document.querySelectorAll(".menu-img");
var modal_image = document.querySelector(".modal-menu-image");
var windowAvailWidth = window.screen.availWidth;
var ipadSidewaysWidth = 768;
console.log(menus); // スクロールバーを除く画面幅が768pxより大きかった場合はモーダル機能付与

if (windowAvailWidth > ipadSidewaysWidth) {
  images.forEach(function (image) {
    image.addEventListener("click", function () {
      modal_image.src = "";
      var image_src = image.getAttribute("src");
      modal_image.classList.add("show");
      modal_wrapper.classList.add("show");
      modal_image.src = image_src;
    });
  }); // modal_wrapperをクリックでモーダルクローズ

  modal_wrapper.addEventListener("click", function () {
    if (modal_image.classList.contains("show")) {
      modal_wrapper.classList.remove("show");
      modal_image.classList.remove("show");
    }
  });
}
/******/ })()
;