$(document).ready(function() {

	$('#smhsform').bind("keyup keypress", function(e) {
		var code = e.keyCode || e.which; 
		if ((code  == 13)||(code  == 10)) {               
			e.preventDefault();
			return false;
		}
	});

	

	
	$("input[type='radio']").click(function() {
		if ($(this).is(":checked")) {
			var tclass = $(this).closest("table").attr('class');
			if (tclass == "bor") {
				$(this).closest("td").addClass("ansed");
			} else {
				$(this).closest("td").addClass("ansed");
				$(this).closest("td").next().addClass("ansed");
				$(this).closest("td").next().next().addClass("ansed");
			}
		
			var id = $(this).attr("id");
			var cl = $(this).attr("class");
			$("."+id).attr("disabled", false);
			$("."+cl).not(this).each(function() {
				var id = $(this).attr("id");
				$("."+id).attr("disabled", true);
				$("."+id).val("");
				var tclass = $(this).closest("table").attr('class');
				if (tclass == "bor") {
					$(this).closest("td").removeClass("ansed");
				} else {
					$(this).closest("td").removeClass("ansed");
					$(this).closest("td").next().removeClass("ansed");
					$(this).closest("td").next().next().removeClass("ansed");
				}
				
				
			});
		}
	});

	$("input[type='checkbox']").click(function() {
		var id = $(this).attr("id");
		if ($(this).is(":checked")) {
			$("."+id).attr("disabled", false);
			var tclass = $(this).closest("table").attr('class');
			if (tclass == "bor") {
				$(this).closest("td").addClass("ansed");
			} else {
				$(this).closest("td").addClass("ansed");
				$(this).closest("td").next().addClass("ansed");
				$(this).closest("td").next().next().addClass("ansed");
			}
		} else {
			$("."+id).attr("disabled", true);
			$("."+id).val("");
				var tclass = $(this).closest("table").attr('class');
				if (tclass == "bor") {
					$(this).closest("td").removeClass("ansed");
				} else {
					$(this).closest("td").removeClass("ansed");
					$(this).closest("td").next().removeClass("ansed");
					$(this).closest("td").next().next().removeClass("ansed");
				}
		}
	});
	
//	var ww = $(window).width()/2;
	var ww = $(window).width();
	$(".tw").css("width", ww-20);
//	alert($(".tw").css("width"));
	$( window ).resize(function() {
//		var h = $(window).height();
//		var w = $(window).width()/2;
		var w = $(window).width();
		$(".tw").css("width", w-20);
	});
	
	
//	$(window).scroll(function(){
		//$("body").css('left','-'+$(window).scrollLeft()+'px');
		//$("body").css('top','-'+$(window).scrollTop()+'px');
		//$("body").css({'left': $(this).scrollLeft() + 15 });
//	});
	
	
/**********************************slider******************************/	
	
	$(function() {
		$( "#sqa1_1" ).slider({
			range: "min",
			value: $("#qa1_1a").val(),
			min: 0,
			max: 10,
			slide: function( event, ui ) {
				$("#qa1_1a").val(ui.value);
			}
		});
		$("#qa1_1a").val( "" + $( "#sqa1_1" ).slider("value"));
		$("#sqa1_1").css("background", "rgb(119,0,0)");
		$("#sqa1_1 .ui-slider-range").css("background", "rgb(0,109,42)");
		$("#sqa1_1").css("border", "2px solid #385D8A");
		$("#sqa1_1").find('a').css("background-color", "rgb(127,127,127)");
		$("#sqa1_1").find('a').css("border-radius", "12px");
		$("#sqa1_1").find('a').css("border", "2px solid #385D8A");
		$("#sqa1_1").find('a').css("background-image", "none");
	});
  

	$(function() {
		$( "#sqa2_1" ).slider({
			range: "min",
			value: $("#qa2_1a").val(),
			min: 0,
			max: 10,
			slide: function( event, ui ) {
				$("#qa2_1a").val(ui.value);
			}
		});
		$("#qa2_1a").val( "" + $( "#sqa2_1" ).slider("value"));
		$("#sqa2_1").css("background", "rgb(119,0,0)");
		$("#sqa2_1 .ui-slider-range").css("background", "rgb(0,109,42)");
		$("#sqa2_1").css("border", "2px solid #385D8A");
		$("#sqa2_1").find('a').css("background-color", "rgb(127,127,127)");
		$("#sqa2_1").find('a').css("border-radius", "12px");
		$("#sqa2_1").find('a').css("border", "2px solid #385D8A");
		$("#sqa2_1").find('a').css("background-image", "none");
	});
  


	$(function() {
		$( "#sqa3_1" ).slider({
			range: "min",
			value: $("#qa3_1a").val(),
			min: 0,
			max: 10,
			slide: function( event, ui ) {
				$("#qa3_1a").val(ui.value);
			}
		});
		$("#qa3_1a").val( "" + $( "#sqa3_1" ).slider("value"));
		$("#sqa3_1").css("background", "rgb(119,0,0)");
		$("#sqa3_1 .ui-slider-range").css("background", "rgb(0,109,42)");
		$("#sqa3_1").css("border", "2px solid #385D8A");
		$("#sqa3_1").find('a').css("background-color", "rgb(127,127,127)");
		$("#sqa3_1").find('a').css("border-radius", "12px");
		$("#sqa3_1").find('a').css("border", "2px solid #385D8A");
		$("#sqa3_1").find('a').css("background-image", "none");
	});
  

	
	$(function() {
		$( "#sqa4_1" ).slider({
			range: "min",
			value: $("#qa4_1a").val(),
			min: 0,
			max: 10,
			slide: function( event, ui ) {
				$("#qa4_1a").val(ui.value);
			}
		});
		$("#qa4_1a").val( "" + $( "#sqa4_1" ).slider("value"));
		$("#sqa4_1").css("background", "rgb(119,0,0)");
		$("#sqa4_1 .ui-slider-range").css("background", "rgb(0,109,42)");
		$("#sqa4_1").css("border", "2px solid #385D8A");
		$("#sqa4_1").find('a').css("background-color", "rgb(127,127,127)");
		$("#sqa4_1").find('a').css("border-radius", "12px");
		$("#sqa4_1").find('a').css("border", "2px solid #385D8A");
		$("#sqa4_1").find('a').css("background-image", "none");
	});
  




































/**********************************skip******************************/


	$("#qx1").change(function() {
		if ($(this).val() == "NSP") {
			alert("請訪問戶內其他合資格受訪對象, 於1965-1996期間出生 (如有)");
		}
	});

	$("#qx2_2").click(function() {
		alert("請訪問戶內其他合資格受訪對象(有親密關係經驗)");
	});

	$("#qx3_2").click(function() {
		alert("請訪問戶內其他合資格受訪對象(持有香港身份證)");
	});


	$("input[name='qb9']").click(function() {
		if ($(this).val() < $("input[name='qb8']:checked").val()) {
			alert("在港生活時間不能少於居於現址的時間");
			$(this).prop("checked", false);
		}
	});

	$("input[name='qst2']").click(function() {
		if ($(this).val() > $("input[name='qst1']:checked").val()) {
			alert("新的性伴侶不能多於與你發生性行為的人的數目");
			$(this).prop("checked", false);
		}
	});


	$("#qa5_1").click(function () {
		$("#qa6a").val("");
		$("#qa6b").val("");
		$("#qa6c").val("");
		$("#dqa6").hide();
		$("#qa7_1").prop("checked", false);
		$("#qa7_2").prop("checked", false);
		$("#dqa7").hide();
		$("#qa8a").val("");
		$("#qa8b").val("");
		$("#dqa8").hide();
	});
	
	$("#qa5_2").add("#qa5_3").click(function () {
		$("#dqa6").show();
		$("#dqa7").show();
		if (!($("#qa7_2").is(":checked"))) {
			$("#dqa8").show();
		}
	});
	

	
	

	$("#qa7_1").click(function () {
		$("#dqa8").show();
	});
	
	$("#qa7_2").click(function () {
		$("#qa8a").val("");
		$("#qa8b").val("");
		$("#dqa8").hide();
	});

	$("#qb1_1").click(function() {
		$(".female").hide();
		$(".male").show();
	});
	
	$("#qb1_2").click(function() {
		$(".female").show();
		$(".male").hide();
	});

	
	$("#qb3_1").click(function() {
		$(".nhk").hide();
		$(".hk").show();
	});
	
	$("#qb3_2").add("#qb3_3").click(function() {
		$(".nhk").show();
		$(".hk").hide();
	});	
	
/*	
	$("#qsc12a_1").click(function() {
		$("#dqsc12").show();
	});	
	
	$("#qsc12a_2").click(function() {
		clr("#dqsc12");
		$("#dqsc12").hide();
	});		
*/
	$("#qg4_0").click(function() {
		clr("#dqg4a");
		$("#dqg4a").hide();
	});
	
	$("#qg4_1").click(function() {
		$("#dqg4a").show();
	});

	$("#qst1_0").click(function() {
		clr(".stsex");
		clr("#dqst2");
		$(".stsex").hide();
		$("#dqst2").hide();
	});
	
	$("#qst1_1").add("#qst1_2").add("#qst1_3").add("#qst1_4").click(function() {
		$(".stsex").show();
		$("#dqst2").show();
	});	
	
	$("#qst2_0").click(function() {
		clr(".stsex");
		$(".stsex").hide();
	});	
	
	$("#qst2_1").add("#qst2_2").add("#qst2_3").add("#qst2_4").click(function() {
		$(".stsex").show();
	});	
	
	$("#qst5_1").click(function() {
		clr("#dqst7");
		$("#dqst7").hide();
		$("#dqst6").show();
	});		
	
	$("#qst5_2").click(function() {
		clr("#dqst6");
		$("#dqst6").hide();
		$("#dqst7").show();
	});	
	
	$("#qst8_1").click(function() {
		clr("#dqst10");
		$("#dqst10").hide();
		$("#dqst9").show();
	});		
	
	$("#qst8_2").add("#qst8_3").add("#qst8_4").add("#qst8_5").click(function() {
		clr("#dqst9");
		$("#dqst9").hide();
		$("#dqst10").show();
	});	


	$("#qsa1_1").click(function() {
		$(".outhk").show();
	});		

	$("#qsa1_2").click(function() {
		clr(".outhk");
		$(".outhk").hide();
	});	

	$("#qsa3_1").add("#qsa3_2").click(function() {
		$(".outhksex").show();
	});		

	$("#qsa3_3").click(function() {
		clr(".outhksex");
		$(".outhksex").hide();
	});	

	$("#dqmh5b").hide();
	$("#dqmh5c").hide();
	$("#qmh5a_0").click(function() {
		$("#dqmh5b").show();
		clr("#dqmh5c");
		$("#dqmh5c").hide();
	});

	$("#qmh5a_1").click(function() {
		$("#dqmh5c").show();
		clr("#dqmh5b");
		$("#dqmh5b").hide();
	});


	$("#dqpoc2").hide();
	$("#qpoc1_1").click(function() {
		$("#dqpoc2").show();
		clr("#dqmh5c");
		$("#dqmh5c").hide();
	});
	$("#qpoc1_2").add("#qpoc1_3").add("#qpoc1_4").click(function() {
		clr("#dqpoc2");
		$("#dqpoc2").hide();
	});

	$("#qs4_0").click(function() {
		$("#qst2_0").prop("checked", true);
		$("#qst2_0").trigger("click");
	});
	
	$("#qs4_1").click(function() {
		$("#qst2_1").prop("checked", true);
		$("#qst2_1").trigger("click");
	});

	$(".qse1").add(".qse2").add(".qse3").add(".qse4").add(".qse5").add(".qse6").add(".qse7").add(".qse8").add(".qse9").add(".qse10").add(".qse11").add(".qse12").add(".qse13").add(".qse14").add(".qse15").add(".qse16").add(".qse17").click(function() {
		var cl = $(this).attr("class");
		var id = $(this).attr("id");
		var code = id.substr(id.length - 1);
		var nam = id.substring(0,id.length - 1);
		if ((code != "5")&&(code != "6")) {
			$("#"+nam+"5").prop("checked", false);
			$("#"+nam+"6").prop("checked", false);
			recol("#"+nam+"5");
			recol("#"+nam+"6");
		} else {
			$("."+cl).not(this).prop("checked", false);
			recol("#"+nam+"1");
			recol("#"+nam+"2");
			recol("#"+nam+"3");
			recol("#"+nam+"4");
			if (code == "5") {
				recol("#"+nam+"6");
			} else {
				recol("#"+nam+"5");
			}
		}

	});

//tony---------------------
	$(".dqb6_1").hide();
	$("#qb6_1").click(function() {
		if ($(this).is(":checked")) {
			$(".dqb6_1").show();
			$("input[name='qb6_1a']").prop("checked", false);
			
		} else {
			$(".dqb6_1").hide();

		}
	});
	
	
	$("#qb6_2").add("#qb6_3").add("#qb6_4").add("#qb6_5").click(function() {
	
		if ($(this).is(":checked")) {
			$(".dqb6_1").hide();
		} else {
			$(".dqb6_1").show();
		}
	});



$(".dqb6_2").hide();
	$("#qb6_2").click(function() {
		if ($(this).is(":checked")) {
			$(".dqb6_2").show();
			$("input[name='qb6_2a']").prop("checked", false);
			
		} else {
			$(".dqb6_2").hide();

		}
	});
	
	
	$("#qb6_1").add("#qb6_3").add("#qb6_4").add("#qb6_5").click(function() {
	
		if ($(this).is(":checked")) {
			$(".dqb6_2").hide();
		} else {
			$(".dqb6_2").show();
		}
	});
//--------------------


	
/*		
	
	$("#qmh5_1").click(function() {
		$("#dqmh5_1").show();
	});
	$("#qmh5_2").add("#qmh5_3").add("#qmh5_4").add("#qmh5_5").add("#qmh5_6").click(function() {
		$("input[name='qmh5_1']").prop("checked", false);
		$("#qmh5_1_5a").val("");
		$("#dqmh5_1").hide();
	});
	

	
	$("#dqsc6_2").hide();
	$("#dqsc7_2").hide();
	
	$("#qsc6_1").click(function() {
		$("#qsc6_2_1").prop("checked", false);
		$("#qsc6_2_2").prop("checked", false);
		$("#qsc6_2_3").prop("checked", false);
		$("#qsc6_2_4").prop("checked", false);
		$("#qsc6_2_5").prop("checked", false);
		$("#qsc6_2_6").prop("checked", false);
		$("#qsc6_2_7").prop("checked", false);
		$("#qsc6_2_8").prop("checked", false);
		$("#qsc6_2_9").prop("checked", false);
		$("#qsc6_2_9a").val("");
		$("#qsc6_2_9a").attr("disabled", true);
		$("#dqsc6_2").hide();
	});
	
	$("#qsc6_2").click(function() {
		$("#dqsc6_2").show();
	});
	
	$("#qsc7_1").click(function() {
		$("#qsc7_2_1").prop("checked", false);
		$("#qsc7_2_2").prop("checked", false);
		$("#qsc7_2_3").prop("checked", false);
		$("#qsc7_2_4").prop("checked", false);
		$("#qsc7_2_5").prop("checked", false);
		$("#qsc7_2_6").prop("checked", false);
		$("#qsc7_2_7").prop("checked", false);
		$("#qsc7_2_8").prop("checked", false);
		$("#qsc7_2_9").prop("checked", false);
		$("#qsc7_2_9a").val("");
		$("#qsc7_2_9a").attr("disabled", true);
		$("#dqsc7_2").hide();
	});
	
	$("#qsc7_2").click(function() {
		$("#dqsc7_2").show();
	});	
*/	
	$("#dqs1a").hide();
	$("#qs1_1").add("#qs1_4").click(function() {
		$("input[name='qs1a']").prop("checked", false);
		$("#dqs1a").hide();
	});		
	
	$("#qs1_2").add("#qs1_3").click(function() {
		$("#dqs1a").show();
	});		
	
	$("#dqs5").hide();
	$("#dqs5a").hide();
	$("#dqs6").hide();
	$("#dqs7").hide();
	
	$("#qs4_0").click(function() {
		$("input[name='qs5']").prop("checked", false);
		$("#dqs5").hide();
		$("input[name='qs5a']").prop("checked", false);
		$("#dqs5a").hide();
		$("input[name='qs6']").prop("checked", false);
		$("#dqs6").hide();
		$("input[name='qs7']").prop("checked", false);
		$("#dqs7").hide();
//		$("input[name='qs8']").prop("checked", false);
//		$("#dqs8").hide();
		
		$(".sex").hide();
		$("input[name='qc1_1']").prop("checked", false);
		$("input[name='qc1_2']").prop("checked", false);
		$("input[name='qc2']").prop("checked", false);
		$("input[name='qc3']").prop("checked", false);
		$("input[name='qc4']").prop("checked", false);
		$("input[name='qc5']").prop("checked", false);
		$("input[name='qc6']").prop("checked", false);
		$("input[name='qc7']").prop("checked", false);
		$("input[name='qc8']").prop("checked", false);
		$("#qc1_1_13a").val("");
		$("#qc1_2_13a").val("");

		
	});		
	
	$("#qs4_1").click(function() {
		$("#dqs5").show();
		$("#dqs5a").show();
		$("input[name='qs6']").prop("checked", false);
		$("#dqs6").hide();
		$("input[name='qs7']").prop("checked", false);
		$("#dqs7").hide();
		$(".sex").show();
//		$("#dqs8").show();
	});			
	
	$("#qs4_2").add("#qs4_3").add("#qs4_4").add("#qs4_5").click(function() {
		$("input[name='qs5']").prop("checked", false);
		$("#dqs5").hide();
		$("input[name='qs5a']").prop("checked", false);
		$("#dqs5a").hide();
		$("#dqs7").show();
//		$("#dqs7").show();
		$(".sex").show();
//		$("#dqs8").show();
	});		
	
	$("#qs5a_1").add("#qs6_1").click(function() {
		$("#dqc1_1").show();
		$("#dqc1_2").hide();
	});	
	
	$("#qs5a_2").add("#qs6_2").click(function() {
		$("#dqc1_1").hide();
		$("#dqc1_2").show();
	});	
	
	$("#qs6_0").click(function() {
		$("input[name='qs7']").prop("checked", false);
		$("#dqs7").hide();
	});	
	
	$("#qs6_1").add("#qs6_2").click(function() {
		$("#dqs7").show();
	});		

	$("#qfs2").keyup(function() {
		var intRegex = /^\d+$/;
		if (intRegex.test($(this).val())) {
			if ((parseInt($(this).val()) < 0)||(parseInt($(this).val()) > 49)) {
				$(this).val("");
				alert ("範圍必須是 0 - 49.");
			}
		} else {
			if ($(this).val() != "") {
				$(this).val("");
				alert ("必須是整數");
			}
		}
	});

	$("#qb10").keyup(function() {
		var intRegex = /^\d+$/;
		if (!(intRegex.test($(this).val()))) {
			if ($(this).val() != "") {
				$(this).val("");
				alert ("必須是整數");
			}
		}
	});



	$("#dqd1_2a").hide();
	$("#qd1_2").click(function() {
		$("#dqd1_2a").show();
	});
	$("#qd1_1").add("#qd1_3").add("#qd1_4").add("#qd1_5").add("#qd1_6").click(function() {
		$("#qd1_2a_1").prop("checked", false);
		$("#qd1_2a_2").prop("checked", false);
		$("#qd1_2a_3").prop("checked", false);
		$("#dqd1_2a").hide();
	});



	$("#dqd8").hide();
	$("#dqd9").hide();
	$("#dqd10").hide();
	$("#dqd11").hide();
	$("#dqd12").hide();


	$("#qd3a_2").click(function() {
		if ($(this).is(":checked")) {
			$("#dqd10").show();
			$("#qd3a_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		} else {
			$(".qd10").prop("checked", false);
			$("#dqd10").hide();
		}
	});
	$("#qd3b_2").click(function() {
		if ($(this).is(":checked")) {
			$("#dqd9").show();
			$("#qd3b_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		} else {
			$(".qd9").prop("checked", false);
			$("#dqd9").hide();
		}
	});
	$("#qd3c_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3c_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3d_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3d_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
			$("#dqd8").show();
		} else {
			$(".qd8").prop("checked", false);
			$("#dqd8").hide();
		}
	});
	$("#qd3e_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3e_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
			$("#dqd11").show();
		} else {
			$(".qd11").prop("checked", false);
			$("#dqd11").hide();
		}
	});
	$("#qd3f_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3f_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
			$("#dqd12").show();
		} else {
			$(".qd12").prop("checked", false);
			$("#dqd12").hide();
		}
	});
	$("#qd3g_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3g_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3h_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3h_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3i_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3i_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3j_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3j_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3k_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3k_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});

	$("#qd3l_2").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3l_1").prop("checked", false);
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});

	$("#qd3aa").change(function() {
		if ($(this).val() != "0") {
			$("#qd3a_1").prop("checked", false);
			$("#qd3a_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3ba").change(function() {
		if ($(this).val() != "0") {
			$("#qd3b_1").prop("checked", false);
			$("#qd3b_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3ca").change(function() {
		if ($(this).val() != "0") {
			$("#qd3c_1").prop("checked", false);
			$("#qd3c_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3da").change(function() {
		if ($(this).val() != "0") {
			$("#qd3d_1").prop("checked", false);
			$("#qd3d_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3ea").change(function() {
		if ($(this).val() != "0") {
			$("#qd3e_1").prop("checked", false);
			$("#qd3e_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3fa").change(function() {
		if ($(this).val() != "0") {
			$("#qd3f_1").prop("checked", false);
			$("#qd3f_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3ga").change(function() {
		if ($(this).val() != "0") {
			$("#qd3g_1").prop("checked", false);
			$("#qd3g_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3ha").change(function() {
		if ($(this).val() != "0") {
			$("#qd3h_1").prop("checked", false);
			$("#qd3h_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3ia").change(function() {
		if ($(this).val() != "0") {
			$("#qd3i_1").prop("checked", false);
			$("#qd3i_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3ja").change(function() {
		if ($(this).val() != "0") {
			$("#qd3j_1").prop("checked", false);
			$("#qd3j_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3ka").change(function() {
		if ($(this).val() != "0") {
			$("#qd3k_1").prop("checked", false);
			$("#qd3k_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	$("#qd3la").change(function() {
		if ($(this).val() != "0") {
			$("#qd3l_1").prop("checked", false);
			$("#qd3l_1").closest("td").removeClass("ansed");
			$("#qd3m").prop("checked", false);
			$("#qd3m").closest("td").removeClass("ansed");
		}
	});
	

	$("#qd3a_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3a_2").prop("checked", false);
			$("#qd3aa").val("0");
			$(".qd10").prop("checked", false);
			$("#dqd10").hide();
		}
	});
	$("#qd3b_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3b_2").prop("checked", false);
			$("#qd3ba").val("0");
			$(".qd9").prop("checked", false);
			$("#dqd9").hide();
		}
	});
	$("#qd3c_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3c_2").prop("checked", false);
			$("#qd3ca").val("0");
		}
	});
	$("#qd3d_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3d_2").prop("checked", false);
			$("#qd3da").val("0");
			$(".qd8").prop("checked", false);
			$("#dqd8").hide();
		}
	});
	$("#qd3e_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3e_2").prop("checked", false);
			$("#qd3ea").val("0");
			$(".qd11").prop("checked", false);
			$("#dqd11").hide();
		}
	});
	$("#qd3f_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3f_2").prop("checked", false);
			$("#qd3fa").val("0");
			$(".qd12").prop("checked", false);
			$("#dqd12").hide();
		}
	});
	$("#qd3g_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3g_2").prop("checked", false);
			$("#qd3ga").val("0");
		}
	});
	$("#qd3h_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3h_2").prop("checked", false);
			$("#qd3ha").val("0");
		}
	});
	$("#qd3i_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3i_2").prop("checked", false);
			$("#qd3ia").val("0");
		}
	});
	$("#qd3j_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3j_2").prop("checked", false);
			$("#qd3ja").val("0");
		}
	});
	$("#qd3k_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3k_2").prop("checked", false);
			$("#qd3ka").val("0");
		}
	});
	$("#qd3l_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qd3l_2").prop("checked", false);
			$("#qd3la").val("0");
		}
	});

	
	$("#qd3_1").click(function() {
		$("#dqd3_1").show();
	});	
	$("#qd3_2").click(function() {
		clr("#dqd3_1");
		$("#dqd3_1").hide();
	});

	$("#qd3_2").add("#qd3m").click(function() {
		if ($(this).is(":checked")) {
		
			$(".qd3a").prop("checked", false);
			$(".qd3b").prop("checked", false);
			$(".qd3c").prop("checked", false);
			$(".qd3d").prop("checked", false);
			$(".qd3e").prop("checked", false);
			$(".qd3f").prop("checked", false);
			$(".qd3g").prop("checked", false);
			$(".qd3h").prop("checked", false);
			$(".qd3i").prop("checked", false);
			$(".qd3j").prop("checked", false);
			$(".qd3k").prop("checked", false);
			$(".qd3l").prop("checked", false);

			
			$("#qd3aa").val("0");
			$("#qd3ba").val("0");
			$("#qd3ca").val("0");
			$("#qd3da").val("0");
			$("#qd3ea").val("0");
			$("#qd3fa").val("0");
			$("#qd3ga").val("0");
			$("#qd3ha").val("0");
			$("#qd3ia").val("0");
			$("#qd3ja").val("0");
			$("#qd3ka").val("0");
			$("#qd3la").val("0");


			$(".qd3a").closest("td").removeClass("ansed");
			$(".qd3b").closest("td").removeClass("ansed");
			$(".qd3c").closest("td").removeClass("ansed");
			$(".qd3d").closest("td").removeClass("ansed");
			$(".qd3e").closest("td").removeClass("ansed");
			$(".qd3f").closest("td").removeClass("ansed");
			$(".qd3g").closest("td").removeClass("ansed");
			$(".qd3h").closest("td").removeClass("ansed");
			$(".qd3i").closest("td").removeClass("ansed");
			$(".qd3j").closest("td").removeClass("ansed");
			$(".qd3k").closest("td").removeClass("ansed");
			$(".qd3l").closest("td").removeClass("ansed");
			
			$("#qd3_12a").val("");
			$("#qd3_12a").attr("disabled", true);
			
			clr("#dqd4");
			$("#dqd4").hide();
			
		} else {
			$("#dqd4").show();
			$("#qd3_12a").attr("disabled", false);
		}
	});

	
	$("#dqd4_2a").hide();
	$("#qd4_2").click(function() {
		if ($(this).is(":checked")) {
			$("#dqd4_2a").show();
		} else {
			$("#qd4_2a_1").prop("checked", false);
			$("#qd4_2a_2").prop("checked", false);
			$("#qd4_2a_3").prop("checked", false);
			$("#dqd4_2a").hide();
		}
		
	});
	
	$("#dqd6").hide();
	$("#dqd7").hide();
	$("#qd5_1").click(function() {
		$("input[name='qd7']").prop("checked",false);
		$("#qd7_5a").val("");
		$("#qd7_5a").attr("disabled", true);
		$("#dqd7").hide();
		$("#dqd6").show();
	});
	$("#qd5_2").add("#qd5_3").click(function() {
		$("input[name='qd6']").prop("checked",false);
		$("#qd6_6a").val("");
		$("#qd6_6a").attr("disabled", true);
		$("#dqd6").hide();
		$("#dqd7").show();
	});
	
	
	$("#qd8_1").add("#qd8_2").add("#qd8_3").add("#qd8_4").add("#qd8_5").click(function() {
		$("#qd8_6").prop("checked", false);
	});
	$("#qd8_6").click(function() {
		$("#qd8_1").prop("checked", false);
		$("#qd8_2").prop("checked", false);
		$("#qd8_3").prop("checked", false);
		$("#qd8_4").prop("checked", false);
		$("#qd8_5").prop("checked", false);
	});
	$("#qd9_1").add("#qd9_2").add("#qd9_3").add("#qd9_4").add("#qd9_5").click(function() {
		$("#qd9_6").prop("checked", false);
	});
	$("#qd9_6").click(function() {
		$("#qd9_1").prop("checked", false);
		$("#qd9_2").prop("checked", false);
		$("#qd9_3").prop("checked", false);
		$("#qd9_4").prop("checked", false);
		$("#qd9_5").prop("checked", false);
	});
	$("#qd10_1").add("#qd10_2").add("#qd10_3").add("#qd10_4").add("#qd10_5").click(function() {
		$("#qd10_6").prop("checked", false);
	});
	$("#qd10_6").click(function() {
		$("#qd10_1").prop("checked", false);
		$("#qd10_2").prop("checked", false);
		$("#qd10_3").prop("checked", false);
		$("#qd10_4").prop("checked", false);
		$("#qd10_5").prop("checked", false);
	});
	$("#qd11_1").add("#qd11_2").add("#qd11_3").add("#qd11_4").add("#qd11_5").click(function() {
		$("#qd11_6").prop("checked", false);
	});
	$("#qd11_6").click(function() {
		$("#qd11_1").prop("checked", false);
		$("#qd11_2").prop("checked", false);
		$("#qd11_3").prop("checked", false);
		$("#qd11_4").prop("checked", false);
		$("#qd11_5").prop("checked", false);
	});
	$("#qd12_1").add("#qd12_2").add("#qd12_3").add("#qd12_4").add("#qd12_5").click(function() {
		$("#qd12_6").prop("checked", false);
	});
	$("#qd12_6").click(function() {
		$("#qd12_1").prop("checked", false);
		$("#qd12_2").prop("checked", false);
		$("#qd12_3").prop("checked", false);
		$("#qd12_4").prop("checked", false);
		$("#qd12_5").prop("checked", false);
	});	
	
	$("#dqhb2").hide();
	$("#qhb1").keyup(function() {
		var intRegex = /^\d+$/;
		if (intRegex.test($(this).val())) {
			if ((parseInt($(this).val()) < 0)||(parseInt($(this).val()) > 30)) {
				$(this).val("");
				alert ("範圍必須是 0 - 30.");
			}
		} else {
			if ($(this).val() != "") {
				$(this).val("");
				alert ("必須是整數");
			}
		}
		//alert ($(this).val());
		if (($(this).val() == "0")||($(this).val() == "")) {
			$("#dqhb2").val("");
			$("#dqhb2").hide();
		} else {
			$("#dqhb2").show();
		}
	});

	$("#dqhb4").hide();
	$("#qhb3").keyup(function() {
		var intRegex = /^\d+$/;
		if (intRegex.test($(this).val())) {
			if ((parseInt($(this).val()) < 0)||(parseInt($(this).val()) > 30)) {
				$(this).val("");
				alert ("範圍必須是 0 - 30.");
			}
		} else {
			if ($(this).val() != "") {
				$(this).val("");
				alert ("必須是整數");
			}
		}
		//alert ($(this).val());
		if (($(this).val() == "0")||($(this).val() == "")) {
			$("#dqhb4").val("");
			$("#dqhb4").hide();
		} else {
			$("#dqhb4").show();
		}
	});
	
	$("#qhb13a_0").click(function() {
		$("#qhb13a_1").prop("checked", false);
		$("#qhb13a_2").prop("checked", false);
		$("#qhb13a_3").prop("checked", false);
		$("#qhb13a_1").closest("td").removeClass("ansed");
		$("#qhb13a_2").closest("td").removeClass("ansed");
		$("#qhb13a_3").closest("td").removeClass("ansed");
	});

	$("#qhb13a_1").add("#qhb13a_2").add("#qhb13a_3").click(function() {
		$("#qhb13a_0").prop("checked", false);
		$("#qhb13a_0").closest("td").removeClass("ansed");
	});

	$("#qhb13b_0").click(function() {
		$("#qhb13b_1").prop("checked", false);
		$("#qhb13b_2").prop("checked", false);
		$("#qhb13b_3").prop("checked", false);
		$("#qhb13b_1").closest("td").removeClass("ansed");
		$("#qhb13b_2").closest("td").removeClass("ansed");
		$("#qhb13b_3").closest("td").removeClass("ansed");
	});

	$("#qhb13b_1").add("#qhb13b_2").add("#qhb13b_3").click(function() {
		$("#qhb13b_0").prop("checked", false);
		$("#qhb13b_0").closest("td").removeClass("ansed");
	});

	$("#qhb13c_0").click(function() {
		$("#qhb13c_1").prop("checked", false);
		$("#qhb13c_2").prop("checked", false);
		$("#qhb13c_3").prop("checked", false);
		$("#qhb13c_1").closest("td").removeClass("ansed");
		$("#qhb13c_2").closest("td").removeClass("ansed");
		$("#qhb13c_3").closest("td").removeClass("ansed");
	});

	$("#qhb13c_1").add("#qhb13c_2").add("#qhb13c_3").click(function() {
		$("#qhb13c_0").prop("checked", false);
		$("#qhb13c_0").closest("td").removeClass("ansed");
	});

	$("#qhb13d_0").click(function() {
		$("#qhb13d_1").prop("checked", false);
		$("#qhb13d_2").prop("checked", false);
		$("#qhb13d_3").prop("checked", false);
		$("#qhb13d_1").closest("td").removeClass("ansed");
		$("#qhb13d_2").closest("td").removeClass("ansed");
		$("#qhb13d_3").closest("td").removeClass("ansed");
	});

	$("#qhb13d_1").add("#qhb13d_2").add("#qhb13d_3").click(function() {
		$("#qhb13d_0").prop("checked", false);
		$("#qhb13d_0").closest("td").removeClass("ansed");
	});

	$("#qhb13e_0").click(function() {
		$("#qhb13e_1").prop("checked", false);
		$("#qhb13e_2").prop("checked", false);
		$("#qhb13e_3").prop("checked", false);
		$("#qhb13e_1").closest("td").removeClass("ansed");
		$("#qhb13e_2").closest("td").removeClass("ansed");
		$("#qhb13e_3").closest("td").removeClass("ansed");
	});

	$("#qhb13e_1").add("#qhb13e_2").add("#qhb13e_3").click(function() {
		$("#qhb13e_0").prop("checked", false);
		$("#qhb13e_0").closest("td").removeClass("ansed");
	});

	$("#qhb13f_0").click(function() {
		$("#qhb13f_1").prop("checked", false);
		$("#qhb13f_2").prop("checked", false);
		$("#qhb13f_3").prop("checked", false);
		$("#qhb13f_1").closest("td").removeClass("ansed");
		$("#qhb13f_2").closest("td").removeClass("ansed");
		$("#qhb13f_3").closest("td").removeClass("ansed");
	});

	$("#qhb13f_1").add("#qhb13f_2").add("#qhb13f_3").click(function() {
		$("#qhb13f_0").prop("checked", false);
		$("#qhb13f_0").closest("td").removeClass("ansed");
	});	
	
	$("#qhb13g_0").click(function() {
		$("#qhb13g_1").prop("checked", false);
		$("#qhb13g_2").prop("checked", false);
		$("#qhb13g_3").prop("checked", false);
		$("#qhb13g_1").closest("td").removeClass("ansed");
		$("#qhb13g_2").closest("td").removeClass("ansed");
		$("#qhb13g_3").closest("td").removeClass("ansed");
	});

	$("#qhb13g_1").add("#qhb13g_2").add("#qhb13g_3").click(function() {
		$("#qhb13g_0").prop("checked", false);
		$("#qhb13g_0").closest("td").removeClass("ansed");
	});	
	
	$("#qhb13h_0").click(function() {
		$("#qhb13h_1").prop("checked", false);
		$("#qhb13h_2").prop("checked", false);
		$("#qhb13h_3").prop("checked", false);
		$("#qhb13h_1").closest("td").removeClass("ansed");
		$("#qhb13h_2").closest("td").removeClass("ansed");
		$("#qhb13h_3").closest("td").removeClass("ansed");
	});

	$("#qhb13h_1").add("#qhb13h_2").add("#qhb13h_3").click(function() {
		$("#qhb13h_0").prop("checked", false);
		$("#qhb13h_0").closest("td").removeClass("ansed");
	});	
	
	$("#qhb13i_0").click(function() {
		$("#qhb13i_1").prop("checked", false);
		$("#qhb13i_2").prop("checked", false);
		$("#qhb13i_3").prop("checked", false);
		$("#qhb13i_1").closest("td").removeClass("ansed");
		$("#qhb13i_2").closest("td").removeClass("ansed");
		$("#qhb13i_3").closest("td").removeClass("ansed");
	});

	$("#qhb13i_1").add("#qhb13i_2").add("#qhb13i_3").click(function() {
		$("#qhb13i_0").prop("checked", false);
		$("#qhb13i_0").closest("td").removeClass("ansed");
	});	
	
	$("#qhb13j_0").click(function() {
		$("#qhb13j_1").prop("checked", false);
		$("#qhb13j_2").prop("checked", false);
		$("#qhb13j_3").prop("checked", false);
		$("#qhb13j_1").closest("td").removeClass("ansed");
		$("#qhb13j_2").closest("td").removeClass("ansed");
		$("#qhb13j_3").closest("td").removeClass("ansed");
	});

	$("#qhb13j_1").add("#qhb13j_2").add("#qhb13j_3").click(function() {
		$("#qhb13j_0").prop("checked", false);
		$("#qhb13j_0").closest("td").removeClass("ansed");
	});	
	
	$("#qhb13k_0").click(function() {
		$("#qhb13k_1").prop("checked", false);
		$("#qhb13k_2").prop("checked", false);
		$("#qhb13k_3").prop("checked", false);
		$("#qhb13k_1").closest("td").removeClass("ansed");
		$("#qhb13k_2").closest("td").removeClass("ansed");
		$("#qhb13k_3").closest("td").removeClass("ansed");
	});

	$("#qhb13k_1").add("#qhb13k_2").add("#qhb13k_3").click(function() {
		$("#qhb13k_0").prop("checked", false);
		$("#qhb13k_0").closest("td").removeClass("ansed");
	});	
	
	
	

	
	$("#qc6_1").add("#qc6_4").click(function() {
		$("input[name='qc7']").prop("checked", false);
		$("#dqc7").hide();
	});		
	
	$("#qc6_2").add("#qc6_3").click(function() {
		$("#dqc7").show();
	});		
	
	
	$("#qfs1_2").add("#qfs1_3").click(function() {
		$("#qfs2").val("");
		$("input[name='qfs3']").prop("checked", false);
		$("input[name='qfs4']").prop("checked", false);
		$("input[name='qfs5']").prop("checked", false);
		$("#dqfs2").hide();
		$("#dqfs3").hide();
		$("#dqfs4").hide();
		$("#dqfs5").hide();
	});		
	
	$("#qfs1_1").click(function() {
		$("#dqfs2").show();
		$("#dqfs3").show();
		$("#dqfs4").show();
		$("#dqfs5").show();
	});	






	$("#qb2_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qb2_2").prop("checked", false);
			$("#qb2_3").prop("checked", false);
			$("#qb2_4").prop("checked", false);
			$("#qb2_5").prop("checked", false);
			$("#qb2_6").prop("checked", false);
			$("#qb2_7").prop("checked", false);
			$("#qb2_8").prop("checked", false);
			$("#qb2_8a").val();
			$("#qb2_8a").attr("disabled", true);
			recol("#qb2_2");
			recol("#qb2_3");
			recol("#qb2_4");
			recol("#qb2_5");
			recol("#qb2_6");
			recol("#qb2_7");
			recol("#qb2_8");
		}
	});	

	$("#qb2_2").add("#qb2_3").add("#qb2_4").add("#qb2_5").add("#qb2_6").add("#qb2_7").add("#qb2_8").click(function() {
		if ($(this).is(":checked")) {
			$("#qb2_1").prop("checked", false);
			recol("#qb2_1");
		}
	});	
	
	
	$("#dqb3a").hide();
	$("#qb3_1").click(function() {
		$("#qb11").val("");
		$("input[name='qb3a']").prop("checked", false);
		$("input[name='qb9']").prop("checked", false);
		$("#dqb3a").hide();
		$("#dqb9").hide();
		$("#dqb11").hide();
	});		
	
	$("#qb3_2").add("#qb3_3").click(function() {
		$("#dqb3a").show();
		$("#dqb9").show();
		$("#dqb11").show();
	});		


	
	
	
	$("#dqb3_1a").hide();
	$("#qb3_1").click(function() {
		$("#dqb3_1a").show();
	});
	$("#qb3_2").add("#qb3_3").add("#qb3_4").click(function() {
		$("#qb3_1a_1").prop("checked", false);
		$("#qb3_1a_2").prop("checked", false);
		recol("#qb3_1a_1");
		recol("#qb3_1a_2");
		recol("#qb3_1a_3");
		$("#dqb3_1a").hide();
	});

	$("#dqb3b").hide();

	$("#qb3_1a_1").click(function() {
		$("#dqb3b").show();
	});
	
	$("#qb3_1a_2").click(function() {
		clr("#dqb3b");
		recol("#qb3b_1");
		recol("#qb3b_2");
		$("#dqb3b").hide();
	});
	
	$("#dqb5a").hide();
	$("#qb5_0").click(function() {
		$("#dqb5a").show();
	});		
	$("#qb5_1").add("#qb5_2").add("#qb5_3").add("#qb5_99").click(function() {
		clr("#dqb5a");
		$("#dqb5a").hide();
	});	




	
	$("#qb7_1").click(function() {
		$("#qb7a_1a").val("");
		$("#qb7a_2a").val("");
		$("#qb7a_3a").val("");
		$("#qb7a_4a").val("");
		$("#qb7a_5a").val("");
		$("#qb7a_6a").val("");
		$("#qb7a_6c").val("");
		$("#dqb7a").hide();
	});		
	
	$("#qb7_2").click(function() {
		$("#dqb7a").show();
	});	

	$("#qb7_2a").add("#qb7a_1a").add("#qb7a_2a").add("#qb7a_3a").add("#qb7a_4a").add("#qb7a_5a").add("#qb7a_6a").keyup(function() {
			var intRegex = /^\d+$/;
		if (!(intRegex.test($(this).val()))) {
			$(this).val("");
			alert("請赤數字");
		}
	});

	
	
	$("#qb12_3").add("#qb12_4").click(function() {
		$("#qb13_9a").val("");
		$("input[name='qb13']").prop("checked", false);
		$("#dqb13").hide();
	});		
	
	$("#qb12_1").add("#qb12_2").add("#qb12_5").add("#qb12_6").add("#qb12_77").click(function() {
		$("#dqb13").show();
	});			
	
	$("#dqb12_4a").hide();
	$("#qb12_4").click(function() {
		$("#dqb12_4a").show();
	});
	$("#qb12_1").add("#qb12_2").add("#qb12_3").add("#qb12_5").add("#qb12_6").add("#qb12_77").click(function() {
		$("#qb12_4a_1").prop("checked", false);
		$("#qb12_4a_2").prop("checked", false);
		$("#qb12_4a_3").prop("checked", false);
		recol("#qb12_4a_1");
		recol("#qb12_4a_2");
		recol("#qb12_4a_3");
		$("#dqb12_4a").hide();
	});
	
	
	
	
	
	
	
	
	
	
	
