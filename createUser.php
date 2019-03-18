<?php
	$login = $_POST["login"];
	$password = $_POST["tb_pwd"];
	$password2 = $_POST["tb_pwd2"];
	$mail = $_POST["mail"];
	$dateInscription = date("Y-m-d");

	if(validLogin($login))
	{
		if(validPassword($password, $password2))
		{
			if(validMail($mail))
			{
				try
				{
					$dbh = new PDO ('mysql:host=localhost;dbname=music', 'root');

					$insert = $dbh->prepare('INSERT INTO utilisateurs (uti_login, uti_mdp, uti_mail, uti_dateInscription) 
											 VALUES (:login, :pwd, :mail, :dateInscription)');
					$insert->bindParam(':login', $login);
					$insert->bindParam(':pwd', $password);
					$insert->bindParam(':mail', $mail);
					$insert->bindParam(':dateInscription', $dateInscription);
					$insert->execute();
				}
				catch(PDOException $ex)
				{
					print $ex->getmessage();
				}
				header('Location:index.php');
			}
			else
			{
				header('Location:creationUtilisateur.php?create=errorMail');
			}
		}
		else
		{
			header('Location:creationUtilisateur.php?create=errorPwd');
		}
	}
	else
	{
		header('Location:creationUtilisateur.php?create=errorLogin');
	}
	

	function validLogin($login)
	{
		$file = file_get_contents("listeLogin.json");
		$jsonParse = json_decode($file, true);

		foreach($jsonParse["forbidden"] as $word)
		{
			if(preg_match("#$word#i", "$login"))
			{
				return false;
			}
		}
		return true;
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

	function validMail($mail)
	{
		$dbh = new PDO ('mysql:host=localhost;dbname=music', 'root');
		
		foreach($dbh->query('SELECT uti_mail FROM utilisateurs') as $user)
		{
			if($mail == $user["uti_mail"])
			{
				return false;
			}
		}
		return true;
	}
	
?>