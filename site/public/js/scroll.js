$(document).ready( function() {
var startFrom = 9;
	$(window).scroll( function(){

		if($(window).scrollTop() == $(document).height() - $(window).height())
		{
			$.get( "app/video.php", {"startFrom" : startFrom} )
			.done(function(data) {
				$("#main-video").append(data);
				
				startFrom += 9;
			},'html');
		}
	});
});
