$(document).ready(function(){
    $('.carousel__inner').slick({
        speed: 2500,
        autoplay: true,
        prevArrow: '<button type="button" class="slick-prev"><img src="img/slider/r.png"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="img/slider/l.png"></button>'

    });    
  });
  $(document).ready(function(){
    $('.carousel__mob_inner').slick({
        speed: 2500,
        autoplay: true,
        prevArrow: '<button type="button" class="slick-prev"><img src="img/slider/r.png"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="img/slider/l.png"></button>'

    });    
  });

  window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu__items'),
    menuItem = document.querySelectorAll('.menu_item'),
    hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu__items_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('menu__items_active');
        })
    })
})