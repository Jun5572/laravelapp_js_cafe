import $ from 'jquery';
import 'slick-carousel';
// import 'slick-carousel/slick/slick.css';
// import 'slick-carousel/slick/slick-theme.css';

// slickのスライダー記述
$(".slider-wrapper").slick({
    centerMode: true,
    centerPadding: '60px',
    autoplay: true,
    dots: true,
    slidesToShow: 3,
});