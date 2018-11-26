$(document).ready(function() {

	$('#sduform').bind("keyup keypress", function(e) {
		var code = e.keyCode || e.which; 
		if ((code  == 13)||(code  == 10)) {               
			e.preventDefault();
			return false;
		}
	});

	$("button").click(function(e) {
		e.preventDefault();
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


	$("#dq2_1").hide();
	$("#dq3").hide();
	$("#dq4").hide();
	$("#qq2_1").click(function() {
		$("#dq2_1").show();
		clr("#dq3");
		clr("#dq4");
		$("#dq3").hide();
		$("#dq3_1").hide();
		$("#dq4").hide();
	});
	$("#qq2_2").click(function() {
		clr("#dq2_1");
		$("#dq2_1").hide();
		$("#dq3").show();
		location.href = "#dq3";
	});

	$("#dq3_1").hide();
	$("#qq3_1").click(function() {
		$("#dq3_1").show();
	});
	$("#qq3_2").click(function() {
		clr("#dq3_1");
		$("#dq3_1").hide();
		$("#dq4").show();
	});

	$("#qq3_1a_1").click(function() {
		clr("#dq4");
		$("#dq4").hide();
	});
	$("#qq3_1a_2").click(function() {
		$("#dq4").show();
	});

	$("#da2_2").hide();
	$("#qa2_1").click(function() {
		clr("#da2_2");
		$("#da2_2").hide();
		clr("#da3");
		$("#da3").hide();
		clr("#pb");
		$("#pb").hide();
		clr("#pc");
		$("#pc").hide();
		
	});
	$("#qa2_2").click(function() {
		$("#da2_2").show();
		$("#da3").show();
		$("#pb").show();
		$("#pc").show();
	});

	$("#qa3a").keyup(function() {
		var regex = /^\d+$/;
		var v = $(this).val();
		if (isNaN(v)) {
			$(this).val("");
		} 		
		if ($(this).val() != "") {
			clr("#da3a");
			$("#da3a").hide();
		} else {
			$("#da3a").show();
		}
	});

	$("#qb1a").add("#qb1b").keyup(function() {
		var regex = /^\d+$/;
		var v = $(this).val();
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1;
		var yyyy = today.getFullYear();
		if (!(regex.test(v))) {
			$(this).val("");
		} else {
			if ($("#qb1a").val() > yyyy) {
				$("#qb1a").val("");
			}
			if (($("#qb1b").val() > 12)||($("#qb1b").val() < 1)) {
				$("#qb1b").val("");
			}
		}
		a = $("#qb1a").val() == "" ? yyyy:parseInt($("#qb1a").val());
		b = $("#qb1b").val() == "" ? 0:parseInt($("#qb1b").val());
		if (((yyyy-a)>3)||((yyyy-a)==3)&&(mm>b)) {
			clr("#db2");
			$("#db2").hide();
		} else {
			$("#db2").show();
		}
	});

	$("#qb2a_1").click(function() {
		$("#db2a_2a").show();
		$("#db2a_2b").show();
	});	
	$("#qb2a_2").click(function() {
		clr("#db2a_2b");
		$("#db2a_2a").hide();
		$("#db2a_2b").hide();
	});

/*
	$("#qb2a_2").add("#qb7_7").add("#qb8_14").click(function() {
		$("#qb2a_2").prop("checked",true);
		$("#qb7_7").prop("checked",true);
		$("#qb8_14").prop("checked",true);
	});
*/
	$("input[name='qb2a']").add("input[name='qb7']").add("input[name='qb8']").click(function() {
//		alert($("input[name='qb7']:checked").val());
		var id = $(this).attr("id")+"";
		var id1 = "qb2a_2";
		var id2 = "qb7_7";
		var id3 = "qb8_14";
		//alert(id == id1);
		if ((id == id1)||(id == id2)||(id == id3)) {
//		alert(!($("#qb2a_2").is(":checked")));
//		alert(($("input[name='qb2a']:checked").val() != "undefined"));
//		alert(!($("#qb7_7").is(":checked")));
//		alert((typeof($("input[name='qb7']:checked").val()) != "undefined"));
//		alert(($("input[name='qb7']:checked").val()));
//		alert(!($("#qb8_14").is(":checked")));
//		alert(($("input[name='qb8']:checked").val() != "undefined"));
			if ((!($("#qb2a_2").is(":checked"))&&(typeof($("input[name='qb2a']:checked").val()) != "undefined"))||(!($("#qb7_7").is(":checked"))&&(typeof($("input[name='qb7']:checked").val()) != "undefined"))||(!($("#qb8_14").is(":checked"))&&(typeof($("input[name='qb8']:checked").val()) != "undefined"))) {
				alert("B2, B7, B8 不吻合");
				$(this).prop("checked",false);
			}
		} else {
//		alert("B");
			if (($("#qb2a_2").is(":checked"))||($("#qb7_7").is(":checked"))||($("#qb8_14").is(":checked"))) {
				alert("B2, B7, B8 不吻合");
				$(this).prop("checked",false);
			}
		}
	
/*		if ($("#qb2a_2").is(":checked")) {
			if ((!($("#qb7_7").is(":checked")))||(!($("#qb8_14").is(":checked")))) {
				alert("B2, B7, B8 不吻合");
				$(this).prop("checked",false);
			}
			if (!($("#qb8_14").is(":checked"))) {
				alert("B2, B7, B8 不吻合");
				$(this).prop("checked",false);
			}
		
		}
		if ($("#qb7_7").is(":checked")) {
			if (!($("#qb2a_2").is(":checked"))) {
			if ((!($("#qb2a_2").is(":checked")))||(!($("#qb8_14").is(":checked")))) {
				alert("B2, B7, B8 不吻合");
				$(this).prop("checked",false);
			}
			if (!($("#qb8_14").is(":checked"))) {
				alert("B2, B7, B8 不吻合");
				$(this).prop("checked",false);
			}
			
		}
		if ($("#qb8_14").is(":checked")) {
			if (!($("#qb7_7").is(":checked"))) {
			if ((!($("#qb7_7").is(":checked")))||(!($("#qb2a_2").is(":checked")))) {
				alert("B2, B7, B8 不吻合");
				$(this).prop("checked",false);
			}
			
			if (!($("#qb2a_2").is(":checked"))) {
				alert("B2, B7, B8 不吻合");
				$(this).prop("checked",false);
			}
			
		}
*/
	});
	
	$("#qb4a").add("#qb4b_3a").add("#qb4c_3a").add("#qb4d_3a").add("#qb5_1a").add("#qb5_2a").keyup(function() {
		var v = $(this).val();
		if (isNaN(v)) {
			$(this).val("");
		}
	});
	
	$("#db6_3").hide();
	$("#qb6_3").click(function() {
		if ($(this).is(":checked")) {
			$("#db6_3").show();
		} else {
			clr("#db6_3");
			$("#db6_3").hide();
		}
	});

	$("#db6_4").hide();
	$("#qb6_4").click(function() {
		if ($(this).is(":checked")) {
			$("#db6_4").show();
		} else {
			clr("#db6_4");
			$("#db6_4").hide();
		}
	});

	$("#qb6_4a_1").click(function() {
		if ($(this).is(":checked")) {
			$("#qb6_4a_2").prop("checked", false);
			$("#qb6_4a_3").prop("checked", false);
		}
	});	
	$("#qb6_4a_2").add("#qb6_4a_3").click(function() {
		if ($(this).is(":checked")) {
			$("#qb6_4a_1").prop("checked", false);
		}
	});	
	
	$("#db6_6").hide();
	$("#qb6_6").click(function() {
		if ($(this).is(":checked")) {
			$("#db6_6").show();
		} else {
			clr("#db6_6");
			$("#db6_6").hide();
		}
	});	

	$("#qb6_1").add("#qb6_2").add("#qb6_3").add("#qb6_4").add("#qb6_5").add("#qb6_6").click(function() {
		if ($(this).is(":checked")) {
			$("#qb6_7").prop("checked",false);
		}
	});
	
	$("#qb6_7").click(function() {
		if ($(this).is(":checked")) {
			$("#qb6_1").prop("checked",false);
			$("#qb6_2").prop("checked",false);
			$("#qb6_3").prop("checked",false);
			$("#qb6_4").prop("checked",false);
			$("#qb6_5").prop("checked",false);
			$("#qb6_6").prop("checked",false);
			clr("#db6_3");
			clr("#db6_4");
			clr("#db6_6");
			$("#db6_3").hide();
			$("#db6_4").hide();
			$("#db6_6").hide();
		}
	});	
	
	$("#qb11_1").add("#qb11_2").add("#qb11_3").add("#qb11_4").add("#qb11_5").add("#qb11_6").add("#qb11_7").add("#qb11_8").add("#qb11_9").add("#qb11_10").click(function() {
		if ($(this).is(":checked")) {
			$("#qb11_11").prop("checked",false);
		}
	});
	
	$("#qb11_11").click(function() {
		if ($(this).is(":checked")) {
			$("#qb11_1").prop("checked",false);
			$("#qb11_2").prop("checked",false);
			$("#qb11_3").prop("checked",false);
			$("#qb11_4").prop("checked",false);
			$("#qb11_5").prop("checked",false);
			$("#qb11_6").prop("checked",false);
			$("#qb11_7").prop("checked",false);
			$("#qb11_8").prop("checked",false);
			$("#qb11_9").prop("checked",false);
			$("#qb11_10").prop("checked",false);
			$("#qb11_10a").val("");
			$("#qb11_10a").attr("disabled", true);
		}
	});	

	
	$("#db7_1").hide();
	$("#qb7_1").click(function() {
		if ($(this).is(":checked")) {
			$("#db7_1").show();
		}
	});
	$("#qb7_2").add("#qb7_3").add("#qb7_4").click(function() {
		if ($(this).is(":checked")) {
			clr("#db7_1");
			$("#db7_1").hide();
		}
	});

	
	$("#qb9_3a_1").attr("disabled", true);
	$("#qb9_3a_2").attr("disabled", true);
	$("#qb9_3").click(function() {
		if (!($(this).is(":checked"))) {
			$("#qb9_3a_1").prop("checked", false);
			$("#qb9_3a_2").prop("checked", false);
			$("#qb9_3a_1").attr("disabled", true);
			$("#qb9_3a_2").attr("disabled", true);
		} else {
			$("#qb9_3a_1").attr("disabled", false);
			$("#qb9_3a_2").attr("disabled", false);
		}
	});		
	
	$("#db10_1").hide();
	$("#db10_2").hide();
	$("#qb10_1").click(function() {
		$("#db10_1").show();
		clr("#db10_2");
		$("#db10_2").hide();
	});
	$("#qb10_2").click(function() {
		$("#db10_2").show();
		clr("#db10_1");
		$("#db10_1").hide();
	});
	
	$(".pc1").hide();
	$(".pc2").hide();
	$(".pc3").hide();
	$(".pc4").hide();
	$(".pc5").hide();
	$(".pc6").hide();
	$(".pc7").hide();
	$(".pc8").hide();
	$(".pc9").hide();
	$(".pc10").hide();
	$(".pc11").hide();
	$(".pc12").hide();
	$(".pc13").hide();
	$(".pc14").hide();
	$(".pc15").hide();
	$(".pc16").hide();
	$(".pc17").hide();
	$(".pc18").hide();
	$(".pc19").hide();
	$(".pc20").hide();

	$("#qc1").change(function() {
		var regex = /^\d+$/;
		var v = $(this).val();
		if (!(regex.test(v))) {
			$(this).val("");
			for (i = 1 ; i <= 20 ; i++) {
				clr(".pc"+i);
				$(".pc"+i).hide();
			}
		} else {
			var x = $(this).val();
			for (i = 1 ; i <= x ; i++) {
				$(".pc"+i).show();
			}
			x = parseInt(x)+1;
			for (i = x ; i <= 20 ; i++) {
				clr(".pc"+i);
				$(".pc"+i).hide();
			}
		}
		$("#pc1_2").hide();
	});		
	
	
	$("#qc4_1").add("#qc4_2").add("#qc4_3").add("#qc4_4").add("#qc4_5").add("#qc4_6").add("#qc4_7").add("#qc4_8").add("#qc4_9").add("#qc4_10").add("#qc4_11").add("#qc4_12").add("#qc4_13").add("#qc4_14").add("#qc4_15").add("#qc4_16").add("#qc4_17").add("#qc4_18").add("#qc4_19").add("#qc4_20").keyup(function() {
		var regex = /^\d+$/;
		var v = $(this).val();
		if (!(regex.test(v))) {
			$(this).val("");
		} 
		v = $(this).val();
		var s = $(this).attr("id");
		var res = s.split("_");
		if ((v == "")||(v >= 15)) {
			if (!($("#qc2_"+res[1]+"_9").is(":checked"))) {
				$("#pc"+res[1]+"_8").show();
				$("#pc"+res[1]+"_age").html("("+v+"歲)");
			}
		} else {
			clr("#pc"+res[1]+"_8");
			$("#pc"+res[1]+"_8").hide();
			$("#pc"+res[1]+"_age").html("");
		}
	});	
	
	$("input[name='qc2_1']").add("input[name='qc2_2']").add("input[name='qc2_3']").add("input[name='qc2_4']").add("input[name='qc2_5']").add("input[name='qc2_6']").add("input[name='qc2_7']").add("input[name='qc2_8']").add("input[name='qc2_9']").add("input[name='qc2_10']").add("input[name='qc2_11']").add("input[name='qc2_12']").add("input[name='qc2_13']").add("input[name='qc2_14']").add("input[name='qc2_15']").add("input[name='qc2_16']").add("input[name='qc2_17']").add("input[name='qc2_18']").add("input[name='qc2_19']").add("input[name='qc2_20']").click(function() {
		var v = $(this).filter(':checked').val();
		var s = $(this).attr("name");
		var res = s.split("_");
		var vv = "";
		switch(v) {
			case "1" : vv="配偶";break;
			case "2" : vv="子女";break;
			case "3" : vv="孫";break;
			case "4" : vv="父母";break;
			case "5" : vv="兄弟姊妹";break;
			case "6" : vv="其他長輩親屬";break;
			case "7" : vv="其他同輩親屬";break;
			case "8" : vv="其他晚輩親屬";break;
			case "9" : vv="留宿嘅家庭傭工";break;
			case "10" : vv="其他";break;
		}
		$(".pc"+res[1]+"_rel").html("("+vv+")");
		if (v == "9") {
			clr("#pc"+res[1]+"_5");
			clr("#pc"+res[1]+"_6");
			clr("#pc"+res[1]+"_7");
			clr("#pc"+res[1]+"_8");
			$("#pc"+res[1]+"_5").hide();
			$("#pc"+res[1]+"_6").hide();
			$("#pc"+res[1]+"_7").hide();
			$("#pc"+res[1]+"_8").hide();
		} else {
			$("#pc"+res[1]+"_5").show();
			$("#pc"+res[1]+"_6").show();
			$("#pc"+res[1]+"_7").show();
			$("#pc"+res[1]+"_8").show()
		}
	});
	
	
	
	
	
	



















	$("#qq2_1b").keyup(function() {
		var regex = /^\d+$/;
		var v = $(this).val();
		if (!(regex.test(v))) {
			$(this).val("");
		} 		
		a = $("#qq2_1b").val() == "" ? 0:parseInt($("#qq2_1b").val());
		$("#sdunum").val(a);
	});

	$("#qq4_2a").add("#qq4_3a").add("#qq4_4a").add("#qq4_5a").add("#qq4_6a").keyup(function() {
		var regex = /^\d+$/;
		var v = $(this).val();
		if (!(regex.test(v))) {
			$(this).val("");
		} 		
		a = $("#qq4_2a").val() == "" ? 0:parseInt($("#qq4_2a").val());
		b = $("#qq4_3a").val() == "" ? 0:parseInt($("#qq4_3a").val());
		c = $("#qq4_4a").val() == "" ? 0:parseInt($("#qq4_4a").val());
		d = $("#qq4_5a").val() == "" ? 0:parseInt($("#qq4_5a").val());
		e = $("#qq4_6a").val() == "" ? 0:parseInt($("#qq4_6a").val());
		$("#sdunum").val(a+b+c+d+e);
	});

	$("#qa1_1a").keyup(function() {
		var regex = /^\d+$/;
		var v = $(this).val();
		if (!(regex.test(v))) {
			$(this).val("");
		} 		
		a = $("#qa1_1a").val() == "" ? 0:parseInt($("#qa1_1a").val());
		$("#hhnum").val(a);
	});






	
	
	
	
	
	
	
	
	
	
	
	
	
	$("#qustat").change(function() {
		var today = new Date(); 
		var hhh = today.getHours();
		var mmm = today.getMinutes();
		if ((mmm.length == 1)||(mmm < 10)) {
			mmm = "0"+mmm;
		}
		var b = true;
		if ($(this).val() == "EN") {
			if ($("input[name='qq1']:checked").length == 0) {
				alert("Q1 沒答");
				b = false;
			}
			if ($("input[name='qq2']:checked").length == 0) {
				alert("Q2 沒答");
				b = false;
			}
			if ($("input[name='qq2']:checked").length == 0) {
				alert("Q2 沒答");
				b = false;
			}
			if (($("#qq2_1").is(":checked"))&&(($("input[name='qq2_1a']:checked").length == 0)||($("#sdunum").val() == 0))) {
				alert("Q2 沒答");
				b = false;
			}	
			if (($("#qq2_1a_1").is(":checked")||$("#qq2_1a_2").is(":checked"))&&($("#sdunum").val() < 2)){
				alert("屋外直達分間單位／房間數目少於2");
				b = false;
			}			
			if ($("#qq2_1a_3").is(":checked")&&($("#sdunum").val() < 1)){
				alert("屋外直達分間單位／房間數目少於1");
				b = false;
			}			
			if (($("#qq2_2").is(":checked"))&&(($("input[name='qq3']:checked").length == 0))) {
				alert("Q3 沒答");
				b = false;
			}	
			if (($("#qq3_1").is(":checked"))&&(($("input[name='qq3_1a']:checked").length == 0))) {
				alert("Q3 沒答");
				b = false;
			}				
			if (($("#qq3_1a_2").is(":checked")||$("#qq3_2").is(":checked"))&&($("#sdunum").val() < 2)){
				alert("屋單位內房間數目少於2");
				b = false;
			}
			if (b == true) {
				$("#quet").val(hhh+":"+mmm);
				if (!($("#qq3_1a_1").is(":checked"))) {
					$("#pa").show();
					$("#pb").show();
					$("#pc").show();
					$("#dhhstat").show();
				} else {
					$("#pa").hide();
					$("#pb").hide();
					$("#pc").hide();
					$("#dhhstat").hide();
				}
			} else {
				$(this).val("");
			}
		} else if ($(this).val() == "AD") {
			if ($("input[name='qq1']:checked").length == 0) {
				alert("Q1 沒答");
				b = false;
			}
			if ($("input[name='qq2']:checked").length == 0) {
				alert("Q2 沒答");
				b = false;
			}
			if ($("input[name='qq2']:checked").length == 0) {
				alert("Q2 沒答");
				b = false;
			}
			if (($("#qq2_1").is(":checked"))&&(($("input[name='qq2_1a']:checked").length == 0)||($("#sdunum").val() == 0))) {
				alert("Q2 沒答");
				b = false;
			}	
			if (($("#qq2_1a_1").is(":checked")||$("#qq2_1a_2").is(":checked"))&&($("#sdunum").val() < 2)){
				alert("屋外直達分間單位／房間數目少於2");
				b = false;
			}			
			if ($("#qq2_1a_3").is(":checked")&&($("#sdunum").val() < 1)){
				alert("屋外直達分間單位／房間數目少於1");
				b = false;
			}
			if ($("#qq2_2").is(":checked")) {
				alert("不應使用不能進入");
				b = false;
			}
			if (b == true) {
				$("#quet").val(hhh+":"+mmm);
			} else {
				$(this).val("");
			}
		} else {
			b = false;
			$("#quet").val(hhh+":"+mmm);
			$("#pa").hide();
			$("#pb").hide();
			$("#pc").hide();
			$("#dhhstat").hide();
		}
		if ((b == true)&&(!($("#qq3_1a_1").is(":checked")))) {
			
			$.ajax({
				type: "POST",
				url: "ajax3.php",
				data: { code1: $("#sc1").val(), code2: $("#sc2").val(), code3: $("#sdunum").val()  }
			})
			.done(function( msg ) {
				var res = msg.split(":");
				if (res[0] != "") {
					$("#sc3").html(res[0]);
				}
				location.href = "#sc3";
			});
			$.ajax({
				type: "POST",
				url: "ajax7.php",
				data: { sc1: $("#sc1").val(), sc2: $("#sc2").val(), sc3: $("#sc3").val(), sc4: $("#sc4").val(), eno: $("#eno").val(), qudd: $("#qudd").val(), qust: $("#qust").val(), quet: $("#quet").val(), qutyp: $("#qutyp").val(), qustat: $("#qustat").val(), tel: $("#qutel").val() }
			})
			.done(function( msg ) {
	
				//alert(msg);
			});
			$.ajax({
				type: "POST",
				url: "ajax8.php",
				data: { data :   $("form").serialize() }
			})
			.done(function( msg ) {
	
				//alert(msg);
			});		
			
		}
	});

	$("#hhstat").change(function() {
		var today = new Date(); 
		var hhh = today.getHours();
		var mmm = today.getMinutes();
		if ((mmm.length == 1)||(mmm < 10)) {
			mmm = "0"+mmm;
		}
		$("#hhet").val(hhh+":"+mmm);
	});
	
	$("#qa1_1a").change(function() {
		var xx = $("#sc4").val();
		if ($("#qa1_1a").val() != 1) {
			$.ajax({
				type: "POST",
				url: "ajax4.php",
				data: { code1: $("#sc1").val(), code2: $("#sc2").val(), code3: $("#sc3").val(), code4: $("#hhnum").val()  }
			})
			.done(function( msg ) {
				var res = msg.split(":");
				if (res[0] != "") {
					$("#sc4").html(res[0]);
					if (xx != "00") {
						$("#sc4").val(xx);
					}
					location.href = "#sc4";
				}
			});
		}
	});



































	$("#dc").add("#ca").add("#st").add("#bling").add("#f").add("#r").add("#sc3").change(function() {
		//$("#sc3").html("<option value = \"00\">00</option>\n");
		$("#sc4").html("<option value = \"00\">00</option>\n");
		//$("#sc3").val("00");
		$("#sc4").val("00");
		
		//clr("#pq");
		//clr("#pa");
		//clr("#pb");
		//clr("#pc");
		$("#pq").hide();
		$("#dqustat").hide();
		$("#pa").hide();
		$("#pb").hide();
		$("#pc").hide();
		$("#dhhstat").hide();
		
		
		
		xx1 = $("#dc").val();
		xx2 = $("#ca").val();
		xx3 = $("#st").val();
		xx4 = $("#bling").val();
		xx5 = $("#f").val();
		xx6 = $("#r").val();
		xx7 = $("#sc3").val();
		xyz = $(this).attr("id");
		
		if (xyz == "dc") {
			$("#ca").val("");
		}
		if (xyz == "ca") {
			$("#st").val("");
		}
		if (xyz == "st") {
			$("#bling").val("");
		}
		if (xyz == "bling") {
			$("#f").val("");
		}
		if (xyz == "f") {
			$("#r").val("");
		}
		if (xyz == "r") {
			$("#sc3").val("00");
		}
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: { dc: $("#dc").val()+"", ca: $("#ca").val()+"", st: $("#st").val()+"", bling: $("#bling").val()+"", f: $("#f").val()+"", r: $("#r").val()+"", sc3: $("#sc3").val()+"" }
		})
		.done(function( msg ) {
			if ($("#qustat").val() != "") {
				$.ajax({
					type: "POST",
					url: "ajax7.php",
					data: { sc1: $("#sc1").val(), sc2: $("#sc2").val(), sc3: $("#sc3").val(), sc4: $("#sc4").val(), eno: $("#eno").val(), qudd: $("#qudd").val(), qust: $("#qust").val(), quet: $("#quet").val(), qutyp: $("#qutyp").val(), qustat: $("#qustat").val(), tel: $("#qutel").val() }
				})
				.done(function( msg1 ) {
				});
			}
		
			$("#sduform")[0].reset();
			//alert( "Data Saved: " + msg );
			var res = msg.split(":");
			//$("#dc").html(res[0]);
			$("#ca").html(res[0]);
			$("#st").html(res[1]);
			$("#bling").html(res[2]);
			$("#f").html(res[3]);
			$("#r").html(res[4]);
			$("#sc1").val(res[5]);
			$("#sc2").val(res[6]);
			var visit = res[7];
			var sdu = res[8];
			$("#sc3").html(res[9]);
			$("#sc4").html(res[10]);
			if (visit == "1") {
				$("#pq").hide();
				$("#dqustat").hide();
				if (sdu == "0") {
					alert("不是目標受訪對象");
				} else {
					$("#pa").show();
					$("#pb").show();
					$("#pc").show();
					$("#dhhstat").show();
				}
			} else {
				if (($("#sc1").val() != "")&&($("#sc2").val() != "")) {
					$("#pq").show();
					$("#dqustat").show();
				}
			}
			
			
			$("#dc").val(xx1);
			if (xyz != "dc") {
				$("#ca").val(xx2);
			} else {
				$("#ca").val("");
			}
			if (xyz != "ca") {
				$("#st").val(xx3);
			} else {
				$("#st").val("");
			}
			if (xyz != "st") {
				$("#bling").val(xx4);
			} else {
				$("#bling").val("");
			}
			if (xyz != "bling") {
				$("#f").val(xx5);
			} else {
				$("#f").val("");
			}
			if (xyz != "f") {
				$("#r").val(xx6);
			} else {
				$("#r").val("");
			}
			if (xyz != "r") {
				$("#sc3").val(xx7);
			} else {
				$("#sc3").val("");
			}
			if ($("#sc3").val() == null) {	
				$("#sc3").val("00");
			}
			$("#sc4").val("00");
			if ($("#sc3").val() == null) {
				$("#sc3").val("01");
			}
			if ($("#sc4").val() == null) {
				$("#sc4").val("01");
			}
			
			
			
/*			
			
		if ($("#sc1").val() != "") {
			
			$("#roof").attr("disabled", false);
			$("#ug").attr("disabled", false);
			$("#nf").attr("disabled", false);
			if ($("#f").val() != "") {
				$("#att").attr("disabled", false);
				$("#df").attr("disabled", false);
			}
			
		} else {
			
			$("#roof").attr("disabled", true);
			$("#ug").attr("disabled", true);
			$("#nf").attr("disabled", true);
			
			$("#att").attr("disabled", true);
			$("#df").attr("disabled", true);
		}
*/			
			
		});
	


	});
/*
	$("#att").add("#root").add("#ug").add("#nf").add("#df").click(function() {
		$.ajax({
			type: "POST",
			url: "ajax2.php",
			data: { dc: $("#dc").val()+"", ca: $("#ca").val()+"", st: $("#st").val()+"", bling: $("#bling").val()+"", f: $("#f").val()+"", nfr: $("#f").val()+"", typ: $(this).attr("id")+"" }
		})
		.done(function( msg ) {
		});
	});
*/


	$("#ser").click(function() {
		$.ajax({
			type: "POST",
			url: "ajax2.php",
			data: { search: $("#search").val()+"" }
		})
		.done(function( msg ) {
			//alert( "Data Saved: " + msg );
			var res = msg.split(":");
			//alert(res[0]);
			if ((res[0] == 0)||(res[0] == "0")) {
				alert("No record");
				$("#dc").val("");
				$("#dc").trigger("change");
			} else {
				$("#dc").val(res[1]);
				$("#ca").html(res[9]);
				$("#ca").val(res[2]);
				$("#st").html(res[10]);
				$("#st").val(res[3]);
				$("#bling").html(res[11]);
				$("#bling").val(res[4]);
				//$("#bling").trigger("change");
				$("#sc1").val(res[16]);
				$("#f").html(res[12]);
				$("#f").val(res[5]);
				$("#r").html(res[13]);
				$("#r").val(res[6]);
				$("#sc2").val(res[17]);
				//$("#r").trigger("change");
				$("#sc3").html(res[14]);
				$("#sc3").val(res[7]);
				//$("#sc3").trigger("change");
				$("#sc4").html(res[15]);
				//alert(res[8]);
				$("#sc4").val(res[8]);
			}

			//$("#dc").html(res[0]);
			/*
			$("#ca").html(res[0]);
			$("#st").html(res[1]);
			$("#bling").html(res[2]);
			$("#f").html(res[3]);
			$("#r").html(res[4]);
			$("#sc1").val(res[5]);
			$("#sc2").val(res[6]);
			var visit = res[7];
			var sdu = res[8];
			$("#sc3").html(res[9]);
			$("#sc4").html(res[10]);
			*/
		});
	});

	
	$("#ser1").click(function() {
		$.ajax({
			type: "POST",
			url: "ajax2.php",
			data: { search: $("#search1").val()+"" }
		})
		.done(function( msg ) {
			//alert( "Data Saved: " + msg );
			var res = msg.split(":");
			//alert(res[0]);
			if ((res[0] == 0)||(res[0] == "0")) {
				alert("No record");
				$("#dc1").val("");
				$("#ca1").val("");
				$("#st1").val("");
				$("#bling1").val("");
				$("#f1").val("");
				$("#r1").val("");
				$("#dc1").trigger("change");
			} else {
				$("#dc1").val(res[1]);
				$("#ca1").html(res[9]);
				$("#ca1").val(res[2]);
				$("#st1").html(res[10]);
				$("#st1").val(res[3]);
				$("#bling1").html(res[11]);
				$("#bling1").val(res[4]);
				$("#bsc1").val(res[16]);
				$("#f1").html(res[12]);
				$("#f1").val(res[5]);
				$("#r1").html(res[13]);
				$("#r1").val(res[6]);
				$("#bsc2").val(res[17]);
				//$("#sc3").html(res[14]);
				//$("#sc3").val(res[7]);
				//$("#sc4").html(res[15]);
				//$("#sc4").val(res[8]);
				if (($("#bsc1").val() != "")&&($("#bsc2").val() != "")) {
					$("#bind").attr("disabled", false);
				} else {
					$("#bind").attr("disabled", true);
				}
			}
		});
	});	
	

	$("#dc1").add("#ca1").add("#st1").add("#bling1").add("#f1").add("#r1").change(function() {

		xx1 = $("#dc1").val();
		xx2 = $("#ca1").val();
		xx3 = $("#st1").val();
		xx4 = $("#bling1").val();
		xx5 = $("#f1").val();
		xx6 = $("#r1").val();
		xyz = $(this).attr("id");
		
		if (xyz == "dc1") {
			$("#ca1").val("");
		}
		if (xyz == "ca1") {
			$("#st1").val("");
		}
		if (xyz == "st1") {
			$("#bling1").val("");
		}
		if (xyz == "bling1") {
			$("#f1").val("");
		}
		if (xyz == "f1") {
			$("#r1").val("");
		}
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: { dc: $("#dc1").val()+"", ca: $("#ca1").val()+"", st: $("#st1").val()+"", bling: $("#bling1").val()+"", f: $("#f1").val()+"", r: $("#r1").val()+"", sc3: "00" }
		})
		.done(function( msg ) {
			//alert( "Data Saved: " + msg );
			var res = msg.split(":");
			//$("#dc").html(res[0]);
			$("#ca1").html(res[0]);
			$("#st1").html(res[1]);
			$("#bling1").html(res[2]);
			$("#f1").html(res[3]);
			$("#r1").html(res[4]);
			$("#bsc1").val(res[5]);
			$("#bsc2").val(res[6]);
	
			$("#dc1").val(xx1);
			if (xyz != "dc1") {
				$("#ca1").val(xx2);
			} else {
				$("#ca1").val("");
			}
			if (xyz != "ca1") {
				$("#st1").val(xx3);
			} else {
				$("#st1").val("");
			}
			if (xyz != "st1") {
				$("#bling1").val(xx4);
			} else {
				$("#bling1").val("");
			}
			if (xyz != "bling1") {
				$("#f1").val(xx5);
			} else {
				$("#f1").val("");
			}
			if (xyz != "f1") {
				$("#r1").val(xx6);
			} else {
				$("#r1").val("");
			}
				if (($("#bsc1").val() != "")&&($("#bsc2").val() != "")) {
					$("#bind").attr("disabled", false);
				} else {
					$("#bind").attr("disabled", true);
				}
		});
	});

	$("#bind").click(function() {
		$.ajax({
			type: "POST",
			url: "ajax5.php",
			data: { sc1: $("#sc1").val()+"", sc2: $("#sc2").val()+"", bsc1: $("#bsc1").val()+"", bsc2: $("#bsc2").val()+"" }
		})
		.done(function( msg ) {
			if ((msg == "0")||(msg == 0)) {
				alert ("Merge fail");
			} else {
				$("#mer").append("<span id = \""+msg+"\">"+msg+"</span>");
				$("#mer").append("<button id = \"r"+msg+"\">x</button>");
				$("#r"+msg).bind({
					click: function(e) {
						e.preventDefault();
						$.ajax({
							type: "POST",
							url: "ajax6.php",
							data: { bsc: ""+msg+"" }
						})
						.done(function( msg1 ) {
							//alert(msg1);
							if ((msg1 == "0")||(msg1 == 0)) {
								alert ("Delete fail");
							} else {
								$("#"+msg).remove();
								$("#r"+msg).remove();
							}
						});
					}
				});
			}
		});
	});













	
	$("#sduform").submit(function(e) {

		if (($("#qq2_1").is(":checked"))&&($("#sdunum").val() == "0")) {
			alert("沒有屋外直達嘅分間單位／房間數目");
			e.preventDefault();
		}
	
		if (($("#qq2_2").is(":checked"))&&($("#sdunum").val() == "0")&&(!($("#qq3_1a_1").is(":checked")))) {
			alert("沒有呢個單位內房數");
			e.preventDefault();
		}
		
		if (($("#qa1_1").is(":checked"))&&($("#hhnum").val() == "0")) {
			alert("沒有屋外直達嘅分間單位／房間伙數");
			e.preventDefault();
		}
		
		return;
	});	
	
	






	$("#capture").change(function(event) {
		var s = "";
		s = $("#capture").val()+"";
		s = s.substring(s.lastIndexOf("\\") + 1);
		$("#picamt").val(parseInt($("#picamt").val())+1);
		$("#pic2").append("<input type = 'hidden' name = 'picp"+$("#picamt").val()+"' id = 'picp"+$("#picamt").val()+"' value ='"+s+"'>");
		$("#pic").append("<img name = 'pic"+$("#picamt").val()+"' id = 'pic"+$("#picamt").val()+"' width = \"150px\">");
		$("#pic").append("<br />");
		if (event.target.files.length == 1 && event.target.files[0].type.indexOf("image/") == 0) {
			$("#pic"+$("#picamt").val()).attr("src",URL.createObjectURL(event.target.files[0]));
//			URL.revokeObjectURL(URL.createObjectURL(event.target.files[0]));
		}
		
	});

	$("#capture2").change(function(event) {
		var s = "";
		s = $("#capture2").val()+"";
		s = s.substring(s.lastIndexOf("\\") + 1);
		$("#picamt").val(parseInt($("#picamt").val())+1);
		$("#pic2").append("<input type = 'hidden' name = 'picp"+$("#picamt").val()+"' id = 'picp"+$("#picamt").val()+"' value ='"+s+"'>");
		$("#pic2").append("<img name = 'pic"+$("#picamt").val()+"' id = 'pic"+$("#picamt").val()+"' width = \"150px\">");
		$("#pic2").append("<br />");
		if (event.target.files.length == 1 && event.target.files[0].type.indexOf("image/") == 0) {
			$("#pic"+$("#picamt").val()).attr("src",URL.createObjectURL(event.target.files[0]));
		}
		
	});

	$("#qc4_1").change(function() {
		if (($("#qb10_1a_2").is(":checked"))&&($("#qc1").val() == "1")) {
			if (parseInt($(this).val()) >= 58) {
				alert("不能大過或等於58");
				$(this).val("");
			}
		}
		if (($("#qb10_1a_3").is(":checked"))&&($("#qc1").val() == "1")) {
			if (parseInt($(this).val()) < 58) {
				alert("不能少於58");
				$(this).val("");
			}
		}
	});

	$("#qc6_1_2a").change(function() {
		if (parseInt($("#qc4_1").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});

	$("#qc6_2_2a").change(function() {
		if (parseInt($("#qc4_2").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	
	
	$("#qc6_3_2a").change(function() {
		if (parseInt($("#qc4_3").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	
	
	$("#qc6_4_2a").change(function() {
		if (parseInt($("#qc4_4").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});		
	
	
	$("#qc6_5_2a").change(function() {
		if (parseInt($("#qc4_5").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});		
	
	
	$("#qc6_6_2a").change(function() {
		if (parseInt($("#qc4_6").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});		
	
	
	$("#qc6_7_2a").change(function() {
		if (parseInt($("#qc4_7").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});		
	
	$("#qc6_8_2a").change(function() {
		if (parseInt($("#qc4_8").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});		
	
	$("#qc6_9_2a").change(function() {
		if (parseInt($("#qc4_9").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_10_2a").change(function() {
		if (parseInt($("#qc4_10").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_11_2a").change(function() {
		if (parseInt($("#qc4_11").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_12_2a").change(function() {
		if (parseInt($("#qc4_12").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_13_2a").change(function() {
		if (parseInt($("#qc4_13").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_14_2a").change(function() {
		if (parseInt($("#qc4_14").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_15_2a").change(function() {
		if (parseInt($("#qc4_15").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_16_2a").change(function() {
		if (parseInt($("#qc4_16").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_17_2a").change(function() {
		if (parseInt($("#qc4_17").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_18_2a").change(function() {
		if (parseInt($("#qc4_18").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_19_2a").change(function() {
		if (parseInt($("#qc4_19").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	

	$("#qc6_20_2a").change(function() {
		if (parseInt($("#qc4_20").val()) < (2014-parseInt($(this).val()))) {
				alert("居住年期不能少於年齡");
				$(this).val("");
		}
	});	



	$("#sduform").submit(function() {
		if ($("#hhstat").is(':visible')||(!("#hhstat").is(':hidden'))) {
			if ($("#hhstat").val() == "") {
				alert ("沒有訪問結果");
				return false;
			}
		}
		return true;
	});
	
	
	

	$("#pq").hide();
	$("#dqustat").hide();
	$("#pa").hide();
	$("#pb").hide();
	$("#pc").hide();
	$("#dhhstat").hide();


//	$("input[type='radio']:checked").trigger("click");
//	$("input[type='text']").trigger("change");

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
