jQuery(document).ready(function($) {
    //modals
    $('.modal').modal();
    //profile, etc
    $('.button-collapse, .profile-menu').sideNav();
    //parallax
    $('.parallax').parallax();
    //tabs
    $('ul.tabs').tabs();
    //collapsible
    $('.collapsible').collapsible();
    //fancybox
    $('.materialboxed').materialbox();
    //scrollSpy
    $('.scrollspy').scrollSpy();
    //masonry
    masonry($);
    //scrollToTop
    scrollToTop($);
    //carousel
    $('.carousel').carousel();
});


/**
 * @param $
 */
function masonry($){
    masonry_init($);
    $(window).resize(function(){masonry_init($);});
}

/**
 * @param $
 */
function masonry_init($) {
    $('.masonry-gallery').each(function(){
        if(!$(this).hasClass("row")){
            $(this).addClass("row");
        }
        masonry_apply($, $(this));
    });
}

/**
 * @param $
 * @param $container
 */


/**
 * @param a
 * @param b
 * @returns {number}
 * @constructor
 */
function SortById(a, b){
    var aId                 = a.id;
    var bId                 = b.id;
    return ((aId < bId) ? -1 : 1);
}

/**
 * @param $
 */
function scrollToTop($) {
    var $button = $('#scroll_to_top');
    $button.click(function(e) {
        e.preventDefault();
        $("html, body").animate({scrollTop:0}, 'slow');
    });
    $(window).on('scroll', function() {
        if($(window).scrollTop() >= ($(window).height() / 2)) {
            if($button.hasClass('hide')) {
                $button.removeClass('hide');
            }
        } else {
            if(!$button.hasClass('hide')) {
                $button.addClass('hide');
            }
        }
    });
}
