var t_r_w;
$(document).ready(function(){
	$('.to_med').click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		}else{
			$(this).addClass('active');
		}
	});
});