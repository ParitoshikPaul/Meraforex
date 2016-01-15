(function($){
	$("#edit-names-fieldset-phno").keypress(function (e) {
		alert('dfjhv');
		//if the letter is not digit then display error and don't type anything
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			//display error message
			$("#errmsg").html("Digits Only").show().fadeOut("slow");
			return false;
		}
	});
	//Sticky Header
	$(window).scroll(function(){
	scroll = $(this).scrollTop();
	if(scroll >= 100){
		$("header").addClass("sticky");
		//$(".logo").stop(true).animate({ width : "80%"},500,"linear");
	}else{
		$("header").removeClass("sticky");
		//$(".logo").stop(true).animate({ width : "100%"},500,"linear");
	}
	});
	
	//Loader class
	jQuery(window).load(function () {
		jQuery(".loader-cont").fadeOut(3000);
	});
	
}(jQuery));


(function($){
	
	$(".payment").click(function(){
		alert("test");
  });
	
	
	}(jQuery));
