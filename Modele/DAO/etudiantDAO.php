<?php

include("../connexion.php");

private class etudiantDAO{
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


   function create() {
    /*Not necessary here*/
   }

   function readEtudiant($id) {
    $getEtud = $dbConnect->prepare("SELECT nom, prenom FROM etudiant WHERE no_etud = :id");
    $getEtud->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getEtud->execute();
    $result = $getEtud->fetch();
    return $result;
   }

   function readIdEtudiant($nom,$prenom) {
    $getEtud = $dbConnect->prepare("SELECT $no_etud FROM etudiant WHERE nom=:nom AND prenom=:prenom");
    $getEtud->bindParam(':nom', $nom, PDO::PARAM_VARCHAR);
    $getEtud->bindParam(':prenom', $prenom, PDO::PARAM_VARCHAR);
    $getEtud->execute();
    $result = $getEtud->fetch();
    return $result;
   }

   function readEtudiantSection($id) {
    $getEtud = $dbConnect->prepare("SELECT nom, prenom FROM etudiant WHERE no_section = :id");
    $getEtud->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getEtud->execute();
    $result = $getEtud->fetch();
    return $result;
   }

   function readEtudiantSoutenance($id) {
    $getEtud = $dbConnect->prepare("SELECT nom, prenom FROM etudiant, soutenance WHERE etudiant.no_etud = soutenance.no_etud AND soutenance.no_sout=:id");
    $getEtud->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getEtud->execute();
    $result = $getEtud->fetch();
    return $result;
   }

   function update() {
    /*Not necessary here*/
   }

   function delete() {
    /*Not necessary here*/
   }
 }