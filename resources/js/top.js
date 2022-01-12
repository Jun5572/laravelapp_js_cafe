let loading_wrapper = document.querySelector('.loading-wrapper');

window.addEventListener("load", () => {

    let outer_wrapper = document.querySelector('.outer-wrapper');
    let sns_wrapper = document.querySelector('.sns-wrapper');
    
    new Promise((resolve) => {
        setTimeout(() => {
            loading_wrapper.classList.add('done');
        }, 3000);
        // resolveで処理が終わったことを伝える
        resolve();
    }).then(() => {
        // ページ読み込み完了後にフェードイン
        setTimeout(() => {
            outer_wrapper.classList.add('loaded');
        }, 3000);
    }).then(() => {
        setTimeout(() => {
            // top画面　snsのエリアをページ読み込み後に表示 
            sns_wrapper.classList.add('show');
        }, 4000);
    });
}, false);
