<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CMS Project</title>
</head>
<body>
	<b>Title not found</b>
	<?php
		$age= array("John"=>25, "Anne"=>30, "July"=>13);
		$somme_age=0;
		foreach ($age as $key => $value) {
			echo "$key a $value ans";
			echo"<br/>";
			$somme_age+= (int)$value;
		}
		echo "<br/>i<br />";
		echo "La somme des ages vaut : $somme_age ans";
		echo "<br/><br/>";
		$i=5; $j=5;
		$a=$i++;
		echo "a vaut $a";
		$a=++$j;
		echo"<br/>";
		echo "maintenant, a vaut $a";
	?>

	<p><a href="form/form_connexion.php">connexion<a></p>
</body>
</html>
