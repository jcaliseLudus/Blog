<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Skyrock Blog</title>
	<link rel="stylesheet" href="styleblog.css">
</head>

<body>

<?php

$mysqli = new mysqli("localhost", "user", "password", "database");
if($mysqli->connect_errno){
	echo "Echec lors de la connexion à Mysql (".$mysqli->connect_errno.")".$mysqli->connect_error;
}


$filepath = 'historique.txt';
if(file_exists($filepath)){
	$handle = fopen($filepath,'r+');
	if($handle)
	{
		while (!feof($handle))
		{
			$buffer = fgets($handle);
			echo "$buffer</br>";
		}
		fclose($handle);
	}
}

else
{
	$handle = fopen('historique.txt','w+');
}




?>


</body>

<footer>

	<div class="form1">
	<form method="POST" action="form.php">

		<label for="pseudo">Pseudo</label>
		<input type="text" name="pseudo" id="pseudo"></br>

		<label for="titre">Titre</label>
		<input type="text" name="titre" id="titre"/> </br>

		<input type="submit" value="Envoyer">


		<label for="message">Message</label>
		<textarea name="Message" rows="20" cols="60" onclick="javascript:this.innerHTML = '';">Saisir votre message ici</textarea>
		
	</form>
	</div>

</footer>	
</html>















