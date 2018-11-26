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
	
	//$("#stat").change(function() {same("#stat","#stat1");});
	//$("#stat1").change(function() {same("#stat1","#stat");});
     
	 
	 
	 //Q1
	  $("#g2").hide();
	 	$("#q1").change(function() {
		   
		 if ($(this).val() != $("input[name='q_num']").val()) {
		    if ($(this).val() < $("input[name='q_num']").val()) {
			        alert("WRONG: '同住家人的數目' 小於'合資格領取綜援成員數目'@^@    !!!");
		     }else{
			       $("#g2").show();
			}
			
		}
		if ($(this).val() == $("input[name='q_num']").val()) {
			$("#g2").hide();
		}

		
		
	});
	 
	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	// g2a_f
	 $("#g2a_f").hide();
	 	$("#q2").change(function() {
		
		 var b = $("input[name='q1']").val()-$("input[name='q_num']").val()
		
		if ($(this).val() !=b) {

			        alert("(*_*) INPUT WRONG:  注意: 不合資格成員數目=同住家人的數目－合資格領取綜援成員數目   !!!");
		}
		if ($(this).val() ==b) {
			       		$("#g2a_f").show();
		}

		var regex = /^\d+$/;
		var v = $(this).val();
		if (!(regex.test(v))) {
			$(this).val("");
			for (i = 1 ; i <= 5 ; i++) {
				clr(".pc"+i);
				$(".pc"+i).hide();
			}
		} else {
			var x = $(this).val();
			for (i = 1 ; i <= x ; i++) {
				$(".pc"+i).show();
			}
			x = parseInt(x)+1;
			for (i = x ; i <= 5; i++) {
				clr(".pc"+i);
				$(".pc"+i).hide();
			}
		}
		//$("#pc1_2").hide();
	});
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
    //Q4
	$("#g5pre").hide();
	$("#g5ae").hide();
	$("#q4_1").click(function() {
	   if ($(this).is(":checked")) {	
	      	$("#g5pre").show();
			//clr("#g5ae");
	        //$("#g5ae").show();
		  
	   }
	});
	$("#q4_2").click(function() {
	   if ($(this).is(":checked")) {	
	      	$("#g5pre").hide();
	        $("#g5ae").hide();
			clr("#g5ae");
		   
	   }
	});
	
	
	//               g5ae

	 	$("#q4_1a").change(function() {
		$("#g5ae").show();
		var regex = /^\d+$/;
		var g = $(this).val();
		if (!(regex.test(g))) {
			$(this).val("");
			for (i = 1 ; i <= 20 ; i++) {
				clr(".pc"+i);
				$(".pc5_"+i).hide();
			}
		} else {
			var x = $(this).val();
			for (i = 1 ; i <= x ; i++) {
				$(".pc5_"+i).show();
			}
			x = parseInt(x)+1;
			for (i = x ; i <= 20; i++) {
				clr(".pc"+i);
				$(".pc5_"+i).hide();
			}
		}
	});
	
	
	

	 //  g10later
	$(".g10p_1").hide();
	$(".g10p_2").hide();
	
	$("#q10p_1").click(function() {
	   if ($(this).is(":checked")) {	
	       $(".g10p_1").show();
		   $(".g10p_2").hide();
		   $("#q10p_2a").attr("disabled", true).prop("checked", false);
		   $("#q10p_2b").attr("disabled", true).prop("checked", false);
		   $("#q10p_1a").attr("disabled", false);
		   $("#q10p_1b").attr("disabled", false);
	   }
	});
	$("#q10p_2").click(function() {
	   if ($(this).is(":checked")) {	
	       $(".g10p_2").show();
		   $(".g10p_1").hide();
		   $("#q10p_1a").attr("disabled", true).prop("checked", false);
		   $("#q10p_1b").attr("disabled", true).prop("checked", false);
		   $("#q10p_2a").attr("disabled", false);
		   $("#q10p_2b").attr("disabled", false);
	   }
	});
	
	
	
	//低收入人士 &&  失業人士             clr(".pc"+i);
	$("#gpc1").hide();
	$("#gpc2").hide();
	
	$("#q10p_1a").add("#q10p_2a").click(function() {
	  if ($(this).is(":checked")) {
	            clr("#gpc1");
	        	$("#gpc1").show();
				$("#gpc2").hide();
				clr("#gpc2");
		   }
	
		});
	
	$("#q10p_1b").add("#q10p_2b").click(function() {
	  if ($(this).is(":checked")) {
	        	clr("#gpc2");
				$("#gpc2").show();
				$("#gpc1").hide();
				clr("#gpc1");
		   }
	
		});
	
	
	
	
	
	
	
	//Q.11a  q11a_2a
	$("input[name='q11a_1a']").attr("disabled",true);
	$("input[name='q11a_2a_2a']").attr("disabled",true);
	$("#q11a_2a_1").attr("disabled", true);
	$("#q11a_2a_2").attr("disabled", true);
	$("#q11a_1").click(function() {
		    $("input[name='q11a_1a']").attr("disabled",false);
						
		    $("input[name='q11a_2a_2a']").prop("checked", false).attr("disabled",false);
			$("input[name='q11a_2a_2a']").val("");
			$("input[name='q11a_2a_2a']").attr("disabled",true);
			$("#q11a_2a_1").attr("disabled", true).prop("checked", false);
		   $("#q11a_2a_2").attr("disabled", true).prop("checked", false);
	});
	$("#q11a_2").click(function() {
			$("#q11a_2a_1").attr("disabled", false);
		    $("#q11a_2a_2").attr("disabled", false);
			$("input[name='q11a_1a']").prop("checked", false).attr("disabled",false);
			$("input[name='q11a_1a']").val("");
			$("input[name='q11a_1a']").attr("disabled",true);
			$("input[name='q11a_2a_2a']").attr("disabled",false);
	
	});
	
	
	
	
	//Q.11b 
	 $(".unity01").click(function() {
		unichoose($(this).attr("id"), "q11b_9");

	});	
	$("input[name='q11b_1a']").attr("disabled",true);
	$("input[name='q11b_2a']").attr("disabled",true);
	$("input[name='q11b_8a']").attr("disabled",true);
    $("#q11b_1").click(function() {
	   if ($(this).is(":checked")) {
	        $("input[name='q11b_1a']").attr("disabled",false);
		   }
	});
	
	
	
	
		// Q12
		$("#g12").hide();
		$("#g13pre").hide();
		$("#g13").hide();
		$("#g14").hide();
		$("#g15").hide();
		$("#g16").hide();
		$("#g17").hide();
	    $("#g18").hide();
		$("#g18pre").hide();
		
	$("#q11c_1").click(function() {
	   if ($(this).is(":checked")) {	
	       $("#g12").hide();
		   $("#g13pre").show();
		$("#g13").show();
		$("#g14").show();
		$("#g15").show();
		$("#g16").show();
		$("#g17").show();
	    $("#g18").show();
		$("#g18pre").show();

	   }
	});
	$("#q11c_2").add("#q11c_3").click(function() {
	   if ($(this).is(":checked")) {	
	       $("#g12").show();
		   $("#g13pre").hide();
		   $("#g13").hide();
		   $("#g14").hide();
		   $("#g15").hide();
		   $("#g16").hide();
		   $("#g17").hide();
	      $("#g18").hide();

	   }
	});	
		
	//Q13                             g13b   class="g13b_a"--------g13b_f
    $(".g13b").hide();
	$(".g13b_a").hide();
	$(".g13b_b").hide();
	$(".g13b_c").hide();
	$(".g13b_d").hide();
	$(".g13b_e").hide();
	$(".g13b_f").hide();
	 $("#q13a_a_1").add("#q13b_a_1").add("#q13c_a_1").add("#q13d_a_1").add("#q13e_a_1").add("#q13f_a_1").click(function() {
	   if ($(this).is(":checked")) {	
	         $(".g13b").show();
	   }
	});
    $("#q13a_a_1").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_a").show();
	   }
	});
	$("#q13a_a_2").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_a").hide();
	   }
	});
	
	$("#q13b_a_1").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_b").show();
	   }
	});
	$("#q13b_a_2").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_b").hide();
	   }
	});
	
	$("#q13c_a_1").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_c").show();
	   }
	});
	$("#q13c_a_2").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_c").hide();
	   }
	});
    $("#q13d_a_1").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_d").show();
	   }
	});
	$("#q13d_a_2").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_d").hide();
	   }
	});
	
	$("#q13e_a_1").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_e").show();
	   }
	});
		$("#q13e_a_2").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_e").hide();
	   }
	});
	$("#q13f_a_1").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_f").show();
	   }
	});
	$("#q13f_a_2").click(function() {
	   if ($(this).is(":checked")) {	
	          $(".g13b_f").hide();
	   }
	});
	
		
		
    //Q15
	    $(".unity15").click(function() {
        maxchoose($(this).attr("id"), 3 );
	});		
		
		
    //Q24*---25
	$("#g25").hide();
		
	$("#q24_3").click(function() {
	   if ($(this).is(":checked")) {	
	       $("#g25").hide();
	   }
	});
	$("#q24_1").add("#q24_2").add("#q24_4").add("#q24_5").click(function() {
	   if ($(this).is(":checked")) {	
	       $("#g25").show();
	   }
	});	
	
    //Q26-27
		$("#g27").hide();
		
	$("#q26_3").click(function() {
	   if ($(this).is(":checked")) {	
	       $("#g27").hide();
	   }
	});
	$("#q26_1").add("#q26_2").add("#q26_4").add("#q26_5").click(function() {
	   if ($(this).is(":checked")) {	
	       $("#g27").show();
	   }
	});		
		
		
		
		
	//Q35
		 $(".unity35").click(function() {
		unichoose($(this).attr("id"), "q35_1");

	});	
	
	//Q36
		 $(".unity36").click(function() {
		unichoose($(this).attr("id"), "q36_1");

	});	
	
	
	// Q38
		$("#g38").hide();
	
	$("#q37_1").click(function() {
	   if ($(this).is(":checked")) {	
	       $("#g38").show();

	   }
	});
	$("#q37_2").click(function() {
	   if ($(this).is(":checked")) {	
	       $("#g38").hide();

	   }
	});
	
	//$(".pc1").hide();
	
	
	
		//Q39
		 $(".unity39").click(function() {
		unichoose($(this).attr("id"), "q39_1");

	});	
	
	
});



