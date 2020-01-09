<html>
<head>
   <title>陳一斌</title>
<html>
<body>
	<?php
		$name = $_POST['name'];
		$id = $_POST['ID'];
		$class = "資工三真";
		$birthYear = "1999";
		$birthMonth = "07";
		$birthDay = "09";
		if($n == "楊浚裕" && $i == "106406018S"){
			echo("姓名: ").$n."<br>";
			echo("學號: ").$i."<br>";
			echo("班別: ")."資工三真"."<br>";
		}
		if ($c) {
			$e = $_POST['english'];
			$m = $_POST['math'];
			//$total=$_POST['chinese']+$_POST['english']+$_POST['math'];
			$total=$c+$e+$m;
			$avg=round($total/3,1);
			echo "平均=" . $avg ."<br>";
			if  ($avg>=90)
			echo "評等：優等";
			if  ($avg<90 and $avg>=70)
			  echo "評等：中等";
			if  ($avg<70 and $avg>=60)
			  echo "評等：普通";
			if  ($avg<60)
			  echo "評等：不及格";
		}
	?>		
</body>
</html>




