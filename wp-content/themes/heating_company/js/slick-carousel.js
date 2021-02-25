$(document).ready(function () {
    $('.c-reviews').slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: false,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 660,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: false,
                    draggable: true
                }
            }
        ]
    });
});

// $(document).ready(function(){
//     $('.c-carousel').slick({
//         dots: true,
//         infinite: true,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         draggable: false,
//         responsive: [
//             {
//                 breakpoint: 600,
//                 settings: {
//                     arrows: false,
//                     draggable: true
//                 }
//             }
//         ]
//     });
// });