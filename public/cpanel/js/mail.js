$(document).ready(function(){

	$('.label-clone').each(function(){
		var id = $(this).find(".checkbox-dib").attr('id');
		$(this).append('<label></label>');
		$(this).find("label").attr("for" , id);
	});
	$(".sidebar .mini-bar ul li.collapse-btn").click(function(){
		$(".sidebar").toggleClass("open");
	});


});