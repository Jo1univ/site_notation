<?php

include("../connexion.php");

private class coefficientsDAO{
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

   }

   function readCoef($id) {
    $getCoef = $dbConnect->prepare("SELECT coefficient FROM coefficient WHERE no_coef = :id");
    $getCoef->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getCoef->execute();
    $result = $getCoef->fetch();
    return $result;
   }

   function readLib($id) {
    $getCoef = $dbConnect->prepare("SELECT lib_note FROM coefficient WHERE no_coef = :id");
    $getCoef->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getCoef->execute();
    $result = $getCom->fetch();
    return $result;
   }

   function readAll($id) {
    $getCoef = $dbConnect->prepare("SELECT * FROM coefficient WHERE no_coef = :id");
    $getCoef->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getCoef->execute();
    $result = $getCom->fetch();
    return $result;
   }

   function update() {

   }

   function delete() {

   }
 }