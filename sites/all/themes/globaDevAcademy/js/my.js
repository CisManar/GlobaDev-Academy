$('#staff').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	dots: true,
  infinite: true,
  arrows: true,
  nextArrow: '<i class="fa fa-angle-right"></i>',
  prevArrow: '<i class="fa fa-angle-left"></i>',
  autoplay:true,

  });

  $('#events').slick({
	infinite: true,
	slidesToShow: 2,
	slidesToScroll: 1,
	dots: true,
  infinite: true,
  arrows: true,
  nextArrow: '<i class="fa fa-angle-right"></i>',
  prevArrow: '<i class="fa fa-angle-left"></i>',
  autoplay:false
  });

  $('#home-slider1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true,
    infinite: true,
    arrows: true,
    nextArrow: '<i class="fa fa-angle-right"></i>',
    prevArrow: '<i class="fa fa-angle-left"></i>',
    autoplay:true
  });

  $('#testiMembers').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: true,
    infinite: true,
    arrows: true,
    nextArrow: '<i class="fa fa-angle-right"></i>',
    prevArrow: '<i class="fa fa-angle-left"></i>',
    autoplay:true,
 autoplaySpeed: 6000,
    speed: 800,
  adaptiveHeight: true

  
  });
/***** styling course section */

var addToMargin = $( ".addToMargin" );
for(i=0 ; i< $(addToMargin).length; i++){
  if(i<6){
    $(addToMargin).eq(i).addClass('allowMargin');
  }
}

/** for image gellary **/

$(function() {
   
    $('.photo-gallery ul li').click(function() {
      var src = $(this).data('src');
      var $gallery = $(this).closest('.photo-gallery');
      $gallery.find('.current-photo img').attr('src', src);
    });
   
    $('.photo-gallery').each(function() {
      $(this).find('li')[0].click();
    });
   
  });
  
//////


var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
/*** end */

/** change main menu default class */

$(function(){
  var li  = document.createElement('li');
  $("nav ul").removeClass("menu").addClass("nav-menu");
  $("nav ul li").addClass("menu-item-has-children");
});

/** */