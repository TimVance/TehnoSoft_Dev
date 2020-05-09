$(function() {
    $('.docs').owlCarousel({
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 2
            },
            480: {
                items: 3
            },
            // breakpoint from 768 up
            768: {
                items: 4
            }
        }
    });
});