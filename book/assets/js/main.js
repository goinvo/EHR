$(document).ready(function(){
	var bodyClass = $("body").attr("class");

	$("nav.main ul li a").each(function() {
		if (this.className!=null && this.className!=undefined) {
			if (bodyClass == this.className) {
				$(this).addClass("active");
				$(this).next().addClass("active");
			}
		}
	});
	
	//quicktips
	$(".quicktip .tip").click(function(){
		$(this).parent().find('.qt-content').slideToggle('medium');
	}); 
});