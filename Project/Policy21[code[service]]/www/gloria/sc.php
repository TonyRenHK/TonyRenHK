<?php
	date_default_timezone_set("Asia/Hong_Kong");
	$host="localhost";
	$ser="root";
	$pass="Policy21!!!!";
	$db="smhs";
	$link = @mysql_connect($host, $ser, $pass) or die("Could not connect");
	mysql_select_db($db,$link) or die("Could not connect database");
	mysql_query("set names utf8");
	$ans = array();
	$sql = "";
?>
<!--
<center>
<img src = "hkulogo.jpg">
<h1>香港大學家庭醫學及基層醫療學系</h1><br />
<br />
<h2>香港／廣州健康評估及調查</h2><br />
<br />
</center>
香港大學家庭醫學及基層醫療學系正委托政策二十一有限公司進行一項香港／廣州健康調查。評估得出的結果將釐定醫療政策、分配資源及提供合適的醫療服務。<br />
<br />
我們以隨機抽樣的方式，選中   貴戶參加這項調查。在評估過程中，我們會詢問有關閣下的健康及生活習慣的問題，並為他們搜集血液及尿液樣本。<br />
<br />
政策二十一之訪問員將誠邀府上的其中一位家庭成員接受訪問以作資料搜集。訪問員將攜帶由政策二十一發出之身份證明文件，以供查證。<br />
<br />
我們誠意邀請你參加是次調查。訪問結束後，你會取得閣下的血液及尿液檢驗結果。在分析資料時，家庭各成員的個人資料已被隱藏， 而搜集所得的資料，將嚴加保密，並只作研究及統計之用。<br />
<br />
問卷調查及提供樣本後，我們會向　貴住戶奉上謝酬（每份完成問卷謝酬壹佰圓禮券），以聊表謝意。<br />
<br />
	謝謝你的合作。<br />
<br />
-->
<br />
地址：<select name = "addr" id = "addr">
	<option value = ""></option>
	<?php
		$sql = "select * from smhssc";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			echo "<option value = \"".$row[1]."\">".$row[2]."</option>";
		}
	
	
	?>

</select>
<input type = "hidden" name = "eno" id = "eno" value = "<?php echo @$_POST["eno"]; ?>">
<br />




<?php
@mysql_free_result($result);	
	mysql_close($link);
?>