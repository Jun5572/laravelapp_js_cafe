/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/top.js ***!
  \*****************************/
window.addEventListener("load", function () {
  // ページ読み込み完了後にフェードイン
  var elm_body = document.querySelector('#body');
  elm_body.classList.add('loaded'); // top画面　snsのエリアをページ読み込み後に表示 

  var sns_wrapper = document.querySelector(".sns-wrapper");

  var sns_show = function sns_show() {
    sns_wrapper.classList.add('show');
    alert('show');
  };

  window.setTimeout(sns_show(), 5000);
}, false);
/******/ })()
;