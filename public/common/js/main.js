/*
  Author: alamin-items
  Template: Jahanaffrin
  Version: 1.0
  URL:https://themeforest.net/user/alamin-items
*/



$(document).ready(function () {

    "use strict";

    // Text rotator
    $('.rotate').textillate({
        minDisplayTime: 3000,
        in: {
            effect: 'fadeInLeft',
            shuffle: true
        },
        out: {
            effect: 'fadeOutRight',
            reverse: true
        },
        loop: true
    });


    $('.mfp-image').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        }
    });


    //=================blog================
    $(".more").on('click', function () {
        $(".extra-testimonial").slideToggle();
        $(".down").toggleClass("arrow-rotate");
    });



    // Navigation
    $('nav').hover(
        function () {
            if ($(window).outerWidth() >= 992) {
                $('section > .container').velocity({
                    left: '100px'
                }, 500, 'linear');
                $('nav').addClass('active').velocity({
                    width: '150px'
                }, 200, 'linear');
            }
        },
        function () {
            $('section > .container').velocity({
                left: '0px'
            }, 500, 'linear');
            $('nav').removeClass('active').velocity({
                width: '50px'
            }, 200, 'linear');
        });

    // Content changer
    $('nav a').on('click', function (event) {
        var changer = $('.md-changer');
        event.preventDefault();

        var slide = $(this).attr('href');
        var activeSlide = $('.md-changer > .active');

        if (!changer.hasClass('animating') && !$(slide).is($(activeSlide))) {
            $(changer).addClass('animating');
            $(this).addClass('active').siblings().removeClass('active');

            $(activeSlide).velocity({
                opacity: 0,
                left: '30px'
            }, 350, 'easeInQuint', function () {
                $(slide).css({
                    opacity: '0',
                    left: '-30px'

                }).addClass('active').siblings().removeClass('active');

                $(slide).velocity({
                    opacity: 1,
                    left: '0px'

                }, 350, 'easeOutQuint', function () {
                    $(changer).removeClass('animating');
                });
            });

        }

    });




    // Preloader animations
    $(window).load(function () {

        $('.md-preloader .preloader').delay(1000).velocity({
            opacity: 0
        }, 500, 'easeInQuint');

        $('.md-preloader').delay(1000).velocity({
                height: 0
            }, 500,
            'easeInOutQuint',
            function () {
                $('.md-preloader').remove()
            });

        $('section').css({
            height: 'auto'
        }).delay(1000).velocity({
                top: 0
            }, 2000, 'easeInOutQuint',
            function () {
                $('.md-background').css({
                    position: 'fixed'
                });
            });

        $('#style-switcher').css({
            bottom: '-25%'
        }).delay(2000).velocity({
                bottom: '70%'
            }, 2000, 'easeInOutQuint',
            function () {
                $(this).css({
                    bottom: '70%'
                });
                $('body').css({
                    overflowY: 'auto'
                });
            });

        $('.music-player__wrapper').css({
            right: '-120px'
        }).delay(2500).velocity({
                right: '25px'
            }, 2000, 'easeInOutQuint',
            function () {
                $(this).css({
                    right: '25px'
                });
                $('body').css({
                    overflowY: 'auto'
                });
            })

        $('nav').delay(1500).velocity({
            left: 0
        }, 700, 'easeInOutQuint')

        var filler = $('.md-progress-bar .filler');
        var fillerWidth = filler.width() / filler.parent().width() * 100;
        filler.css({
            width: '0%'
        }).delay(1800).animate({
            width: fillerWidth + '%'
        }, 3000, 'easeInOutQuint');

    });

});

//=======================Contact Form Validation=============

var fnam = document.getElementById("fname");
var fnm_errmsg = document.getElementById("fnm-err");

var lnam = document.getElementById("lname");
var lnm_errmsg = document.getElementById("lnm-err");

var email = document.getElementById("email");
var eml_errmsg = document.getElementById("eml-err");

var mesg = document.getElementById("mesg");
var msg_errmsg = document.getElementById("msg-err");



function sub() {
    if (fnam.value == '') {
        fnam.style.border = "1px solid red";
        fnm_errmsg.innerHTML = "please enter your first name";
        fnam.focus();
        return false;
    }
    if (lnam.value == '') {
        lnam.style.border = "1px solid red";
        lnm_errmsg.innerHTML = "please enter your Last name";
        lnam.focus();
        return false;
    }
    if (email.value == '') {
        email.style.border = "1px solid red";
        eml_errmsg.innerHTML = "please enter your Email";
        email.focus();
        return false;
    }

    if (mesg.value == '') {
        mesg.style.border = "1px solid red";
        msg_errmsg.innerHTML = "please type your message";
        mesg.focus();
        return false;
    }
}


function errvalid() {
    if (fnam.value != '') {
        fnam.style.border = "1px solid transparent";
        fnm_errmsg.innerHTML = "";
    }
    if (lnam.value != '') {
        lnam.style.border = "1px solid transparent";
        lnm_errmsg.innerHTML = "";
    }
    if (email.value != '') {
        email.style.border = "1px solid transparent";
        eml_errmsg.innerHTML = "";
    }

    if (mesg.value != '') {
        mesg.style.border = "1px solid transparent";
        msg_errmsg.innerHTML = "";
    }
}

fnam.addEventListener("blur", errvalid);
lnam.addEventListener("blur", errvalid);
email.addEventListener("blur", errvalid);
mesg.addEventListener("blur", errvalid);


//=======================Background MusicValidation=============


$(document).ready(function () {
    $(".music-player").on('click', function () {

        var $this = $(this),
            audio = $this.siblings('audio')[0];



        if (audio.paused === false) {
            audio.pause();
            audio.currentTime = 0;
            $this.removeClass("playing");
        } else {
            audio.play();
            $this.addClass("playing");
        }

    });

    // Getting volume level
    const volume = document.querySelector("audio").volume; // 1 

    // Setting volume level
    document.querySelector("audio").volume = 0.1; // set volume to 50%



})

//=======================Background MusicValidation=============
