
const app = new Vue({
    el: "#app",
    data: {
        buttonActive: false,
        scroll: 0,
    },
    mounted() {
        window.addEventListener("scroll", this.scrollWindow);
    },
    methods: {
        scrollTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        },
        scrollWindow() {
            const showPoint = 500;
            this.scroll = window.scrollY;
            if (showPoint <= this.scroll) {
                this.buttonActive = true;
            } else {
                this.buttonActive = false;
            }
        },
        // toggleBtn: function() {
        //     this.show = !this.show
        // }
    },
});