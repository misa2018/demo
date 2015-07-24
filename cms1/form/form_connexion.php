<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
   <style>
   h1{
   		display: block;
   		width: 500px;
   		font-family: arial;
   		text-align: center;
   		margin: 30px auto;
   		background-color: #23282D;
   		color: white;
   		margin-bottom: 20px;
   }
   	ul {
   		display: block;
   		width: 500px;
   		margin:0px auto ;
   	}
  	ul li{
  		list-style-type: none;
  		margin-bottom: 20px;
  	}
    input{
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
  }
  label{
    font-family: arial;
  }

  </style>
</head>
<body>
  <header>
      <h1>TONGASOA !</h1>  
  </header>
	<form method="GET" action ="../action/action_connexion.php">
		<ul class="form.style">
			<li><label>Anarana : </label>
				<input type="text" name="anarana" class="anarana.f" placeholder="Anarana" />
			</li>

			<li><label>Fanampiny : </label>
				<input type="text" name="fanampiny" class="fanampiny.f" placeholder="Fanampiny" />
			</li>

			<li><label>Email : </label>
				<input type="text" name="email" class="email.f" placeholder="Email"/>
			</li>

			<li><label>Teny miafina : </label>
				<input type="password" name="password" class="email.f" placeholder="Teny miafina" />
			</li>

			<li>
				<input type="submit" value="connexion" class="submit" />
			</li>
	</form>
</body>
</html>