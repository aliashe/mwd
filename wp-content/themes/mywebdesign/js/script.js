
// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 110) {
	if ( $(window).width() < 767) {     
		$(".navbar-toggle").removeClass("hidden");
		$(".navbar-brand").addClass("fit-width");
		$(".navbar").addClass("purple-border");
		$(".navbar-brand").removeClass("big");
		$(".navbar-brand").removeClass("full-width");
		}
		else {
		}
    } else {
		if ( $(window).width() < 767) {   
        $(".navbar-toggle").addClass("hidden");
		$(".navbar-brand").removeClass("fit-width");
		$(".navbar").removeClass("purple-border");
		$(".navbar-brand").addClass("big");
		$(".navbar-brand").addClass("full-width");
		}
		else {
		}
    }
}

$('.nav a').on('click', function(){
	if ( $(window).width() < 767) {   
    $('.navbar-toggle').click() //bootstrap 3.x by Richard
	}
});

if($('.modal-title img').length){
   $('.ekko-lightbox-container').css( "color", "red !important" );
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
     $(this).ekkoLightbox({
                loadingMessage: '<i class="fa fa-spinner fa-pulse fa-fw"></i>'
            });
}); 

new WOW().init();