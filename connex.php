<?php
session_start();
$isCo = false;
$login = $_POST["login"];
$password = $_POST["tb_pwd"];

try
{
	$dbh = new PDO ('mysql:host=localhost;dbname=music', 'root');
	foreach($dbh->query('SELECT * FROM utilisateurs') as $user)
	{
		if($login == $user["uti_login"] && $password == $user["uti_mdp"])
		{
			$isCo = true;
			$_SESSION['utilisateur'] = $user["uti_mail"];
			header('Location:index.php');
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