<?php

include("../connexion.php");

private class evenementDAO{
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

   function readEvent($id) {
    $getEvt = $dbConnect->prepare("SELECT lib_evt FROM evenement WHERE no_evt = :id");
    $getEvt->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getEvt->execute();
    $result = $GetEvt->fetch();
    return $result;
   }

   function update() {
    /*Not necessary here*/
   }

   function delete() {
    /*Not necessary here*/
   }
 }