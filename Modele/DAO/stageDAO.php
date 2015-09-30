<?php

include("../connexion.php");

private class stageDAO{
   var $conn;

    /*public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        if ($this->connection === null) {
            $this->connection = new PDO(
                    'mysql:host=localhost;dbname=pdo_example', 
                    'root', 
                    'root'
                );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE, 
                PDO::ERRMODE_EXCEPTION
            );
        }
    }*/

/*if(($result = $GetDate->fetch()) !== false){
  return $result;
 }
 else {
  / requete échouée, voir ce qu'on fait à ce moment là /
 }*/




   function create($libelle,$coefficient) {
    /*Not needed here*/
   }

   function readStageEtudiant($nom,$prenom) {
    $getStage = $dbConnect->prepare("SELECT sujet FROM stage, etudiant WHERE stage.no_etud=etudiant.no_etud AND etudiant.nom=:nom AND etudiant.prenom=:prenom");
    $getStage->bindParam(':nom', $nom, PDO::PARAM_VARCHAR);
    $getStage->bindParam(':prenom', $prenom, PDO::PARAM_VARCHAR);
    $getStage->execute();
    $result = $getStage->fetch();
    return $result;
   }

   function readStageJury($no_jury) {
    $getStage = $dbConnect->prepare("SELECT sujet FROM stage, etudiant, soutenance, jury WHERE stage.no_etud=etudiant.no_etud AND etudiant.no_etud=soutenance.no_etud AND soutenance.no_jury=jury.no AND jury.no=:no_jury");
    $getStage->bindParam(':no_jury', $no_jury, PDO::PARAM_VARCHAR);
    $getStage->execute();
    $result = $getStage->fetch();
    return $result;
   }

   function update($coefficient) {
    /*Not needed here*/
   }

   function delete(&$vo) {
    /*Not needed here*/
   }
 }