$(document).ready(function(){
	//to eventually open med
	//click a row to highlight
	$("tbody tr").click(function(){
		$("tbody tr").each(function(){
			$(this).removeClass('active_to');
		});
		
		if($(this).hasClass('active_to')){
			$(this).removeClass('active_to');
		}else{
			$(this).addClass('active_to');
		}
	});
});
