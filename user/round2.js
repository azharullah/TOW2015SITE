$(document).ready(function(){

	$("#two").css("visibility","hidden");
	$("#three").css("visibility","hidden");

	$("#1").click(function(){	
		$("#two").slideUp(1000);
		$("#three").slideUp(1000);
		$("#one").delay(1000).slideDown(1000);
	})

	$("#2").click(function(){
		$("#one").slideUp(1000,function(){
			$("#two").css("visibility","visible");
			$("#three").css("visibility","visible");
		});
		$("#three").slideUp(1000);
		$("#two").delay(1000).slideDown(1000);
	})

	$("#3").click(function(){
		$("#one").slideUp(1000,function(){
			$("#two").css("visibility","visible");
			$("#three").css("visibility","visible");
		});
		$("#two").slideUp(1000);
		$("#three").delay(1000).slideDown(1000);
	})

})