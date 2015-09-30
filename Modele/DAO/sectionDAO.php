<?php

include("../connexion.php");

private class sectionDAO{
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

   function readLibelle($id) {
    $getCoef = $dbConnect->prepare("SELECT libelle_section FROM section WHERE no_section = :id");
    $getCoef->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getCoef->execute();
    $result = $getCoef->fetch();
    return $result;
   }

   function update() {
    /*Not needed here*/
   }

   function delete() {
    /*Not needed here*/
   }
 }