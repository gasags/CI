<?php
$isCo = false;
print $isCo;
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
				header('Location:accueil.php');
			}
		}
	}
	if(!$isCo)
	{
		header('Location:connexion.php');
	}
}
catch(PDOException $ex)
{
	print $ex->getmessage();
	//header('Location:connexion.php/error');
}
?>