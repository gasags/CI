<?php
	session_start();

	$password = $_POST["tb_pwd"];
	$password2 = $_POST["tb_pwd2"];

	if(validPassword($password, $password2))
	{
		$dbh = new PDO ('mysql:host=localhost;dbname=music', 'root');
		$update = $dbh->prepare('UPDATE utilisateurs
					   SET uti_mdp = :password
					   WHERE uti_mail = :mail');
		$update->bindParam(':password', $password);
		$update->bindParam(':mail', $_SESSION["utilisateur"]);
		$update->execute();

		header('location:gestionCompte.php?modif=ok');
	}
	else
	{
		header('location:gestionCompte.php?modif=errorPwd');
	}

	function validPassword($pwd, $pwd2)
	{
		if($pwd == $pwd2)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>