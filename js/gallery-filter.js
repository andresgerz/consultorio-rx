$('.menu-filter ul li').click(function(){
  $('.menu-filter ul li').removeClass('active');
  $(this).addClass('active');
  
  var selector = $(this).attr('data-filter');
  
  $('.gallery-wrapper').isotope({
    filter:selector
  });
  return  false;
});

$(document).ready(function() {
  var popup_btn = $('.popup-btn');
  popup_btn.magnificPopup({
  type : 'image',
  gallery : {
    enabled : true
  }
});
});