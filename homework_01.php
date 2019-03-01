<?php
	$bayan=["Merve","Fatma","Emel","Zeynep"];
	$bay=["Bayram Hoca","Ayvaz","Sedat","Cenk","Batuhan","Mehmet","İsmail","İlker"];
	$cinsiyet=["kadın","erkek"];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport"content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">			
		<title>Web Guys</title>
	</head>
	<body>
		<br />
		<?php	
			for($i=0; $i<count($bayan); $i++)
			{	
				echo $bayan[$i].", bu gün çok güzelsin.  Senin cinsiyetin " .$cinsiyet[0]. ".";
				echo '<br />';
			}
			for($i=0; $i<count($bay); $i++)
			{	
				echo $bay[$i].", bu gün çok yakişiklisin. Senin cinsiyetin " .$cinsiyet[1]. ".";
				echo '<br />';
			}
		?>	
	</body>
</html>
