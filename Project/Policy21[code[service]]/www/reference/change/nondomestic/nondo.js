$(document).ready(function() {

	$('#nondoform').bind("keyup keypress", function(e) {
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
//click again the radio will disappear---------------------------------
/*
	$("input[type='radio']").click(function() {
		if ($(this).attr("click") != "1") {
			$(this).attr("click", "1");
		} else {
			$(this).attr("click", "");
			var id = $(this).attr("id");
			var ida = id+"a";
			$(this).prop("checked", false);
			$("#"+ida).val("");
			$("#"+ida).attr("disabled",true);
		}
	});
	*/
//------------------------------------------------------------------------------
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
 
/* 
	$("#tel").keyup(function() {
		if (!(checktel($(this).val()))) {
			alert ("電話錯誤!");
			$(this).val("");
		}
	});
 */
	$( "#datepicker" ).datepicker();
 
 	
	
//-------------------------------Tony for  test---------------------------------------------
	$(".cg8_2").hide();
	$("#q8_2").click(function() {
		if ($(this).is(":checked")) {
			$(".cg8_2").show();
		} else {
			$(".cg8_2").hide();
		}
	});
	
	$("#q8_1").add("#q8_3").click(function() {
		if ($(this).is(":checked")) {
			$(".cg8_2").hide();
			$("#q8_2_1").val("");
			$("#q8_2_2").val("");
			$("#q8_2_3").val("");
			$("#q8_2_4").val("");
			$("#q8_2_5").val("");
			$("#q8_2_6").val("");
			$("#q8_2_7").val("");
			$("#q8_2_8").val("");
			$("#q8_2_9").val("");
		} else {
			$(".cg8_2").show();
		}
	});
	
	$(".cg9_2").hide();
	$("#q9_2").click(function() {
		if ($(this).is(":checked")) {
			$(".cg9_2").show();
		} else {
			$(".cg9_2").hide();
		}
	});
	
	$("#q9_1").add("#q9_3").click(function() {
		if ($(this).is(":checked")) {
			$(".cg9_2").hide();
			$("#q9_2_1").val("");
			$("#q9_2_2").val("");
			$("#q9_2_3").val("");
			$("#q9_2_4").val("");
			$("#q9_2_5").val("");
			$("#q9_2_6").val("");
			$("#q9_2_7").val("");
			$("#q9_2_8").val("");
			$("#q9_2_9").val("");
		} else {
			$(".cg9_2").show();
		}
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
//---------------------------------------Tony---------------------------------------
	
	
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

