$(document).ready(function($) {
	/*Roster Page*/
	rosterToggle();
		
	/*Global*/
	characterBanners();

	/*Mobile*/
	mobileMenu();
	mobileClasses();

	/*Grand magic games*/
	//if($('body').hasClass('grand-magic-games')){

	//}
	
});//end of doc ready

$(window).load(function() {
	/*Homepage*/
	if($('body').hasClass('home')){
		homeSlider();
	}
});//end of window load

/*
* @mobileMenu()
* Notes: Global, header events for tablet/mobile
* Last Updated: 3/9/2014
*/
function mobileMenu(){
	$('body').on('touchstart, click','.mobile-navicon', function(){
		$(this).siblings('.main-menu').slideToggle();
	});
}
/*
* @mobileClasses()
* Notes: Global, Classes needed to turn sidebar widgets toggable
* Last Updated: 3/9/2014
*/
function mobileClasses(){
	$('.avatar-block').addClass('widget-content');
	$('.swa-wrap').addClass('widget-content');
	$('body').on('click','.widget h3', function(){
		$(this).siblings('.widget-content').slideToggle();
	});
}

/*
* @rosterToggle()
* Notes: Roster, toggles tables
* Last Updated: 3/9/2014
*/	
function rosterToggle(){
	$('body').on('touchstart, click','.roster-link', function(){
		var rosterTable = $(this).siblings('.roster-table');
		if( rosterTable.is(':hidden') ) { 
			rosterTable.show('blind', {
			  duration: 1000,
			  easing: 'easeOutBounce', 
			});
		}else{ 
			rosterTable.hide('blind', {
			  duration: 1000,
			  easing: 'easeOutBounce', 
			});
		}
	});
}	

/*
* @randOrd()
* Notes: Global, math for characters left/right of main content area
* Last Updated: 3/9/2014
*/
function randOrd() {
    return 0.5 - Math.random(); 
}

/*
* @characterBanners()
* Notes: Global, events for characters left/right of main content area 
* Last Updated: 3/9/2014
*/
function characterBanners(){	
	var bannerClasses = [ 'banner-07', 'banner-06', 'banner-01', 'banner-04', 'banner-05', 'banner-03', 'banner-02' ],
		leftClasses = [ 'left-01', 'left-02', 'left-03', 'left-04', 'left-05', 'left-06', 'left-07', 'left-08', 'left-09','left-10', 'left-11', 'left-12', 'left-13', 'left-14' ],
		rightClasses = [ 'right-01', 'right-02', 'right-03', 'right-04', 'right-05', 'right-06', 'right-07', 'right-08', 'right-09', 'right-10', 'right-11', 'right-12', 'right-13', 'right-14', 'right-15', 'right-16', 'right-17' ];
		
	bannerClasses.sort( randOrd );
	leftClasses.sort( randOrd );
	rightClasses.sort( randOrd );
	
  $('.banner-rotate').each(function(i, val) {
	   $(this).addClass(bannerClasses[i]);
  });
  
  $('.left-banner').each(function(i, val) {
	  $(this).addClass(leftClasses[i]);
  });
  
  $('.right-banner').each(function(i, val) {
	  $(this).addClass(rightClasses[i]);
  });
}

/*
* @homeSlider()
* Notes: Homepage, flexslider 
* Last Updated: 3/9/2014
*/
function homeSlider(){
	$('.flexslider').flexslider({
		animation: "slide"
	});
}	  

/*
* Notes: Written by Sam Deering, for drag/touch support
* http://www.jquery4u.com/mobile/jquery-add-dragtouch-support-ipad/#.UEAbXsHiY0U
*/
//iPAD Support
$.fn.addTouch = function(){
  this.each(function(i,el){
    $(el).bind('touchstart touchmove touchend touchcancel',function(){
      //we pass the original event object because the jQuery event
      //object is normalized to w3c specs and does not provide the TouchList
      handleTouch(event);
    });
  });
 
  var handleTouch = function(event)
  {
    var touches = event.changedTouches,
            first = touches[0],
            type = '';
 
    switch(event.type)
    {
      case 'touchstart':
        type = 'mousedown';
        break;
 
      case 'touchmove':
        type = 'mousemove';
        event.preventDefault();
        break;
 
      case 'touchend':
        type = 'mouseup';
        break;
 
      default:
        return;
    }
 
    var simulatedEvent = document.createEvent('MouseEvent');
    simulatedEvent.initMouseEvent(type, true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, 0/*left*/, null);
    first.target.dispatchEvent(simulatedEvent);
  };
};
