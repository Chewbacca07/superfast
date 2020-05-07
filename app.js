/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#backtotop').fadeIn();
    } else {
        $('#backtotop').fadeOut();
    }
});
$(document).ready(function() {

    $("#backtotop").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    $('.btn').click(function() {
      $('nav').toggle();  
    });

});
