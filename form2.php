<?php


	if(!empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['email']))
	{
		$pseudo  = $_POST['pseudo'];
		$pass_hache	 = sha1($_POST['password']);
		$email = $_POST['email'];

		$bdd= mysqli_connect('127.0.0.1','root','root','blog');

		if ($bdd->connect_errno) {
    		printf("Échec de la connexion : %s\n", mysqli_connect_error());
    		exit();
			}




		$req= $bdd->prepare('INSERT INTO membre(pseudo,password,email) VALUES(:pseudo,:password,:email)');
		$req->execute(array(
			':pseudo' 	=> $pseudo,
			':password'	=> $pass_hache,
			':email' 	=> $email));
	}

	else
	{
?>
		<script language="javascript">

			if (confirm("Il manque des informations !"))
			{
				document.location.href="registration.php"
			}
			else
			{
				document.location.href="registration.php"
			}

		</script>
		<?php
	}
?>