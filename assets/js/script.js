/* global form */
// START: LAYOUT BRAND
var LayoutBrand = function () {
    return {
        //main function to initiate the module
        init: function () {
            $('body').on('click', '.nav-toggler', function () {
                var target = $(this).data('target');
                $(target).toggleClass("ep-shown");
            });
        }
    };
}();
// END: LAYOUT BRAND
// START: LAYOUT HEADER
var LayoutHeader = function () {
    var offset = parseInt($('.ep-header').attr('data-minimize-offset') > 0 ? parseInt($('.ep-header').attr('data-minimize-offset')) : 0);
    var _handleHeaderOnScroll = function () {
        if ($(window).scrollTop() > offset) {
            $("body").addClass("scroll");
            $("body").addClass("scroll2");
        } else {
            $("body").removeClass("scroll");
            $("body").removeClass("scroll2");
        }
    };
    return {
        init: function () {
            _handleHeaderOnScroll();
            $(window).scroll(function () {
                _handleHeaderOnScroll();
            });
        }
       };
}();
// END: LAYOUT HEADER
// START: LAYOUT GO TO TOP
var LayoutGo2Top = function () {
    var handle = function () {
        var currentWindowPosition = $(window).scrollTop(); 
        if (currentWindowPosition > 300) {
            $(".ep-go2top").show();
        } else {
            $(".ep-go2top").hide();
        }
    };
    return {
        init: function () {
            handle(); 
            if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
                $(window).bind("touchend touchcancel touchleave", function (e) {
                    handle();
                });
            } else {
                $(window).scroll(function () {
                    handle();
                });
            }
            $(".ep-go2top").on('click', function (e) {
                e.preventDefault();
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
            });
        }
    };
}();
// END: LAYOUT GO TO TOP
// START: NAV
var LayoutNav = function () {
    var handle = function () {
        var offset;
        var scrollspy;
        var speed;
        $('body').addClass('scroll');
        offset = $('.header').outerHeight(true);
        $('body').removeClass('scroll');
        scrollspy = $('body').scrollspy({
            target: '.menu-onepage',
            offset: offset
        });
        speed = parseInt($('.menu-onepage').attr('data-onepage-animation-speed'));
        scrollspy.on('activate.bs.scrollspy', function () {
            $(this).find('.page-link.ep-active').removeClass('ep-active');
            $(this).find('.page-link.active').addClass('ep-active');
        });
        $('.page-link > a').on('click', function (e) {
            var section = $(this).attr('href');
            var top = 0;
            if (section !== "#home") {
                top = $(section).offset().top - offset + 1;
            }
            $('html, body').stop().animate({
                scrollTop: top
            }, speed, 'easeInExpo');
            e.preventDefault();
        });
    };
    return {
        init: function () {
            handle();
        }
    };
}();
// END: NAV
// START: SCROLL TO VIEW DETECTION
function isScrolledIntoView(elem) {
    var $elem = $(elem);
    var $window = $(window);
    var docViewTop = $window.scrollTop();
    var docViewBottom = docViewTop + $window.height();
    var elemTop = $elem.offset().top;
    var elemBottom = elemTop + $elem.height();
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
// END: SCROLL TO VIEW FUNCTION
$(document).ready(function () {
    LayoutBrand.init();
    LayoutHeader.init();
    LayoutGo2Top.init();
    LayoutNav.init();
    //QUESTION FORM VALIDATION
    $("form[name='question_form']").validate({
        rules: {
            question: {
                required: true,
                minlength: 3,
                maxlength: 30
            }
        }
    });
    $(function () {
        $("form[name='message_form']").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                     number: true,
                     minlength: 10
                },
                message: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                message: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: "Please enter a valid email address"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
});