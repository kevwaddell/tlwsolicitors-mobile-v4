(function($){

	var event_type;
	var url = document.location.toString();
	var window_width = $(window).width(); 
	
	if (Modernizr.touch){
	
	 event_type = 'touchstart';
	  
	} else {
	 
	 event_type = 'click';	
	 
	}
	
	$(document).ready(function (){
		
	var service_select = $('select#service-select');
	var service_area_select = $('select.service-area-select');
	var child_service_area_select = $('select.child-service-area-select');
	var start_enquiry_btn = $('a#start-enquiry-btn');
	
	 $(".selectpicker").selectpicker({
      style: 'btn-default btn-lg hp-select',
      mobile: true,
      size: 5
	  });
	  
	  $(service_area_select).selectpicker('hide');
	  $(child_service_area_select).selectpicker('hide');
	  
	$(service_select).on("change", function(){
		var selected_id = "#"+$(this).find('option:selected').html().replace(/\s+/g, '-').replace(/&nbsp;/g, '-').toLowerCase()+"-select";
		var val = $(this).val();
		
		$(service_area_select).selectpicker('hide');
		
		if ($('.submit-btn').hasClass('hidden')) {
			$('.submit-btn').removeClass('hidden').addClass('animated fadeIn');
		} 

		if ( $(this).attr("name") == "main-service-area" && val !== 0) {
			$(start_enquiry_btn).attr('href', val);
		}
		
		if ( $(this).attr("name") == "service" && val !== 0) {
			$(start_enquiry_btn).attr('href', val);
		}

		
		$(selected_id).selectpicker('show');
		
	 }); 
	 
	$(service_area_select).on("change", function(){
		var selected_id = "#"+$(this).find('option:selected').html().replace(/\s+/g, '-').replace(/&nbsp;/g, '-').toLowerCase()+"-select";
		var val = $(this).val();
		
		 $(child_service_area_select).selectpicker('hide');
		
		if ($('.submit-btn').hasClass('hidden')) {
			$('.submit-btn').removeClass('hidden').addClass('animated fadeIn');
		} 
		
		if ( $(this).attr("name") == "main-service-area" && val !== 0) {
			$(start_enquiry_btn).attr('href', val);
		}
		
		$(selected_id).selectpicker('show');
		
	 }); 
	 	 
	 $(child_service_area_select).on("change", function(){
		var val = $(this).val();
		
		if ($('.submit-btn').hasClass('hidden')) {
			$('.submit-btn').removeClass('hidden').addClass('animated fadeIn');
		} 
		
		if ( $(this).attr("name") == "child-service-area" && val !== 0) {
			$(start_enquiry_btn).attr('href', val);
		}
		
	 }); 
	 
	 //How it Works link
	 
	 $('body').on(event_type,'div.how-it-works-link > a', function(e){
		
		var how_it_works_id = $(this).attr('href');
		var start_panel = $('#how-it-works').find('.slide-outer').eq(0);
	
		if ( $(how_it_works_id).hasClass('hidden') ) {
			
			$(how_it_works_id).removeClass('hidden').addClass('animated fadeIn');
			$('.tlw-wrapper').addClass('how-it-works-on');
		} 
				
		return false;
		
	});
	
	$('body').on(event_type,'button#close-how-it-works', function(e){
		
		var how_it_works_panel = $('#how-it-works');
	
		if ( how_it_works_panel.hasClass('fadeIn') ) {
			how_it_works_panel.removeClass('fadeIn').addClass('fadeOut');
			
			how_it_works_panel.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
				how_it_works_panel.removeClass('animated fadeOut').addClass('hidden');	
				$('.tlw-wrapper').removeClass('how-it-works-on');
				$('.slide-outer').removeAttr('style');
			});
		} 
				
		return false;
		
	});
	
	
	$('body').on(event_type,'.step > a.nav-link', function(e){
		var href = $(this).attr('href');
		var current = $(this).parents('.slide-outer').attr('id');
		var next_index = $(href).index();
		$('.hiw-nav a.active').removeClass('active');
		$('.hiw-nav a').eq(next_index-1).addClass('active');
		
		if ( $(this).hasClass('back-link')  ) {
			$("#"+current).animate({top: "100%", opacity: 0}, 200, function(){
				$(this).removeClass('active');	
				$(href).css({top: "-100%"}).animate({top: "0%", opacity: 1}, 200, function(){
				$(this).addClass('active');
				});
			});
		}
		
		if ( $(this).hasClass('next-link')  ) {
			$("#"+current).animate({top: "-100%", opacity: 0}, 200, function(){
				$(this).removeClass('active');	
				$(href).animate({top: "0%", opacity: 1}, 200, function(){
				$(this).addClass('active');
				});
			});
		}

		return false;
	});
	
	$('body').on(event_type,'.hiw-nav > a', function(e){
		var href = $(this).attr('href');
		var current = $('.slide-outer.active').attr('id');
		var current_index = $("#"+current).index();
		var next_index = $(href).index();
		
		$('.hiw-nav a.active').removeClass('active');
		$(this).addClass('active');
		
		if (next_index > current_index) {
			$("#"+current).animate({top: "-100%", opacity: 0}, 200, function(){
				$(this).removeClass('active');	
				$(href).animate({top: "0%", opacity: 1}, 200, function(){
				$(this).addClass('active');
				});
			});	
		}
		
		if (next_index < current_index) {
			
			$("#"+current).animate({top: "100%", opacity: 0}, 200, function(){
				$(this).removeClass('active');	
				$(href).css({top: "-100%"}).animate({top: "0%", opacity: 1}, 200, function(){
				$(this).addClass('active');
				});
			});
	
		}
		
		return false;
	});
	
	//BUSINESS CAROUSEL FUNCTIONS
	$('.carousel').carousel({
	interval: 5000,
	pause: "hover"
	});
	
	$('#business-carousel').on('slide.bs.carousel', function (e) {	
	$(this).next().find('.banner-item').removeClass('active');
	});
	
	//GO TO PAGE TOP
	$('body').on(event_type,'button#back-2-top', function(e){
	
		$('html, body').animate({ scrollTop: 0 }, 500);

		return false;
		
	});
	
	//Scroll to button
	
	$('body').on(event_type,'a.scroll-to', function(e){
		
		var id = $(this).attr('href');
		//console.log( $("#radio-player"));
		$('html, body').animate({scrollTop: ($("a"+id).offset().top)}, 500);	
		
		
		return false;
		
	});
	
	// VIEW RADIO FILES BUTTON 
	
	$('body').on(event_type,'a#call-2-action-radio', function(e){
		
		//console.log( $("#radio-player"));
	
		if ( $('.audio-files').hasClass('closed') ) {
			$('html, body').animate({scrollTop: ($("#radio-player").offset().top - 20)}, 500);	
			$('.audio-files').removeClass('closed').addClass('open');
			$(this).addClass('active');
		} else {
			$('.audio-files').removeClass('open').addClass('closed');
			$('div.mejs-pause').find('button').trigger('click');
			$('html, body').animate({ scrollTop: 0 }, 500);
			$(this).removeClass('active');
		}
		
		return false;
		
	});
	
	// CLOSE AUDIO FILES
	
	$('body').on(event_type,'button#close-audio-files', function(e){
	
	$('html, body').animate({ scrollTop: 0 }, 500);
	
	if ( $('.audio-files').hasClass('open') ) {
		$('.audio-files').removeClass('open').addClass('closed');
		$('a#call-2-action-radio').removeClass('active');
			
		$('div.mejs-pause').find('button').trigger('click');
	}

	return false;
		
	});
	
	$('body').on(event_type,'button#user-btn', function(e){
	
		if ( $(this).parent().hasClass('closed') ) {
			$(this).parent().removeClass('closed').addClass('open');
		} else {
			$(this).parent().removeClass('open').addClass('closed');
		}
		
		return false;
		
	});
	
	// 	SIDEBAR MENU BUTTON
	$('body').on(event_type,'button.sb-menu-btn', function(e){
	
		if ( $(this).parent().hasClass('closed') ) {
			$(this).parent().removeClass('closed').addClass('open');
			$('html, body').animate({scrollTop: ($("a#sb-menu-collapse").offset().top - 40)}, 500);	
		} else {
			$(this).parent().removeClass('open').addClass('closed');
		}
		
		return false;
		
	});
	
	$('body').on(event_type,'li.page_item_has_children > a', function(e){
		
		var pihc_parent = $(this).parent();
		
		$('li.page_item_has_children').not(pihc_parent).removeClass('view-children').addClass('hide-children');
	
		if ( $(pihc_parent).hasClass('hide-children') ) {
			$(pihc_parent).removeClass('hide-children').addClass('view-children');
		} else {
			$(pihc_parent).removeClass('view-children').addClass('hide-children');

		}
		
		return false;
		
	});
	
	// 	POP UP LINKS MENU BUTTONS
	
	$('body').on(event_type,'div.links-menu > button.close-btn', function(e){
		
		var parent = $(this).parent();
		
		if ( $(parent).hasClass('open') ) {
			$(parent).removeClass('open').addClass('closing');
			
			$('.closing').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
				$(this).toggleClass('closing closed');	
				$('.tlw-wrapper').removeClass('links-open');
			});
			
		}
		
		return false;
		
	});
	
	
	$('body').on(event_type,'a.dropdown-link', function(e){
		
		var dd_parent = $(this).parent();
		
		$('li.with-children').not(dd_parent).removeClass('open').addClass('closed');
	
		if ( $(dd_parent).hasClass('closed') ) {
			$(dd_parent).removeClass('closed').addClass('open');
		} else {
			$(dd_parent).removeClass('open').addClass('closed');
		}
		
		return false;
		
	});
	
	$('body').on(event_type,'button.service-menu-btn', function(e){
		
		var links_menu = $('div.links-menu');
		
		if ( $(links_menu).hasClass('closed') ) {
		$(links_menu).removeClass('closed').addClass('open');
		$('.tlw-wrapper').addClass('links-open');
		} 
	
		
		return false;
		
	});
	
	
	// 	SIDENAV MENU BUTTONS
	$('body').on(event_type,'button#nav-btn', function(e){
	
		if ( $('.tlw-wrapper').hasClass('nav-closed') ) {
			
			$('.tlw-wrapper').removeClass('nav-closed').addClass('nav-open');
			$('#side-nav').removeClass('nav-closed').addClass('nav-open');
		} 
		
		return false;
		
	});
	
	$('body').on(event_type,'button#close-nav', function(e){
	
		if ( $('.tlw-wrapper').hasClass('nav-open') ) {
			$('.tlw-wrapper').removeClass('nav-open').addClass('nav-closed');
			$('#side-nav').removeClass('nav-open').addClass('nav-closed');
			$('li.with-sub-nav').removeClass('sl-tl-open').addClass('sl-tl-closed');
		} 
		
		return false;
		
	});
	
	//-------------------------------
	
	
	$('body').on('click', "li.with-sub-nav > a", function(){
		var parent = $(this).parent();
		$(parent).siblings().removeClass('sl-tl-open').addClass('sl-tl-closed');
		
		if ($(parent).hasClass('top-level')) {
			$(parent).find('.sl-tl-open').removeClass('sl-tl-open').addClass('sl-tl-closed');
		}
		
		$(parent).toggleClass('sl-tl-open sl-tl-closed');
		
		
	return false;	
	});
	
	 /* FEED SCROLLER 
	Adds new styled scroll bars to media feeds   
   */
   	
	$('.feed-wrap').slimScroll({
        height: '300px'
    });
    
    /* ACCESSABILITY FUNCTIONS 
	   Button actions to control the text size
    */
    
    $('body').on(event_type,'button.access-btn', function(e){
    
    	var txt_size = $(this).attr('data-role');
    	
    	$(this).siblings().removeClass('active');
    	$(this).addClass('active');
    	
    	 $('body').removeClass('txt-md txt-lg txt-sm').addClass(txt_size);
    	 $.cookie('font_size', txt_size, { path: '/' } );  
	     	     			
		return false;
		
	});
	
		$('#feedback-carousel').carousel({
			pause: false,
			interval: 7000
		});
		
			if ($('#enqiry-start-form')) {
			
			$('#enqiry-start-form').show();	
				
			}
			
		var fa_fix = $('#cookie-law-info-bar').next();
		
		if ($(fa_fix).is('i')) {
			
			if ($(fa_fix).next().is('i')) {
			$(fa_fix).next().remove();	
			}
			
			$('#cookie-law-info-bar').next().remove();
			
		}
		
		/* XMAS Pop up Function
	   This function controls the Xmas pop up box
    */
    
    	var xmasBox = function(){

			if ($('#xmas-popup-wrap').length == 1 && $('#xmas-popup-wrap').hasClass('pop-up-inactive')) {
				
				$('#xmas-popup-btn-wrap').removeClass('pop-up-inactive').addClass('pop-up-active');
		
				$('#xmas-popup-wrap').fadeIn('slow', function(){
				
					$('.xmas-popup-inner').removeClass('hidden').addClass('animated slideInUp');
				
				});
			
			}
    
		};

    	//Transition end actions
	    $('.xmas-popup-inner').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			
			if ($(this).hasClass('bounceOutDown')) {
			 $('#xmas-popup-wrap').fadeOut('fast').removeClass('pop-up-active').addClass('pop-up-inactive');	
			 $('#xmas-popup-btn-wrap').removeClass('pop-up-active').addClass('pop-up-inactive');
			 $(this).removeClass('animated bounceOutDown').addClass('hidden');
			}
		});
		
		//Button actions
		
		$('body').on(event_type,'button#xmas-popup-btn-open', function(e){
	    	
	    	xmasBox();    			
			return false;
			
		});
	
	    
	    $('body').on(event_type,'button#close-xmas-popup', function(e){
		    
		   $('.xmas-popup-inner').removeClass('slideInUp').addClass('bounceOutDown');   
	    	      			
			return false;
			
		});


	});
	
	$(window).on("resize", function(e){


	});
	
	$(window).load(function(e){
	
		if ($('a#call-2-action-radio').length == 1) {
			$('#call-2-action-radio').removeAttr('disabled');
			$('i.fa-spinner').hide();
		}
	
	});
	
	$(window).scroll(function(e){
	var scroll = $(window).scrollTop();
	var header_h = $('.header').outerHeight();
	var h = $(window).height();
		if ( scroll > Math.ceil(h/2) ) {
		$('button#back-2-top').removeClass('hidden').addClass('visible fadeIn');	
		}
		
		if ( scroll <= header_h && $('button#back-2-top').hasClass('visible') ) {
		$('button#back-2-top').removeClass('fadeIn').addClass('fadeOut');	
		
			$('button#back-2-top').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
			$(this).removeClass('visible fadeOut').addClass('hidden');	
		
			});
			
		}
	});
	
	
})(window.jQuery);