/*	
	$("#qmh1_0").click(function() {
		$("#qmh2_5a").val("");
		$("#qmh5_6a").val("");
		$("#qmh6_5a").val("");
		$("input[name='qmh2']").prop("checked", false);
		$("input[name='qmh3_1']").prop("checked", false);
		$("input[name='qmh3_2']").prop("checked", false);
		$("input[name='qmh3_3']").prop("checked", false);
		$("input[name='qmh3_4']").prop("checked", false);
		$("input[name='qmh3_5']").prop("checked", false);
		$("input[name='qmh3_6']").prop("checked", false);
		$("input[name='qmh3_7']").prop("checked", false);
		$("input[name='qmh3_8']").prop("checked", false);
		$("input[name='qmh3_9']").prop("checked", false);
		$("input[name='qmh4_1']").prop("checked", false);
		$("input[name='qmh4_2']").prop("checked", false);
		$("input[name='qmh4_3']").prop("checked", false);
		$("input[name='qmh4_4']").prop("checked", false);
		$("input[name='qmh4_5']").prop("checked", false);
		$("input[name='qmh4_6']").prop("checked", false);
		$("input[name='qmh4_7']").prop("checked", false);
		$("input[name='qmh4_8']").prop("checked", false);
		$("input[name='qmh4_9']").prop("checked", false);
		$("input[name='qmh5']").prop("checked", false);
		$("input[name='qmh6']").prop("checked", false);
		$("#dqmh2").hide();
		$("#dqmh3").hide();
		$("#dqmh4").hide();
		$("#dqmh5").hide();
		$("#dqmh6").hide();
	});		
	
	$("#qmh1_1").add("#qmh1_77").add("#qmh1_88").click(function() {
		$("#dqmh2").show();
		$("#dqmh3").show();
		$("#dqmh4").show();
		$("#dqmh5").show();
		$("#dqmh6").show();
	});		
	
*/	
	
	
 	$("input[type='radio']").add(("input[type='checkbox']")).click(function() {
		$.post("sql.php", { data :   $("form").serialize() } )
		.done(function(data) {
	//	alert (data);
	//	$("#sc").val("");
	//	location.reload(true);
		})
		.fail(function() { alert("error"); });
	});

 	$("input[type='text']").not("#eno").not("#sc").keyup(function() {
		$.post("sql.php", { data :   $("form").serialize() } )
		.done(function(data) {
		//	alert (data);
		})
		.fail(function() { alert("error"); });
	});

 	$("#qb3_3a").change(function() {
		$.post("sql.php", { data :   $("form").serialize() } )
		.done(function(data) {
	//		alert (data);
		})
		.fail(function() { alert("error"); });
	});

