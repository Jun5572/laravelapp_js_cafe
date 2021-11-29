/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/
var modal_wrapper = document.querySelector(".modal-wrapper");
var menu = document.getElementById("menu-item");
var images = document.querySelectorAll(".menu-img");
var modal_image = document.querySelector(".modal-menu-image");
images.forEach(function (image) {
  image.addEventListener("click", function () {
    modal_image.src = "";
    var image_src = image.getAttribute('src');
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
/******/ })()
;