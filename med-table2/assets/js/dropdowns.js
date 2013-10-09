$(document).ready(function(){
	
	$('.active_dropdown_area').click(function(){
		var s = $(this).parent().hasClass("down_dropped");
		$('.down_dropped').removeClass("down_dropped");
		if(!s){
			$(this).parent().addClass("down_dropped");
		}else{
			$(this).parent().removeClass("down_dropped");
		}
	});
	
	$('.dropdown_opt input').click(function(){
		$('.down_dropped').removeClass("down_dropped");
		alert($(this).val());
	});
	
	$(".expanding_dropdown_area, .active_dropdown_area").click(function(e){
		e.stopPropagation(); 
	});
	
	$(document).click(function(){
		$('.down_dropped').removeClass("down_dropped");
	});

});