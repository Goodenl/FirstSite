$(document).ready(function() {


	$(document).on('click','.btn-menu',function() { // event
		var switch_on = true;
		
		if ($(".left-main-menu").attr("class") === ("left-main-menu")) { // open button

			$(".left-main-menu").toggleClass("active-lmm");
			$(".left-main-menu").toggleClass("left-main-menu");

			 	$( ".logo-box" ).animate({left:'-16%'}, 600); // logo animation

				$( ".logo-p" ).css({"left":"-8%"});
				$( ".logo-p-revers" ).css({'left':'0%','transform': 'rotate(-180deg)'});
				$( ".logo-text-p" ).css({ "opacity": "100" }).animate({left: '-2%'});
				$( ".logo-text-p-revers" ).css({ "opacity": "100","transition-delay": "0.6s" }).animate({left: '55%'});
			setTimeout("switch_on = true;", 1000);

		}else if( switch_on = true ){ // close button

			$(".active-lmm").toggleClass("left-main-menu");
			$(".active-lmm").toggleClass("active-lmm");

			$( ".logo-box" ).animate({left:'0%'}, 600); // logo animation

				$( ".logo-p" ).css({"left":"0%"});
				$( ".logo-p-revers" ).css({'left':'-12%','transform': 'rotate(0deg)'});
				$( ".logo-text-p" ).css({ "opacity": "0" }).animate({left: '-30%'});
				$( ".logo-text-p-revers" ).css({ "opacity": "0", "transition-delay": "0s" }).animate({left: '12%'});
			setTimeout("switch_on = false;", 1000);
		}
	});

	if($(".left-main-menu").attr("class") === ("left-main-menu")){ // close everywhere

			$(document).on('click','.row',function(){
				$(".active-lmm").toggleClass("left-main-menu");
				$(".active-lmm").toggleClass("active-lmm");
			

				$( ".logo-box" ).animate({left:'0%'}, 600); // logo animation

					$( ".logo-p" ).css({"left":"0%"});
					$( ".logo-p-revers" ).css({'left':'-12%','transform': 'rotate(0deg)'});
					$( ".logo-text-p" ).css({ "opacity": "0" }).animate({left: '-30%'});
					$( ".logo-text-p-revers" ).css({ "opacity": "0", "transition-delay": "0s" }).animate({left: '12%'});
				setTimeout("switch_on = false;", 1000);
			}
	)};
});