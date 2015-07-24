<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Action</title>
</head>
<body>
	<?php
		$name = trim($_GET['anarana']);
		$firstname = trim ($_GET['fanampiny']);
		$email = trim ($_GET['email']);
		$password = $_GET['password'];

		if(!isset($name) || !$name){
			echo "Mampidira anarana!";
			return;
		}

		if(!isset($firstname) || !$firstname){
			echo "Ampidiro ny fanampin'anarana!";
			return;
		}

		if(strpos($email,"@")===FALSE){
			die("Email non valide");
		}

		if($password=="bonjour"){
			echo "Manahoana $firstname!";
			echo "<br/>Vous êtes connecté.";
		}
		else{
			echo "Diso ny teny miafina nampidirinao!!";
			return;
		}
	?>

	<p><?php
			$servername = "localhost";
			$username = "root";
			$password = "123456";

			// Create connection
			/*$conn = mysqli_connect($servername, $username, $password);

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully";*/

			try {
				    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
				    // set the PDO error mode to exception
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				    echo "Connected successfully";
				    }
			catch(PDOException $e)
				    {
				    echo "Connection failed: " . $e->getMessage();
				    }
			?>
			<p><?php

				$reponse=$conn->query('SELECT * FROM news');
				//Mis à jour de l'id n°2
				$sql="UPDATE news SET titre='Mis à jour de mon actu' WHERE id=2";
				$conn->exec($sql);
				while($data=$reponse->fetch()){
				?>
				<p>
				<?php
					?><b><?php echo $data['titre']."<br/>";?></b>
					<?php echo $data['contenu']."<br/>";
				}
				?>
				</p>
			</p>
			<?php

	?></p>
	<p><a href="..">revenir</a></p>

</body>
</html>