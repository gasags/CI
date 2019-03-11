<?php
	$file = file_get_contents("listeLogin.json");
	$jsonParse = json_decode($file, true);

	$login = $_POST["login"];
	$isForbidden = false;

	foreach($jsonParse["forbidden"] as $word)
	{
		if(preg_match("#$word#i", "$login"))
		{
			$isForbidden = true;
		}
	}

	if($isForbidden)
	{
		header('Location:creationUtilisateur.php?create=error');
	}
	else
	{
		header('Location:creationUtilisateur.php');
	}
?>