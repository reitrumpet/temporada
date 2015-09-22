/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* ### MODAL ### */

$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').focus();
});

/* ### MODAL ### */

/* ### BANNER ### */

$(document).ready(function() {
    //Events that reset and restart the timer animation when the slides change
    $("#transition-timer-carousel").on("slide.bs.carousel", function(event) {
        //The animate class gets removed so that it jumps straight back to 0%
        $(".transition-timer-carousel-progress-bar", this)
                .removeClass("animate").css("width", "0%");
    }).on("slid.bs.carousel", function(event) {
        //The slide transition finished, so re-add the animate class so that
        //the timer bar takes time to fill up
        $(".transition-timer-carousel-progress-bar", this)
                .addClass("animate").css("width", "100%");
    });

    //Kick off the initial slide animation when the document is ready
    $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
            .css("width", "100%");
});

/* ### BANNER ### */

/* ### LISTAGEM ### */

$(document).ready(function() {
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function() {
        var $this = $(this),
                c = $this.data('count');
        if (!c)
            c = 0;
        c++;
        $this.data('count', c);
        $('#' + this.id + '-bs3').html(c);
    });
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
});


/* ### LISTAGEM ### */

/* ### CONTATO ### */

$('#contact-form').bootstrapValidator({
//        live: 'disabled',
    message: 'This value is not valid',
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        Name: {
            validators: {
                notEmpty: {
                    message: 'The Name is required and cannot be empty'
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'The email address is required'
                },
                emailAddress: {
                    message: 'The email address is not valid'
                }
            }
        },
        Message: {
            validators: {
                notEmpty: {
                    message: 'The Message is required and cannot be empty'
                }
            }
        }
    }
});

/* ### CONTATO ### */


/* ### DESTAQUE CATEGORIA ### */

$(document).ready(function() {
    $('#myCarousel').carousel({
        interval: 4000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if (!clickEvent) {
            var count = $('.nav').children().length - 1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if (count == id) {
                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});

/* ### DESTAQUE CATEGORIA ### */


/* ### SERIE ### */

$(function() {

    "use strict";

    var $bgobj = $(".ha-bg-parallax"); // assigning the object

    $(window).on("scroll", function() {

        var yPos = -($(window).scrollTop() / $bgobj.data('speed'));

        // Put together our final background position

        var coords = '100% ' + yPos + 'px';

        // Move the background

        $bgobj.css({backgroundPosition: coords});

    });
    $('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function() {
        $(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
        $(this).addClass('selected');
        $(this).find('input[type="radio"]').prop("checked", true);

    });

});



/* ### SERIE ### */