/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/

let menuData = [
  {
    'id': 1,
    'name': 'いろどり野菜のサラダ',
    'img': 'images/menu/menu_salad_1.jpg',
    'desc': 'ルッコラ、にんじん、トマトコンカッセをトッピングした野菜を楽しむサラダです。',
    'price': 398
  },
  {
    'id': 2,
    'name': 'シーザーサラダ',
    'img': 'images/menu/menu_salad_2.jpg',
    'desc': '生ハム、クルトンをのせたシーザーサラダです。',
    'price': 468
  },
  {
    'id': 3,
    'name': 'アマトリチャーナ',
    'img': 'images/menu/menu_pasta_1.jpg',
    'desc': '当店人気No.1!!濃厚モッツァレラチーズとトマトソースの相性はバツグン！',
    'price': 1220
  },
  {
    'id': 4,
    'name': 'なめらかクリームのカルボナーラ',
    'img': 'images/menu/menu_pasta_2.jpg',
    'desc': 'ソースとよく絡む専用のパスタを使用したカルボナーラです。',
    'price': 980
  },
  {
    'id': 5,
    'name': 'こだわりモッツァレラチーズのピザ',
    'img': 'images/menu/menu_pizza_1.jpg',
    'desc': '当店自慢の窯焼きでお届けする不動の人気を誇るピザです。',
    'price': 980
  },
  {
    'id': 6,
    'name': 'ホットカフェラテ',
    'img': 'images/menu/menu_drink_cafe_latte.jpg',
    'desc': 'ホッと一息、いかがですか？',
    'price': 380
  },
  {
    'id': 7,
    'name': 'ショコラケーキ',
    'img': 'images/menu/menu_cake_1.jpg',
    'desc': 'ホットカフェラテとの相性ピッタリです',
    'price': 340
  },
  {
    'id': 8,
    'name': 'シナモンロール',
    'img': 'images/menu/menu_sinamon_roll.jpg',
    'desc': 'シナモンロールが新発売！ぜひご賞味ください！',
    'price': 390
  },
];



var modal_wrapper = document.querySelector(".modal-wrapper");
var menus = document.querySelectorAll(".menu-item");
var images = document.querySelectorAll(".menu-img");
// モーダル内要素取得
var modal_image = document.querySelector(".modal-menu-image");
let modal_menu_name = document.querySelector('[data-js="modalMenuName"]');
let modal_menu_desc = document.querySelector('[data-js="modalMenuDesc"]');
let modal_menu_price = document.querySelector('[data-js="modalMenuPrice"]');
let modal_menu_tax_in_price = document.querySelector('[data-js="modalMenuTaxInPrice"]');
var windowAvailWidth = window.screen.availWidth;
var ipadSidewaysWidth = 768; // スクロールバーを除く画面幅が768pxより大きかった場合はモーダル機能付与

if (windowAvailWidth > ipadSidewaysWidth) {
  images.forEach(function (image) {
    image.addEventListener("click", function () {
      var image_src = image.getAttribute("src");
      var image_id = image.getAttribute("data-id");
      for (let i=0; i<menuData.length; i++) {
        if (image_id == menuData[i].id) {
          let menu_name = menuData[i].name;
          let menu_desc = menuData[i].desc;
          let menu_price = menuData[i].price;

          modal_menu_name.innerText = menu_name;
          modal_menu_desc.innerText = menu_desc;
          modal_menu_price.innerText = menu_price;
          modal_menu_tax_in_price.innerText = Math.floor(calcTaxInPrice(menu_price));
        } else {
          continue;
        }
      }
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

function calcTaxInPrice(priceNum) {
  return ( priceNum * 0.1 ) + priceNum;
}

/******/ })()
;