$(document).ready(function() {
    $('.slick-carousel').slick({
        dots: false, // Show navigation dots
        arrows: true, // Show navigation arrows
        infinite: true, // Enable infinite scrolling
        autoplay: true, // Enable autoplay
        slidesToShow: 4, // Number of slides to show at a time
        slidesToScroll: 1, // Number of slides to scroll at a time
        autoplaySpeed: 30000, // Autoplay speed in milliseconds
        prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></button>',
        nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></button>',
        responsive: [
            {
                breakpoint: 768, // Responsive breakpoint
                settings: {
                    slidesToShow: 2, // Adjust slidesToShow for smaller screens
                }
            },
            {
                breakpoint: 480, // Responsive breakpoint
                settings: {
                    slidesToShow: 1, // Adjust slidesToShow for even smaller screens
                }
            }
        ]
    });

    $('[data-fancybox="gallery"]').fancybox({
        toolbar: true, // Show toolbar with navigation and close buttons
        arrows: true, // Show navigation arrows
        infobar: true, // Show infobar with image count and caption
        buttons: [
            "zoom", // Show zoom button
            "slideShow", // Show slideshow button
            "fullScreen", // Show fullscreen button
            "thumbs", // Show thumbnail navigation button
            "close" // Show close button
        ],
        animationEffect: "zoom-in-out", // Set the animation effect (fade, zoom, zoom-in-out, slide, rotate, flip)
        transitionEffect: "zoom-in-out", // Set the transition effect (fade, slide, circular, tube, zoom-in-out)
        transitionDuration: 500, // Set the transition duration in milliseconds
        loop: true, // Enable looping through the gallery
        keyboard: true, // Enable keyboard navigation
        idleTime: 3, // Set the idle time in seconds before closing the gallery
        idleOpacity: 0.8, // Set the opacity of the gallery when idle
        protect: true, // Prevent right-click and dragging on the images
        image: {
            preload: true, // Preload the next and previous images
            protect: true // Prevent image downloading and right-clicking
        },
        video: {
            autoStart: true, // Automatically start playing videos
            hideControls: false // Show video controls
        },
        caption: function (instance, item) {
            return $(this).attr('title');
        }
    });
});
