

jQuery(document).ready(function($) {
	$(function(){
		// $("#loader").removeClass("not-displayed");
	    setTimeout(function() {
	        Typed.new(".typed-title", {
	            strings: ["inspire.", "to innovate", "& excel"],
	            typeSpeed: 100,
	            loop: true,
	            loopCount: null,
	            backDelay: 1500
	           
	        });
	        $("#loader").addClass("not-displayed");
	        // $('#decoration-home-id').removeClass('decoration-home-animation');
	    }, 4000);
	});


	$document = $(document);
	$sidebar_width = $('#service-sidebar').width();
	$document.scroll(function() {

		$sidebar = $('#service-sidebar');
		$contentbar = $('#service-description');
		if ($(window).width() > 768) {
			if ( $document.scrollTop() > $contentbar.offset().top ) {
			$sidebar.addClass("fixed-top");
			$sidebar.width($sidebar_width);
			$contentbar.removeClass("col-md-offset-1");
			$contentbar.addClass("col-md-offset-5");
			///side bar link switch//
			 var scrollPos = $document.scrollTop();
			 $(".sidebar-link").each(function(i) {

			 	var currentLink = $(this);

			 	var refElement = $(currentLink.attr("href"));
			 	console.log(refElement);
			 	var decor = $(".decor").eq(i);
			 	if ( refElement.offset().top <= scrollPos + 40 && refElement.offset().top + refElement.height() > scrollPos + 40 && $(window).scrollTop() + $(window).height() != $document.height()) {
			 		$(".sidebar-link").removeClass('active');
		 			currentLink.addClass("active");	
		 			decor.addClass("show-decoration");
			 		
			 	} else if ( $(window).scrollTop() + $(window).height() === $document.height() ) {
			 			$(".sidebar-link").removeClass('active');
			 			$(".sidebar-link").last().addClass("active");
			 			decor.removeClass("show-decoration");
			 			console.log("bottom");
			 	} else {
			 		currentLink.removeClass("active");
			 		decor.removeClass("show-decoration");
			 	}
			 });

			} else if ( $document.scrollTop() <= $contentbar.offset().top ) {
				$sidebar.removeClass("fixed-top");
				$sidebar.width('');
				$contentbar.removeClass("col-md-offset-5");
				$contentbar.addClass("col-md-offset-1");
			} 
		}
		

	});
////smooth scroll////
	$(".sidebar-link").each(function() {
		$(this).click(function() {
			$(".sidebar-link").removeClass("active");
			var href = $(this).attr('href');
			$('html,body').animate({
				scrollTop: $(href).offset().top
				}, 700);
			$(this).addClass("active");
		});
	});
	$(".link").each( function() {
		$(this).click(function() {
			var href = $(this).attr('href');
			$('html,body').animate({
				scrollTop: $(href).offset().top
				}, 700);
		});
	});

////////////////////
	$('#mob-nav').click( function() {
		$('.mob-nav-hidden').addClass('visible');
		// $('#mob-nav').
	});
////////////////////
	if ( $(document).height() >= $(window).height() ) {
		$(".grey-footer").removeClass("slip-to-bottom");
	} else {
		$(".grey-footer").addClass("slip-to-bottom");
	}

/////////////////

});
