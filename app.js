$(document).ready(function(){
$('.slider').slick({
    arrows:false,
    dots:true,
    appendDots:'.slider-dots',
    dotsClass:'dots'
});



let hamberger = document.querySelector('.hamberger');
let times = document.querySelector('.times');
let mobilenav = document.querySelector('.mobile-nav');

// event listener
hamberger.addEventListener('click', function(){
    mobilenav.classList.add('menu');
});

times.addEventListener('click', function(){
    mobilenav.classList.remove('menu');
});

});



