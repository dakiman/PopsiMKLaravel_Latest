const Isotope = require('isotope-layout');

jQuery(document).ready(function ($) {


    "use strict";

    // Page loading animation

    $("#preloader").animate({
        'opacity': '0'
    }, 600, function () {
        setTimeout(function () {
            $("#preloader").css("visibility", "hidden").fadeOut();
        }, 300);
    });

    $(window).on('scroll', () => {
        const scroll = $(window).scrollTop();
        const box = $('.header-text').height();
        const header = $('header').height();

        if (scroll >= box - header) {
            $("header").addClass("background-header");
        } else {
            $("header").removeClass("background-header");
        }
    });

    if ($('.owl-clients').length) {
        $('.owl-clients').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 30,
            autoplay: false,
            smartSpeed: 700,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 3,
                    margin: 20
                },
                992: {
                    items: 5,
                    margin: 30
                }
            }
        });
    }

    if ($('.owl-banner').length) {
        $('.owl-banner').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            margin: 0,
            autoplay: false,
            smartSpeed: 700,
            autoplayTimeout: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                460: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 1,
                    margin: 20
                },
                992: {
                    items: 1,
                    margin: 30
                }
            }
        });
    }

    let filters = $('.filters ul li');

    if(filters.length) {
        filters.click(function () {
            $('.filters ul li').removeClass('active');
            $(this).addClass('active');

            let data = $(this).attr('data-filter');

            $grid.arrange({
                filter: data
            })
        });

        let defaultFilter = filters[0].dataset.filter;
        filters.removeClass('active');
        filters.first().addClass('active');

        let $grid = new Isotope('.grid', {
            itemSelector: ".all",
            percentPosition: true,
            masonry: {
                columnWidth: ".all"
            },
            filter: defaultFilter
        })
    }
});
