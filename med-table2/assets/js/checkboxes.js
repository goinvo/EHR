$(document).ready(function () {
	$("#selectAllTypes").click(function () {
		$('.type').attr('checked', this.checked);
	});
	$(".type").click(function(){
		if($(".type").length == $(".type:checked").length) {
			$("#selectAllTypes").attr("checked", "checked");
		} else {
			$("#selectAllTypes").removeAttr("checked");
		}
	});
});








