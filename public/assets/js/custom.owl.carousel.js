$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:8,
        responsiveClass: true,
        nav: true,
        responsive:{
            0:{
                items:2,
                nav:true
            },
            768:{
                items:3,
                nav:true
            },
            1440:{
                items:4,
                nav:true
            }
        }
    })
})