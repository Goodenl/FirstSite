$(document).ready(function(){

	$(document).on('click','.user-video',function(){
			$('.user-video-list').toggle(420, 'swing');

			//hide other
			$('.like-list').hide(300);
			$('.history-list').hide(300);
		
	})

	$(document).on('click','.like',function(){
			$('.like-list').toggle(420, 'swing');

			//hide other
			$('.user-video-list').hide(300);
			$('.history-list').hide(300);
	})

	$(document).on('click','.history',function(){
			$('.history-list').toggle(420, 'swing');
			
			//hide other
			$('.user-video-list').hide(300);
			$('.like-list').hide(300);
	})
});