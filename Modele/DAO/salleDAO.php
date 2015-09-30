<?php

include("../connexion.php");

private class salleDAO{
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
    /*Not currently needed*/
   }

   function readSalle($id) {
    $getSalle = $dbConnect->prepare("SELECT nom_salle FROM salle WHERE no_salle = :id");
    $getSalle->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getSalle->execute();
    $result = $getSalle->fetch();
    return $result;
   }

   function update() {
    /*
    Not currently needed
    */
   }

   function delete() {
    /*
    Not currently needed
    */
   }
 }