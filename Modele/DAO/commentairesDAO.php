<?php

include("../connexion.php");

private class commentairesDAO{
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


   function create($commentaire) {
    $create = $dbConnect->prepare("INSERT INTO commentaires (no_com,commentaire) SET (0,:commentaire)");
    $create->bindParam(':commentaire', $commentaire, PDO::PARAM_VARCHAR);
    $create->execute();
   }

   function readCom($id) {
    $getCom = $dbConnect->prepare("SELECT commentaire FROM commentaires WHERE no_com = :id");
    $getCom->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getCom->execute();
    $result = $GetCom->fetch();
    return $result;
   }

   function updateCom($id,$commentaire) {
    $update = $dbConnect->prepare("UPDATE commentaires SET commentaire = $commentaire WHERE no_com = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function delete($id) {
    $delete = $dbConnect->prepare("DELETE commentaires FROM commentaires WHERE no_com = :id");
    $delete->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $delete->execute();
   }
 }