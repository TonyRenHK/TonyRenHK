﻿$(document).ready(function() {

	$('#waterform').bind("keyup keypress", function(e) {
		var code = e.keyCode || e.which; 
		if ((code  == 13)||(code  == 10)) {               
			e.preventDefault();
			return false;
		}
	});
/*	
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
*/
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
 
 	
	
//Tony for  test
	$(".cg10_2").hide();
	$("#q10_2").click(function() {
		if ($(this).is(":checked")) {
			$(".cg10_2").show();
			$("input[name='q10_2']").prop("checked", false);
			$("input[name='q10_a']").val("");
			$("input[name='q10_a']").attr("disabled",true);
			
		} else {
			$(".cg10_2").hide();

		}
	});
	$("#q10_3").click(function() {
	 		$("input[name='q10_a']").val("");
			$("input[name='q10_a']").attr("disabled",true);
    });
	
	
	$("#q10_1").add("#q10_3").click(function() {
	
		if ($(this).is(":checked")) {
			$(".cg10_2").hide();
		} else {
			$(".cg10_2").show();
		}
	});
	
	
	
	
	$(".onedigit").attr("maxlength",1);
	
	
	$("input[type='radio']:checked").trigger("click");
 
	$("input[type='checkbox']:checked").each(function() {
		$(this).triggerHandler("click");
	});

	
	
	
	$("#q1_1b_6").click(function() {
		if ($(this).is(":checked")) {
		    $("input[name='q1_1b_1']").prop("checked", false).attr("disabled",true);
	        $("input[name='q1_1b_2']").prop("checked", false).attr("disabled",true);
	        $("input[name='q1_1b_3']").prop("checked", false).attr("disabled",true);
	        $("input[name='q1_1b_4']").prop("checked", false).attr("disabled",true);
	        $("input[name='q1_1b_5']").prop("checked", false).attr("disabled",true);
			$("input[name='q1_1b_5a']").val("");
			$("input[name='q1_1b_5a']").attr("disabled",true);

		} else {
			$("input[name='q1_1b_1']").prop("checked", false).attr("disabled",false);
			$("input[name='q1_1b_2']").prop("checked", false).attr("disabled",false);
			$("input[name='q1_1b_3']").prop("checked", false).attr("disabled",false);
			$("input[name='q1_1b_4']").prop("checked", false).attr("disabled",false);
			$("input[name='q1_1b_5']").prop("checked", false).attr("disabled",false);
			$("input[name='q1_1b_5a']").attr("disabled",false);
		}
		});
	
	
	
	$("input[name='q10_a']").attr("disabled",true);
    $("#q10_1").click(function() {
	    $("input[name='q10_a']").attr("disabled",false);
	
	});
	
	//question 12
	$("input[name='q12_4a']").attr("disabled",true);
	
	$("#q12_4").click(function() {
		    $("input[name='q12_4a']").attr("disabled",false);
	});
		
	$("#q12_1").add("#q12_2").add("#q12_3").click(function() {
			$("input[name='q12_4a']").val("");
			$("input[name='q12_4a']").attr("disabled",true);
	
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
