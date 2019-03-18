<?php
	class Cartiste
	{
		public $nom;
		public $type;
		public $pays;
		public $genre;

		public function __construct($sNom, $sType, $sPays, $sGenre)
		{
			$this->nom = $sNom;
			if($sType == "G")
			{
				$this->type = "Groupe";
			}
			else if($sType == "S")
			{
				$this->type = "Solo";
			}
			$this->pays = $sPays;
			$this->genre = $sGenre;
		}
	}
?>