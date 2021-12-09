
window.addEventListener("load", () => {
    // ページ読み込み完了後にフェードイン
    let elm_body = document.querySelector('#body');
    elm_body.classList.add('loaded');

    // top画面　snsのエリアをページ読み込み後に表示 
    let sns_wrapper = document.querySelector(".sns-wrapper");
    const sns_show = function() {
        sns_wrapper.classList.add('show');
        alert('show');
    };
    window.setTimeout(sns_show(), 5000);
}, false);
