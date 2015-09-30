<?php

include("../connexion.php");
include("salleDAO.php")

private class juryDAO{
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

   function readJury($id) {
    $getJury = $dbConnect->prepare("SELECT nom, prenom FROM encadrant, jury WHERE no = :id");
    $getJury->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getJury->execute();
    $result = $GetJury->fetch();
    return $result;
   }

   function readPres($id) {
    $getJury = $dbConnect->prepare("SELECT nom, prenom FROM encadrant, jury WHERE no = :id AND jury.no_pdt=encadrant.no_enc");
    $getJury->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getJury->execute();
    $result = $GetJury->fetch();
    return $result;
   }

   function readEns($id) {
    $getJury = $dbConnect->prepare("SELECT nom, prenom FROM encadrant, jury WHERE no = :id AND jury.no_ens2=encadrant.no_enc");
    $getJury->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getJury->execute();
    $result = $GetJury->fetch();
    return $result;
   }

   function readExpCom($id) {
    $getJury = $dbConnect->prepare("SELECT nom, prenom FROM encadrant, jury WHERE no = :id AND jury.no_expcom=encadrant.no_enc ");
    $getJury->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getJury->execute();
    $result = $GetJury->fetch();
    return $result;
   }

   function readSalleJury($id) {
    $getJury = $dbConnect->prepare("SELECT no_salle FROM jury WHERE no = :id");
    $getJury->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getJury->execute();
    $result = $GetJury->fetch();
    $result=readSalle($result);
    return $result;
   }

   function update() {
    /*Not necessary here*/
   }

   function delete() {
    /*Not necessary here*/
   }
 }