<?php

include("../connexion.php");

private class calendrierDAO{
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

   function readAnnee($id,$date) {
    $getAnnee = $dbConnect->prepare("SELECT annee_diplome FROM calendrier WHERE no_section = :id AND date=:date");
    $getAnnee->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getAnnee->bindParam(':date', $date, PDO::PARAM_VARCHAR);
    $getAnnee->execute();
    $result = $GetAnnee->fetch();
    return $result;
   }

   function readDate($id,$date) {
    $getDate = $dbConnect->prepare("SELECT date FROM calendrier WHERE no_section = :id AND annee_diplome=:annee");
    $getAnnee->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getAnnee->bindParam(':annee', $annee, PDO::PARAM_VARCHAR);
    $getDate->execute();
    $result = $GetDate->fetch();
    return $result;
   }

   function update($date,$id,$annee) {
    $update = $dbConnect->prepare("UPDATE calendrier SET date = $date WHERE no_section = :id AND annee_diplome=:annee");
    $getAnnee->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getAnnee->bindParam(':annee', $annee, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function delete($date,$id,$annee) {
    $delete = $dbConnect->prepare("DELETE * FROM calendrier WHERE date = $date AND no_section = :id AND annee_diplome=:annee");
    $getAnnee->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getAnnee->bindParam(':annee', $annee, PDO::PARAM_VARCHAR);
    $delete->execute();
   }
 }