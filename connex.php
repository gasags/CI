<?php
session_start();
$isCo = false;
try
{
	$dbh = new PDO ('mysql:host=localhost;dbname=music', 'root');
	foreach($dbh->query('SELECT * FROM utilisateurs') as $user)
	{
		if(isset($_POST["tb_mail"]) && isset($_POST["tb_pwd"]))
		{
			if($_POST["tb_mail"] == $user["uti_mail"] && $_POST["tb_pwd"] == $user["uti_mdp"])
			{
				$isCo = true;
				$_SESSION['utilisateur'] = $user["uti_mail"];
				header('Location:index.php');
			}
		}
	}
	if(!$isCo)
	{
		header('Location:connexion.php?connexion=error');
	}
}
catch(PDOException $ex)
{
	print $ex->getmessage();
	//header('Location:connexion.php/error');
}
?>