/*
	$("#addr").change(function() {
		$("#sc").val($(this).val());
	});
*/

	$( "#smhsform" ).submit(function(e) {
		s = valids();
		if (s != "") {
			return confirm("有問題沒有作各答，是否提交？\n"+s);
		}
		return true;
	});
	
	$("input[type='radio']:checked").trigger("click");
	$("input[type='text']").trigger("change");
	$("#qhb1").add("#qhb3").trigger("keyup");

	$("input[type='checkbox']").each(function() {
		if ($(this).is(":checked")) {
			var tclass = $(this).closest("table").attr('class');
			if (tclass == "bor") {
				$(this).closest("td").addClass("ansed");
			} else {
				$(this).closest("td").addClass("ansed");
				$(this).closest("td").next().addClass("ansed");
				$(this).closest("td").next().next().addClass("ansed");
			}
		}
	});
	
	
	
	
	
});

function valids() {
	var radionam = [];
	var nam = "";
	
	var checkcl = [];
	var cl = "";	

	var txtids = [];
	var txtid = "";	
	
	var s = "";
	$("input[type='radio']").each(function(){
		nam = $(this).attr('name');
		if (!(radionam.indexOf(nam) != -1)) {
			radionam.push(nam);
		 }
	});
	for (i = 0 ; i < radionam.length ; i++) {
		if ($("input[name='"+radionam[i]+"']").is(":visible")) {
			if (typeof($("input[name='"+radionam[i]+"']:checked").val()) == "undefined") {
				s += radionam[i]+"\n";
			}
		}
	}

	$("input[type='checkbox']").each(function(){
		cl = $(this).attr('class');
		if (!(checkcl.indexOf(cl) != -1)) {
			checkcl.push(cl);
		 }
	});
	for (i = 0 ; i < checkcl.length ; i++) {
		if ($("."+checkcl[i]).is(":visible")) {
			if ($("."+checkcl[i]+":checked").length == 0) {
				if (checkcl[i] != "qd3mx") {
					s += checkcl[i]+"\n";
				}
			}
		}
	}	

	$("input[type='text']").each(function(){
		txtid = $(this).attr('id');
		if (!(txtids.indexOf(txtid) != -1)) {
			txtids.push(txtid);
		 }
	});
	for (i = 0 ; i < txtids.length ; i++) {
		if (($("#"+txtids[i]).is(":visible"))&&(!($("#"+txtids[i]).is(":disabled")))) {
			if ($("#"+txtids[i]).val() == "") {
				s += txtids[i]+"\n";
			}
		}
	}		
	
	return s;
}


function recol(a) {
	var tclass = $(a).closest("table").attr('class');
	if (tclass == "bor") {
		$(a).closest("td").removeClass("ansed");
	} else {
		$(a).closest("td").removeClass("ansed");
		$(a).closest("td").next().removeClass("ansed");
		$(a).closest("td").next().next().removeClass("ansed");
	}
}


function clr(div) {
	$(div).find("input[type='radio']").each(function() {
		$(this).prop("checked", false);
		var id = $(this).attr("id");
		recol("#"+id);
		$("."+id).val("");
		$("."+id).attr("disabled", true);
	});
	$(div).find("input[type='checkbox']").each(function() {
		$(this).prop("checked", false);
		$(this).triggerHandler("click");
	});
	$(div).find("input[type='txt']").each(function() {
		$(this).val("");
		//recol(id);
	});
}

