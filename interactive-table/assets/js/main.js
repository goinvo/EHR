$(document).ready(function(){
	$(".to_cycle").hover(function(){
		if($(this).hasClass('active_to')){
			$(this).removeClass('active_to');
		}else{
			$(this).addClass('active_to');
		}
	});
	/*$('.to_cycle').click(function(){
		window.location.href = './cycle.php';
	});*/
	$(".to_issue").hover(function(){
		if($(this).hasClass('active_to')){
			$(this).removeClass('active_to');
		}else{
			$(this).addClass('active_to');
		}
	});
	
	$(".to_pv").hover(function(){
		if($(this).hasClass('active_to')){
			$(this).removeClass('active_to');
		}else{
			$(this).addClass('active_to');
		}
	});
	/*$('.to_pv').click(function(){
		window.location.href = './version.php';
	});*/
	
	
	/*product toggles*/
	$(".prod_options .show_closed_one").click(function(){
		if($(this).html()=='Show closed'){
			$(this).html('Hide closed');
		}else{
			$(this).html('Show closed');
		}
		$("tr.closed_one").fadeToggle('medium');
	});
	/*version toggles*/
	$("#current_version_one tr.current_active").click(function(){
		$("#version_table_one").show();
		$("#table_slide_one").slideToggle('slow');
		$(this).hide();
	});
	$('#version_table_one tr').click(function(){
		$("#current_version_one tr.current_active").slideToggle('slow').parents().eq(3).find("#table_slide_one").slideToggle(500);
	});
	
});