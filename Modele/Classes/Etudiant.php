<?php 
class Etudiant extends Personne{ 
		private $anneediplome;
		
		function __construct($id,$nom,$prenom,$mail,$annee){
			parent::__construct($id,$nom,$prenom,$mail);
			$this->anneediplome = $annee ;

		}
		
		function getAnnee(){
			return $this->anneediplome ;
		}
		
	}
?>