function clr(div) {
	$(div).find("input[type='radio']").each(function() {
		$(this).prop("checked", false);
		var id = $(this).attr("id");
		$("."+id).val("");
		$("."+id).attr("disabled", true);
	});
	$(div).find("input[type='checkbox']").each(function() {
		$(this).prop("checked", false);
		$(this).triggerHandler("click");
	});
	$(div).find("input[type='text']").each(function() {
		$(this).val("");
	});
		

		
		
}



function unichoose(q,id) {
	c = $("#"+q).attr("class");
	if (q == id) {
		$("."+c).not("#"+q).each(function() {
			var a = $(this).attr("id");
			$(this).prop("checked", false);
			$("#"+a+"a").attr("disabled", true);
			$("#"+a+"a").val("");			
		});
	} else {
		$("#"+id).prop("checked", false);
	}
}

function maxchoose(q, m, id1, id2) {
	c = $("#"+q).attr("class");
	if ((q == id1)||(q == id2)) {
		$("."+c).not("#"+q).each(function() {
			var a = $(this).attr("id");
			$(this).prop("checked", false);
			$("#"+a+"a").attr("disabled", true);
			$("#"+a+"a").val("");			
		});
	} else {
		$("#"+id1).prop("checked", false);
		$("#"+id2).prop("checked", false);
		if ($("."+c+":checked").length > m) {
			$("#"+q).prop("checked", false);
			$("#"+q+"a").attr("disabled", true);
			$("#"+q+"a").val("");
			alert ("You cannot choose more than "+m+"                                                 不要超過"+m+"選項(⊙o⊙)哦~~~");
			
		}
	}
}