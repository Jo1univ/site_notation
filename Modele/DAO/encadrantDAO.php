<?php

include("../Connexion/connexion.php");

class encadrantDAO{
   //var $conn;

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
    /*Not needed here*/
   }

   function readAll() {
       global $bdd;
    $getEnc = $bdd->prepare("SELECT nomenc,prenomenc FROM encadrant");
    $getEnc->execute();
    $result = $getEnc->fetch();
      // $enc = new Encadrant($);
    return $result;
   }

   function readEncadrant($id) {
    $getEnc = $dbConnect->prepare("SELECT nomenc,prenomenc FROM encadrant WHERE no_enc = :id");
    $getEnc->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getEnc->execute();
    $result = $GetEnc->fetch();
    return $result;
   }

   function readEncadrantMdp($mdp) {
    $getEnc = $dbConnect->prepare("SELECT nomenc,prenomenc FROM encadrant WHERE mdp_encadrant = :mdp");
    $getEnc->bindParam(':mdp', $id, PDO::PARAM_VARCHAR);
    $getEnc->execute();
    $result = $GetEnc->fetch();
    return $result;
   }

   function update() {
    /*Not needed here*/
   }

   function delete() {
    /*Not needed here*/
   }
 }