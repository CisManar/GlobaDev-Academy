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
	slidesToShow: 3,
	slidesToScroll: 3,
	dots: true,
  infinite: true,
  arrows: true,
  nextArrow: '<i class="fa fa-angle-right"></i>',
  prevArrow: '<i class="fa fa-angle-left"></i>',
  autoplay:true
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

 
