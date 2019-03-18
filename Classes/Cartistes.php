<?php
	require_once 'Cartiste.php';

	class Cartistes
	{
		public static function getArtistes()
		{
			$Artistes = array();
			try
			{
				$dbh = new PDO ('mysql:host=localhost;dbname=music', 'root');
				$query = "SELECT * FROM artistes 
						  INNER JOIN pays ON artistes.art_pays = pays.pay_pays 
						  INNER JOIN genres ON artistes.art_genre = genres.gen_genre ";
				foreach($dbh->query($query) as $artiste)
				{
					$oArtiste = new Cartiste($artiste["art_nom"], $artiste["art_typ"], $artiste["pay_libelle"], $artiste["gen_libelle"]);
					array_push($Artistes, $oArtiste);
				}
			}
			catch(PDOException $ex)
			{
				print $ex->getmessage();
			}

			return $Artistes;
		}
	}
?>