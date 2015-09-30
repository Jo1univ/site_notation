<?php

include("../connexion.php");

private class soutenanceDAO{
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

   function readHeure($id) {
    $getHeure = $dbConnect->prepare("SELECT heure FROM soutenance WHERE no_sout = :id");
    $getHeure->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getHeure->execute();
    $result = $getHeure->fetch();
    return $result;
   }

   function update() {
    /*Not currently needed*/
   }

   function delete() {
    /*Not currently needed*/
   }
 }