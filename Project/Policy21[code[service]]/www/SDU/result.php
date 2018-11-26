<?php

	set_time_limit(0);
	ob_implicit_flush(true);
	ob_end_flush();	
	include "serv.php";
	$sql = "select a1.dc disctict, a1.ca, a1.st street, a1.bling building,a1.f floor,a1.r room, a2.sdu, qq.dd 'day', qq.st 'start', qq.et 'end', qq.stat 'status' from address a1 
left join (select code1, code2, count(code3) sdu from address where code4 = '00' and code3 <> '00' group by code1 , code2) a2 
on a1.code1 = a2.code1 and a1.code2 = a2.code2 
left join (select q1.code1, q1.code2, q1.dd, q1.st, q1.et, q1.stat from qustatus q1 join (select code1 , code2 , max(tt) tt from qustatus group by code1, code2) q2 on q1.code1 = q2.code1 and q1.code2 = q2.code2 and q1.tt = q2.tt) qq
on a1.code1 = qq.code1 and a1.code2 = qq.code2 
where a1.qustat is not null and a1.code3 = '00' and a1.code4 = '00' ";

	$result = mysql_query($sql,$link);

	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		echo "<table border = 1>";
		echo "<tr>";
		for ($j = 0 ; $j < $num_fields ; $j++) {
			echo "<td>".mysql_field_name($result,$j)."</td>";
		}
		echo "</tr>";
		for ($i = 0 ; $i < $num_rows ; $i++) {	
			$rows = mysql_fetch_row($result);
			echo "<tr>";
			for ($j = 0 ; $j < $num_fields ; $j++) {
				echo "<td>".$rows[$j]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	$sql = "select distinct a1.dc district, a1.ca, a1.st street, a1.bling building,a1.f floor,a1.r room, ss.code3 sdu1, ss.code4 sdu2, ss.dd 'day', ss.st 'start', ss.et 'end', ss.stat 'status' from address a1 
join (select distinct s1.code1, s1.code2,s1.code3,s1.code4, s1.dd, s1.st, s1.et, s1.stat from hhstatus s1 join (select code1 , code2 , code3, code4, max(tt) tt from hhstatus group by code1, code2, code3, code4) s2 on s1.code1 = s2.code1 and s1.code2 = s2.code2 and s1.code3 = s2.code3 and s1.code4 = s2.code4 and s1.tt = s2.tt) ss
on a1.code1 = ss.code1 and a1.code2 = ss.code2 and ss.stat is not null order by  ss.code1,ss.code2,ss.code3,ss.code4";

	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		echo "<table border = 1>";
		echo "<tr>";
		for ($j = 0 ; $j < $num_fields ; $j++) {
			echo "<td>".mysql_field_name($result,$j)."</td>";
		}
		echo "</tr>";
		for ($i = 0 ; $i < $num_rows ; $i++) {	
			$rows = mysql_fetch_row($result);
			echo "<tr>";
			for ($j = 0 ; $j < $num_fields ; $j++) {
				echo "<td>".$rows[$j]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>