<?php

include("../connexion.php");

private class responsableDAO{
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
    /*Not needed here*/
   }

   function readResp($id) {
    $getResp = $dbConnect->prepare("SELECT nom_resp, prenom_resp FROM responsable WHERE no_resp = :id");
    $getResp->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getResp->execute();
    $result = $getResp->fetch();
    return $result;
   }

   function readPass($id) {
    $getResp = $dbConnect->prepare("SELECT lib_note FROM coefficient WHERE no_coef = :id");
    $getResp->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getResp->execute();
    $result = $getResp->fetch();
    return $result;
   }

   function readRespSection($id) {
    $getResp = $dbConnect->prepare("SELECT nom_resp, prenom_resp FROM responsable, section WHERE responsable.no_resp = section.no_responsable AND section.no_section = :id");
    $getResp->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getResp->execute();
    $result = $getResp->fetch();
    return $result;
   }

   function update() {
    /*Not needed here*/
   }

   function delete() {
    /*Not needed here*/
   }
 }