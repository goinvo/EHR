$(document).ready(function(){
	var bodyClass = $("body").attr("class");

	//display or indicate current chapter in small table of contents 
		//along side or up top, depending on width of screen
	$("nav.main ul li").each(function() {
		if (this.className!=null && this.className!=undefined) {
			if (bodyClass == this.className) {
				$(this).addClass("active");
				//$(this).next().addClass("active");
			} else {
				$(this).removeClass("active");
			}
		}
	});
	$("nav.footer ul li").each(function() {
		if (this.className!=null && this.className!=undefined) {
			if (bodyClass == this.className) {
				$(this).addClass("active");
				//$(this).next().addClass("active");
			} else {
				$(this).removeClass("active");
			}
		}
	});

	//slideopen, hide preview on quicktips, scenarios
	$(".quicktip").click(function(){
		$(this).find('.tip').toggleClass('close');
		$(this).find('.preview').toggleClass('hide');
		$(this).find('.qt-content').slideToggle('medium');
		//$(this).find('.preview .elipsis').toggleClass('hide');
	});

	
});