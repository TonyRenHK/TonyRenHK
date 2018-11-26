$(document).ready(function() {


	
    $("input[type='checkbox']").click(function() {
		var a = $(this).attr("id");
		if ($(this).is(":checked")) {
			$("#"+a+"a").attr("disabled", false);
		}	else {
			$("#"+a+"a").attr("disabled", true);
			$("#"+a+"a").val("");
		}
	});
 
	$("input[type='radio']").click(function() {
		var a = $(this).attr("id");
		var b = $(this).attr("name");
		$("#"+a+"a").attr("disabled", false);
		$("input[name='"+b+"']").not(this).each(function() {
			var c = $(this).attr("id");
			$("#"+c+"a").attr("disabled", true);
			$("#"+c+"a").val("");
		});
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
	
	
   $("#sub5").click(function() {  		
       return valids();
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
function valids() {

	 var bo = false;
	 var quest = new Array();
		quest[0] =  "";
		quest[1] =  "";
		quest[2] =  "";
		quest[3] =  "";
		quest[4] =  "";
		quest[5] =  "";
		quest[6] =  "";
		quest[7] =  "";
		quest[8] =  "";
		quest[9] =  "";
        quest[10] =  "";
		quest[11] =  "";
		quest[12] =  "";
		quest[13] =  "";
		quest[14] =  "";
		quest[15] =  "";
		quest[16] =  "";
		quest[17] =  "";
		quest[18] =  "";
		quest[19] =  "";
        quest[20] =  "";
        quest[21] =  "";
		quest[22] =  "";
		quest[23] =  "";
		quest[24] =  "";
		quest[25] =  "";
		quest[26] =  "";
		quest[27] =  "";
		
	          		if ($("#g1").find("input[type='radio']:checked").length == 0) {
						quest[0]= "1a,";
						bo = true;
					}
					if ($("#g1").find("input[type='checkbox']:checked").length == 0) {
						quest[1]= "1b,";
						bo = true;
					}

					if ($("#g2a").find("input[type='radio']:checked").length == 0) {
						quest[2]= "2a,";
						bo = true;
					}
					if ($("#g2b").find("input[type='radio']:checked").length == 0) {
						quest[3]= "2b," ;
						bo = true;
					}
					if ($("#g3a").find("input[type='radio']:checked").length == 0) {
						quest[4]= "3(a),";
						bo = true;
					}
					if ($("#g3b").find("input[type='radio']:checked").length == 0) {
						quest[5]= "3(b),";
						bo = true;
					}	          		
					if ($("#g3c").find("input[type='radio']:checked").length == 0) {
						quest[6]= "3(c),";
						bo = true;
					}
					if ($("#g3d").find("input[type='radio']:checked").length == 0) {
						quest[7]= "3(d),";
						bo = true;
						}	
					if ($("#q4_1").val() == "") {
						quest[8]= "4(1),";
						bo = true;
						}
					if ($("#q4_2").val() == "") {
						quest[9]= "4(2),";
						bo = true;
						}
					if ($("#q4_3").val() == "") {
						quest[10]= "4(3),";
						bo = true;
					}
					if ($("#q4_4").val() == "") {
						quest[11]= "4(4),";
						bo = true;
						}
					if ($("#g5").find("input[type='radio']:checked").length == 0) {
						quest[12]= "5,";
						bo = true;
						}
					if ($("#g6a").find("input[type='radio']:checked").length == 0) {
						quest[13]= "6(a),";
						bo = true;
						}
					if ($("#g6b").find("input[type='radio']:checked").length == 0) {
						quest[14]= "6(b),";
						bo = true;
						}
					
					if ($("#g6c").find("input[type='radio']:checked").length == 0) {
						quest[15]= "6(c),";
						bo = true;
					}
					if ($("#g6d").find("input[type='radio']:checked").length == 0) {
						quest[16]= "6(d),";
						bo = true;
					}
					if ($("#g6e").find("input[type='radio']:checked").length == 0) {
						quest[17]= "6(e)";
						bo = true;
					}
					if ($("#g6f").find("input[type='radio']:checked").length == 0) {
						quest[18]= "6(f),";
						bo = true;
					}
					
					if ($("#g7a").find("input[type='radio']:checked").length == 0) {
						quest[19]= "7(a),";
						bo = true;
					}
					if ($("#g7b").find("input[type='radio']:checked").length == 0) {
						quest[20]= "7(b),";
						bo = true;
						}
						
					if ($("#g7c").find("input[type='radio']:checked").length == 0) {
						quest[21]= "7(c),";
						bo = true;
					}
					if ($("#g7d").find("input[type='radio']:checked").length == 0) {
						quest[22]= "7(d),";
						bo = true;
					}
					if ($("#g7e").find("input[type='radio']:checked").length == 0) {
						quest[23]= "7(e),";
						bo = true;
					}
					if ($("#g7f").find("input[type='radio']:checked").length == 0) {
						quest[24]= "7(f),";
						bo = true;
					}
					if ($("#g8").find("input[type='radio']:checked").length == 0) {
						quest[25]= "8,";
						bo = true;
					}
					if ($("#g9").find("input[type='radio']:checked").length == 0) {
						quest[26]= "9,";
						bo = true;
					}


					
					if ($("#stat1").val() == "") {
						quest[27]= "status(提交狀態),";
						bo = true;
					}
					
			if(bo){
		var r=confirm("=*= 還有第 "+quest[0]+quest[1]+quest[2]+quest[3]+quest[4]+quest[5]+quest[6]+quest[7]+quest[8]+quest[9]+quest[10]+quest[11]+quest[12]+quest[13]+quest[14]+quest[15]+quest[16]+quest[17]+quest[18]+quest[19]+quest[20]+quest[21]+quest[22]+quest[23]+quest[24]+quest[25]+quest[26]+quest[27]+"沒有回答(⊙o⊙)喔~~是否提交?");
        if (r==true) {
			return true;
		} else {
			return false;
		}
      }else{
	       var r=confirm("是否提交?");
		   if (r==true) {
			return true;
		} else {
			return false;
		}

	  }
}
