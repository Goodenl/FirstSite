$(document).ready(function(){
	$(window).scroll(function() {


		var st = $(window).scrollTop();
		var filterVal = 'blur(5px)';

		$(".btn-box").css({
			"transform" : "translate(0%, -" + st / 3.5  + "%"
		});

		$("#head-paralax").css({
			"filter" : "blur(" + st / 30 + "px)"
		});
	});
});

