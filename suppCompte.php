<?php
	session_start();

	try
	{
		$dbh = new PDO ('mysql:host=localhost;dbname=music', 'root');
		$delete = $dbh->prepare('DELETE FROM utilisateurs
								 WHERE uti_mail = :mail ');
		$delete->bindParam(':mail', $_SESSION['utilisateur']);
		$delete->execute();

		session_destroy();
		header('location:connexion.php');
	}
	catch(PDOException $ex)
	{
		print $ex->getmessage();
	}
?>