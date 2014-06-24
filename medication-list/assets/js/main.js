$(document).ready(function(){
	//linked to toggling brand column on/off
	//toggles active state of link
	$(".brandToggle a.toggle-vis").click(function(){
		var brandToggle = $(".brandToggle");
		
		if(brandToggle.hasClass('active')){
			brandToggle.removeClass('active');
		}else{
			brandToggle.addClass('active');
		}
	}); 
	
	//filters to medications with 'as needed'/'prn' instructions
	$(".prnToggle").click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$("tbody tr").show();
			$('.todaybar').css('height', $('.main_table').height() - 27);
		}else{
			$(this).addClass('active');
			$("tbody tr").hide();
			$("tbody tr.prn").show();
			$(".all").addClass('active');
			$(".current").removeClass('active');
			$('.todaybar').css('height', $('.main_table').height() - 27);
		}
	}); 
	
	//show only current medications
	$(".current").click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('.todaybar').css('height', $('.main_table').height() - 27);
		}else{
			$(this).addClass('active');
			$(".all").removeClass('active');
			$("tr.closed").hide(); //hide inactive medications
				//when the list changes height, change the height of the today 
				//marker in the mini timeline
			$('.todaybar').css('height', $('.main_table').height() - 27);
		}
	}); 

	//show all medications
	$(".all").click(function(){
		//if a filter was just run, clear the filter
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('.todaybar').css('height', $('.main_table').height() - 27);
		}else{
			$(this).addClass('active');
			$(".current").removeClass('active');
			$("tr.closed").show(); //show inactive medications
				//when the list changes height, change the height of the today 
				//marker in the mini timeline
			$('.todaybar').css('height', $('.main_table').height() - 27);
		}
	});
});