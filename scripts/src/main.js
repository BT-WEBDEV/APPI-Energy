// (function ($) {
$(document).ready(function () {
    // new WOW().init();
    $('.third-button').on('click', function () {
        $('.animated-icon3').toggleClass('open');
        $('.custom-navbar').toggleClass('nav-black');
    });

    // Add Class When Scrolls
    $(window).scroll(function () {
        var nav = $('.custom-navbar');
        var logo_word = $('#logo_word');
        var top = 50;
        if ($(window).scrollTop() >= top) {
            nav.addClass('shrink');
        } else {
            nav.removeClass('shrink');
        }
    });

    // Swiper
    var gkaThemeSlider = new Swiper('.gka-theme-swiper-container', {
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Swiper
    var mySwiper = new Swiper('.mySwiper', {
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });

    // Accordion
    $('.collapse.faq-body').on('show.bs.collapse', function (e) {
        $selected_card = $(e.target).parent();
        $(".card").removeClass("bg-l-green");
        $($selected_card).addClass("bg-l-green");
        // $(".open-close").attr("src", "/wp-content/themes/APPI/images/icons/open.svg");
        // $($selected_card).find(".open-close").attr("src", "/wp-content/themes/APPI/images/icons/close.svg");
    });

    $(".collapse").on('show.bs.collapse', function () {
        $(this).prev(".card-header").find(".open-close").attr("src", "/wp-content/themes/APPI/images/icons/close.svg");
    }).on('hide.bs.collapse', function () {
        $(this).prev(".card-header").find(".open-close").attr("src", "/wp-content/themes/APPI/images/icons/open.svg");
    });


    // Tab
    var url = window.location.href;
    var pathname = window.location.pathname.split("/");
    if (pathname[1] == "news") {
        var activeTab = url.substring(url.indexOf("#") + 1);
        $('#nav-tab a[href="#' + activeTab + '"]').tab('show');
    }

    // Careers Current Opportunity
    $("#gka-bundle-2cols-image-text-10 .custom-btn").on("click", function () {
        gtag('event', 'click', { 'event_category': 'Current Career Opportunities' });
    });

    // Contact Us Submission
    $("#wpforms-submit-47").on("click", function () {
        gtag('event', 'click', { 'event_category': 'Contact Us Page' });
    });

    // News Letter Signup
    $("#wpforms-submit-48").on("click", function () {
        gtag('event', 'click', { 'event_category': 'Newsletter' });
    });

}); /* Document Ready End */
// })(jQuery);










