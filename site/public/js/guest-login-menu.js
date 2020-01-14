$(document).ready(function() {
	
	function login(){

			var i = 0;
		timerId = setInterval(include, 100);

		function include(){
			$(".login-popup").fadeIn(400, 'swing');
			
			$("#preview").css({
				"filter" : "blur(" + i / 6 + "px)"
			});
			i++;
		}
		
		setTimeout(() => { clearInterval(timerId); }, 4000);

	}
	setTimeout(login, 8000);

});