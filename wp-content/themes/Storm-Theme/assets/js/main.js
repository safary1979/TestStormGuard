// $('.slider_blocks').slick({
//     arrows:false,
//     dots: true,
//     fade: true
// });

$(document).ready(function () {
    var menuBtn = $('.header_bottom_wrapper_right_btn');
    var menu = $('.header_bottom_wrapper_right_ul');

    menuBtn.on('click', function (event) {
        event.preventDefault();
        menu.toggleClass('header_bottom_wrapper_right_ul__active')
    })
})


$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});


