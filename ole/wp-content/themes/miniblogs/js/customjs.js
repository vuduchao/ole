$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    // nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
})
// $(document).ready(function() {
    $('.newsTop').perfectScrollbar('update');
// });
// jQuery(function() {
//     jQuery('.any-class').jCarouselLite({
//         btnNext: '.next',
//         btnPrev: '.prev',
//         visible: 2,
//     });
// });
