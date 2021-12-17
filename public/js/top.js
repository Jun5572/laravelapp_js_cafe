/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/top.js ***!
  \*****************************/
var loading_wrapper = document.querySelector('.loading-wrapper');
window.addEventListener("load", function () {
  var outer_wrapper = document.querySelector('.outer-wrapper');
  var sns_wrapper = document.querySelector('.sns-wrapper');
  new Promise(function (resolve) {
    loading_wrapper.classList.add('done'); // resolveで処理が終わったことを伝える

    resolve();
  }).then(function () {
    // ページ読み込み完了後にフェードイン
    outer_wrapper.classList.add('loaded');
  }).then(function () {
    setTimeout(function () {
      // top画面　snsのエリアをページ読み込み後に表示 
      sns_wrapper.classList.add('show');
    }, 1000);
  });
}, false);
/******/ })()
;