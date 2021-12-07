let modal_wrapper = document.querySelector(".modal-wrapper");
let menus = document.querySelectorAll(".menu-item");
let images = document.querySelectorAll(".menu-img");
let modal_image = document.querySelector(".modal-menu-image");
let windowAvailWidth = window.screen.availWidth;
let ipadSidewaysWidth = 768;

console.log(menus);

// スクロールバーを除く画面幅が768pxより大きかった場合はモーダル機能付与
if (windowAvailWidth > ipadSidewaysWidth) {
    images.forEach((image) => {
        image.addEventListener("click", () => {
            modal_image.src = "";
            let image_src = image.getAttribute("src");
            modal_image.classList.add("show");
            modal_wrapper.classList.add("show");
            modal_image.src = image_src;
        });
    });

    // modal_wrapperをクリックでモーダルクローズ
    modal_wrapper.addEventListener("click", () => {
        if (modal_image.classList.contains("show")) {
            modal_wrapper.classList.remove("show");
            modal_image.classList.remove("show");
        }
    });
}

