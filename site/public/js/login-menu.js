$(document).ready( function() {
  $('.profile-box>a').click( function(){
    $('.profile-box>a').removeClass('active');

    if($(this).next('.dropMenu').css("display") == "none") {  // close button
      $('.dropMenu').hide('normal');
      $(this).next('.dropMenu').toggle('normal');
    }else{                                                    // open button
    	$('.dropMenu').hide('normal');
    	return false;
    }
    if($(this).next('.dropMenu').css("display") == "block") {
      $(document).on('click', '.row', function(){
          $('.dropMenu').hide('normal');
        }
    )}
  });
});