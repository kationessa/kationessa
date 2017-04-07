//функция вызова всплывающего окна с видео-блоком
	 $('#video_btn').on('click', function() {
        $('#popup_video').fadeIn();
		$('#popup_video').append('<a id="popup_video_close"></a>');
            $('#popup_video_block').append('<iframe width="580" height="326" src="https://www.youtube.com/embed/wCc2v7izk8w?autoplay=1" frameborder="0" allowfullscreen></iframe>');
            q_width = $('#popup').outerWidth()/-2;
            q_height = $('#popup').outerHeight()/-2;
            $('#popup_video').css({
                'margin-left': q_width,
                'margin-top': q_height
            });
            $('body').append('<div id="fade"></div>');
            $('#fade').css({'filter' : 'alpha(opacity=40)'}).fadeIn();
    });
	
	$('body').on('click', '#fade, #popup_video_close', function() {
        $('#fade , #popup').fadeOut(function() {
			$('#popup_video_block').empty();
            $('#popup_video').fadeOut();
			$('#popup_video_close').remove();
            $('#fade').remove();
        });
    });