<?php
	$username="Raily Toomingas";
	$fulltimenow=date("d.m.Y H:i:s");
	$hournow=date("H");
	$partofday="lihtsalt aeg";
	if($hournow<6){
		$partofday="uneaeg";
	}
	if($hournow>=6 and $hournow <8){
		$partofday="hommikuste protseduuride aeg";
	}
	if($hournow>=8 and $hournow <18){
		$partofday="õppimise aeg";
	}
	
	//jälgime semestri kulgu
	$semesterstart=new DateTime("2020-8-31");
	$semesterend=new DateTime("2020-12-13");
	$semesterduration=$semesterstart->diff($semesterend);
	$today=new DateTime("now");
	$fromsemesterstart=$semesterstart->diff($today);  //saime aja erinevuse objektina, seda niisama näidata ei saa
	$fromsemesterstartdays=$fromsemesterstart->format("%r%a");
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>Veebileht</title>

</head>
<body>
	<img src="../img/vp_banner.png" alt="Veebiprogrammeerimise kursuse bänner">
	<h1><?php echo $username;?> programmeerib veebi</h1>
	<p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
	<p>Lehe avamise aeg: <?php echo $fulltimenow.", semestri algusest on möödunud ".$fromsemesterstartdays." päeva";?>. 
	<?php echo "Parajasti on " .$partofday.".";?></p>
	<p>Leht on loodud veebiprogrammeerimise kursusel <a href="https://www.tlu.ee/">Tallinna Ülikooli</a> Digitehnoloogiate instituudis. </p>
</body>
</html>