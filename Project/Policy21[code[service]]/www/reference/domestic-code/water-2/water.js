$(document).ready(function() {

	$('#waterform').bind("keyup keypress", function(e) {
		var code = e.keyCode || e.which; 
		if ((code  == 13)||(code  == 10)) {               
			e.preventDefault();
			return false;
		}
	});
	
	$("input[type='radio']").click(function() {
		if ($(this).is(":checked")) {
			var id = $(this).attr("id");
			var cl = $(this).attr("class");
			$("."+id).attr("disabled", false);
			$("."+cl).not(this).each(function() {
				var id = $(this).attr("id");
				$("."+id).attr("disabled", true);
				$("."+id).val("");
			});
		}
	});

	$("input[type='checkbox']").click(function() {
		var id = $(this).attr("id");
		if ($(this).is(":checked")) {
			$("."+id).attr("disabled", false);
		} else {
			$("."+id).attr("disabled", true);
			$("."+id).val("");
		}
	});
	
	$("#stat").change(function() {same("#stat","#stat1");});
	$("#stat1").change(function() {same("#stat1","#stat");});
 
 
	$("#tel").keyup(function() {
		if (!(checktel($(this).val()))) {
			alert ("電話錯誤!");
			$(this).val("");
		}
	});
 
	$( "#datepicker" ).datepicker();
 
 	
	
	
	
	
	
	
	
	$("input[type='radio']:checked").trigger("click");
 
	$("input[type='checkbox']:checked").each(function() {
		$(this).triggerHandler("click");
	});




});	

function clr(div) {
	$("#"+div).find("input[type='radio']").each(function() {
		$(this).prop("checked", false);
		var id = $(this).attr("id");
		$("."+id).val("");
		$("."+id).attr("disabled", true);
	});
	$("#"+div).find("input[type='checkbox']").each(function() {
		$(this).prop("checked", false);
		$(this).triggerHandler("click");
	});
	$("#"+div).find("input[type='txt']").each(function() {
		$(this).val("");
	});
}



function same (a,b) {
	$(b).val($(a).val());
}
