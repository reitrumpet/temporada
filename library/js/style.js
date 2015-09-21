/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* ### MODAL ### */

$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').focus()
})

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


/* ### LISTAGEM-MAIS CURTIDAS ### */



/* ### LISTAGEM-MAIS CURTIDAS ### */

/* ### LISTAGEM ### */