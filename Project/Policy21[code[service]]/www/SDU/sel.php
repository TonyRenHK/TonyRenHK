<?php
	$dcs = array();
	$cas = array();
	$sts = array();
	$blings = array();
	$fs = array();
	$rs = array();

	
	
	$sql = "select distinct dc from address";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	for ($i = 0 ; $i < $num_rows ; $i++) {
		$row = mysql_fetch_row($result);
		$dcs[$i] = $row[0];
	}
	
	$sql = "select distinct ca from address where 1 = 1 ";
	if (isset($_POST["dc"])) {
		$sql .= "and dc = '".$_POST["dc"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
		$row = mysql_fetch_row($result);
		$cas[$i] = $row[0];
		}
	}
	

	$sql = "select distinct st from address where 1 = 1 ";
	if (isset($_POST["ca"])) {
		$sql .= "and dc = '".$_POST["dc"]."'";
		$sql .= "and ca = '".$_POST["ca"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$sts[$i] = $row[0];
		}
	}
	
	$sql = "select distinct bling from address where 1 = 1 ";
	if (isset($_POST["st"])) {
		$sql .= "and dc = '".$_POST["dc"]."'";
		$sql .= "and ca = '".$_POST["ca"]."'";
		$sql .= "and st = '".$_POST["st"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$blings[$i] = $row[0];
		}
	}

	$sql = "select distinct f from address where 1 = 1 ";
	if (isset($_POST["bling"])) {
		$sql .= "and dc = '".$_POST["dc"]."'";
		$sql .= "and ca = '".$_POST["ca"]."'";
		$sql .= "and st = '".$_POST["st"]."'";
		$sql .= "and bling = '".$_POST["bling"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$fs[$i] = $row[0];
		}
	}

	$sql = "select distinct r from address";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	for ($i = 0 ; $i < $num_rows ; $i++) {
		$row = mysql_fetch_row($result);
//		$rs[$i] = $row[0];
	}
	
	
?>
<table>
<tr>
<td>
<br />
搜尋:<input type = "text" name = "search" id = "search" value = ""><button name = "ser" id = "ser">搜尋</button>
<br/>
地區:
<select name = "dc" id = "dc">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($dcs) ; $i++) {
		echo "<option value = \"".$dcs[$i]."\" ".(@$_POST["dc"]==$dcs[$i]?"selected":"")." >".$dcs[$i]."</option>";
	}
?>
</select>
<br/>
小區:
<select name = "ca" id = "ca">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($cas) ; $i++) {
		echo "<option value = \"".$cas[$i]."\" ".(@$_POST["ca"]==$cas[$i]?"selected":"")." >".$cas[$i]."</option>";
	}
?>
</select>
<br/>
街道:
<select name = "st" id = "st">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($sts) ; $i++) {
		echo "<option value = \"".$sts[$i]."\" ".(@$_POST["st"]==$sts[$i]?"selected":"")." >".$sts[$i]."</option>";
	}
?>
</select>
<br/>
大廈:
<select name = "bling" id = "bling">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($blings) ; $i++) {
		echo "<option value = \"".$blings[$i]."\" ".(@$_POST["bling"]==$blings[$i]?"selected":"")." >".$blings[$i]."</option>";
	}
?>
</select>
<br/>
樓層:
<select name = "f" id = "f">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($fs) ; $i++) {
		echo "<option value = \"".$fs[$i]."\">".$fs[$i]."</option>";
	}
?>
</select>
<!--
<button name = "att" id = "att" value = "att" disabled>增加閣樓</button>
<button name = "roof" id = "roof" value = "roof" disabled>增加天台</button>
<button name = "ug" id = "ug" value = "ug" disabled>增加地下</button>
<button name = "nf" id = "nf" value = "nf" disabled>增加樓層</button><input type= "text" class = "short" name = "nfr" id = "nfr" >房數
<button name = "df" id = "df" value = "df" disabled>刪除樓層</button>
<br/>
-->
單位:
<select name = "r" id = "r">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($rs) ; $i++) {
		echo "<option value = \"".$rs[$i]."\">".$rs[$i]."</option>";
	}
?>
</select>
</td>
<td>
<br />
搜尋:<input type = "text" name = "search1" id = "search1" value = ""><button name = "ser1" id = "ser1">搜尋</button>
<br/>
地區:
<select name = "dc1" id = "dc1">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($dcs) ; $i++) {
		echo "<option value = \"".$dcs[$i]."\">".$dcs[$i]."</option>";
	}
?>
</select>
<br/>
小區:
<select name = "ca1" id = "ca1">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($cas) ; $i++) {
		echo "<option value = \"".$cas[$i]."\">".$cas[$i]."</option>";
	}
?>
</select>
<br/>
街道:
<select name = "st1" id = "st1">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($sts) ; $i++) {
		echo "<option value = \"".$sts[$i]."\">".$sts[$i]."</option>";
	}
?>
</select>
<br/>
大廈:
<select name = "bling1" id = "bling1">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($blings) ; $i++) {
		echo "<option value = \"".$blings[$i]."\">".$blings[$i]."</option>";
	}
?>
</select>
<br/>
樓層:
<select name = "f1" id = "f1">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($fs) ; $i++) {
		echo "<option value = \"".$fs[$i]."\">".$fs[$i]."</option>";
	}
?>
</select>
單位:
<select name = "r1" id = "r1">
<option value = ""> </option>
<?php
	for ($i = 0 ; $i < sizeof($rs) ; $i++) {
		echo "<option value = \"".$rs[$i]."\">".$rs[$i]."</option>";
	}
?>
</select>
<button name = "bind" id = "bind" value = "bind" disabled>合併</button>
<br />
SC:3
<input type = "text" class = "short" name = "bsc1" id = "bsc1" value = "" readonly>
<input type = "text" class = "short" name = "bsc2" id = "bsc2" value = "" readonly>
</td>
</tr>
</table>
<br />
<!--
<br /><br />
<button name = "bind" id = "bind" value = "bind" >合併</button>
<div name = "mer" id = "mer">
</div>
-->
<br/>
<input type = "hidden" name = "qs" id = "qs" value = "sel">
<input type = "hidden" name = "eno" id = "eno" value = "<?php echo @$_POST["eno"]?>">
<!--
<input type = "hidden" name = "predc" id = "predc" value = "<?php echo @$_POST["dc"]; ?>">
<input type = "hidden" name = "preca" id = "preca" value = "<?php echo @$_POST["ca"]; ?>">
<input type = "hidden" name = "prest" id = "prest" value = "<?php echo @$_POST["st"]; ?>">
<input type = "hidden" name = "prebling" id = "prebling" value = "<?php echo @$_POST["bling"]; ?>">
<input type = "hidden" name = "pref" id = "pref" value = "<?php echo @$_POST["f"]; ?>">
<input type = "hidden" name = "prer" id = "prer" value = "<?php echo @$_POST["r"]; ?>">
<input type = "hidden" name = "precode3" id = "precode3" value = "<?php echo @$_POST["sc3"]; ?>">
<input type = "hidden" name = "precode4" id = "precode4" value = "<?php echo @$_POST["sc4"]; ?>">
-->





