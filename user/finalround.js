$(document).ready(function(){

	$("#two").css("visibility","hidden");
	$("#three").css("visibility","hidden");
	$("#four").css("visibility","hidden");

	$("#1, #2, #3, #4").click(function(){
		$("#one").css("visibility","visible");
		$("#two").css("visibility","visible");
		$("#three").css("visibility","visible");
		$("#four").css("visibility","visible");
	})

	$("#1").click(function(){	
		$("#two").slideUp(1000);
		$("#three").slideUp(1000);
		$("#four").slideUp(1000);
		$("#one").delay(1000).slideDown(1000);
	})

	$("#2").click(function(){
		$("#one").slideUp(1000);
		$("#three").slideUp(1000);
		$("#four").slideUp(1000);
		$("#two").delay(1000).slideDown(1000);
	})

	$("#3").click(function(){
		$("#two").slideUp(1000);
		$("#one").slideUp(1000);
		$("#four").slideUp(1000);
		$("#three").delay(1000).slideDown(1000);
	})

	$("#4").click(function(){
		$("#two").slideUp(1000);
		$("#three").slideUp(1000);
		$("#one").slideUp(1000);
		$("#four").delay(1000).slideDown(1000);
	})

})