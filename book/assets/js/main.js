$(document).ready(function(){
	//quicktips
	$(".quicktip .tip").click(function(){
		$(this).parent().find('.qt-content').slideToggle('medium');
	}); 
});