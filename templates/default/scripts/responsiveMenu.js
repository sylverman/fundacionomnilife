$(document).ready(function() {
	$("#stacks").click(function() {
		if($("header nav").hasClass("active")){
			$("header nav").removeClass("active");
			$("header #stacks").removeClass("active");
		} else {
			$("header nav").addClass("active");	
			$("header #stacks").addClass("active");	
		}
	});
	$("header nav > ul > li [href='#']").click(function() {
		$(this).parent().find("ul").toggle("fast");
	});
	$("#shareButton").click(function(){
		$("#shareList").toggle("fast");
		if($(this).hasClass("active")){
			$(this).removeClass("active");
		} else {
			$(this).addClass("active");	
		}
	});
});