<?php
	class Calbum
	{
		public $nom;
		public $annee;
		public $prix;
		public $artiste;

		public function __construct($sNom, $sAnnee, $sPrix, $sArtiste)
		{
			$this->nom = $sNom;
			$this->annee = $sAnnee;
			$this->prix = $sPrix;
			$this->artiste = $sArtiste;
		}
	}
?>