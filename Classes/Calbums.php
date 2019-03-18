<?php
	require_once 'Calbum.php';
	class Calbums
	{
		public static function getAlbum()
		{
			$Albums = array();
			try
			{
				$dbh = new PDO ('mysql:host=localhost;dbname=music', 'root');
				$query = "SELECT * FROM albums INNER JOIN artistes ON albums.alb_art = artistes.art_id";
				foreach($dbh->query($query) as $album)
				{
					$oAlbum = new Calbum($album["alb_nom"], $album["alb_annee"], $album["alb_prix"], $album["art_nom"]);
					array_push($Albums, $oAlbum);
				}
			}
			catch(PDOException $ex)
			{
				print $ex->getmessage();
			}

			return $Albums;
		}

		public function getAlbumsByArtist($artiste)
		{
			/*$select = $dbh->prepare("SELECT * FROM albums
									 INNER JOIN artistes
									 ON albums.alb_art = artistes.art_nom
									 WHERE albums.alb_art = :artiste")
			$select->bindParam(':artiste', $artiste);
			$select->execute();*/
		}
	}
?>