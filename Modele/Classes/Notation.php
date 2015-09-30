<?php
class Notation{
   private $id ;
    private $penalite1;
	private $penalite2;
	private $noteSoutenance;
	private $noteRapport;
	private $noteTechnique;
	private $noteAnglais;
	
	public function __construct(){
		$ctp = func_num_args();
		$args = func_get_args();
		switch($ctp)
		{
			case 7:
				$this->Const7($args[0],$args[1],$args[2],$args[3],$args[4],$args[5],$args[6]);
            break;
			default:
				break;
		}


	}

	public function Const7($id, $pen1, $pen2,$soutenance,$rapport, $technique,$anglais){
		$this->id = $id;
		$this->penalite1 = $pen1;
		$this->penalite2 = $pen2;
		$this->noteSoutenance = $soutenance ;
		$this->noteRapport = $rapport ;
		$this->noteTechnique = $technique ;
		$this->noteAnglais = $anglais ;

	}
	
	function getId(){
		return $this->id ;
	}
	
	function getPenalite1(){
		return $this->penalite1 ;
	}
	
	function getPenalite2(){
		return $this->penalite2 ;
	}
	
	function getNoteSoutenance(){
		return $this->noteSoutenance ;
	}
	
	function getNoteRapport(){
		return $this->noteRapport ;
	}
	
	function getNoteTechnique(){
		return $this->noteTechnique;
	}
	
	function getNoteAnglais(){
		return $this->noteAnglais ;
	}
	
	function calculNoteExpcom($coefR, $coefS){
		//calcul de la note d'expre. com.  : moyenne des notes de soutenance et d'anglais
		$rap = getNoteRapport();
		$stnce = getNoteSoutenance();
		$crap = $coefR->getVal();
		$cstnce = $coefS->getVal();
		
		return ($rap * $crap + $stnce * $cstnce)/ ($crap+$stnce) ;
	}
	
	function calculNoteStage($coefS, $coefR, $coefT){
		//calcul de la note d'expre. com.  : moyenne des notes de soutenance et d'anglais
        $rap = getNoteRapport();
        $stnce = getNoteSoutenance();
        $tech = getNoteTechnique();
        $ctech = $coefT->getVal();
        $crap = $coefR->getVal();
        $cstnce = $coefS->getVal();
		
		return ($rap * $crap + $stnce * $cstnce + $tech * $ctech)/ ($crap+$stnce+$tech) ;
	}
	
	
}
?>