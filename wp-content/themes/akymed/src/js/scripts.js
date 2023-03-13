$(document).ready(function () {

    var $menu = $("#header");
    $(window).scroll(function() {
        var winScrollTop = $(this).scrollTop();
        if ( $(this).scrollTop() > 100 && $menu.hasClass("default")){
            $menu.removeClass("default").addClass("moved");
        } else if($(this).scrollTop() <= 100 && $menu.hasClass("moved")) {
            $menu.removeClass("moved").addClass("default");
        }
    });

    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

    if ($("#map").length){
        var initializeContactsMap;

        initializeContactsMap = function() {
            var canvasMap, location, locationMarker, options, x, y;
            if ($('#map').length) {
                x = 55.787506;
                y = 37.635698;
                location = new google.maps.LatLng(x, y);
                options = {
                    center: location,
                    zoom: 16,
                    mapTypeControl: false,
                    scrollwheel: false
                };

                var markerImage = new google.maps.MarkerImage(
                    new google.maps.Size(0,150),
                    new google.maps.Point(0,0),
                    new google.maps.Point(37,110)
                );


                canvasMap = new google.maps.Map(document.getElementById('map'), options);
                locationMarker = new google.maps.Marker({
                    position: location
                });

                return locationMarker.setMap(canvasMap);
            }
        };
        $(document).ready(initializeContactsMap);
    }

    if ($("section.team").length){
        $(".team__item-header").click(function () {
            $(this).closest('.team__item').toggleClass('active').find('.team__item-wrapper').fadeToggle(300);
        });
    }
    if ($(".header__burger").length){
        $(".header__burger").click(function () {
            // $('.header').addClass('moved');
            $('body').toggleClass('locked');
            $('.header__mobile-menu').toggleClass('active');
        });
        $(".header__mobile-menu .menu-item-has-children > a").click(function () {
            // event.preventDefault();
            $(this).closest('.menu-item-has-children').find('.sub-menu').fadeToggle(300);
        });
        if (window.innerWidth < 1025) {
            $(".menu-footer-menu-container .menu-item-has-children > a").click(function () {
                // console.log('+');
                event.preventDefault();
                $(this).toggleClass('shoved');
                $(this).closest('.menu-item-has-children').find('.sub-menu').fadeToggle(300);
            });
        }
    }
});

