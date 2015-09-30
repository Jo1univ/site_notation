<?php

include("../connexion.php");
include("commentairesDAO.php")
include("etudiantDAO.php")

private class notationDAO{
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


  //Create
   function create($libelle,$coefficient) {
    $create = $dbConnect->prepare("INSERT INTO notation (no_note,note_soutenance,note_rapport, note_technique,note_stage,no_com_stage,note_expCom,no_com_expCom,note_eng,no_com_eng,penalite1,no_com_penalite1,penalite2,no_com_penalite1) VALUES (0,'','','','',XXX,'',XXX,'',XXX,0,XXX,0,XXX)");
    $create->execute();
   }



   //Read
   function read3Note($id) {
    $getNote = $dbConnect->prepare("SELECT note_soutenance, note_rapport, note_technique FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    return $result;
   }

   function read3NoteEtudiant($nom,$prenom) {
    $idEtud=readIdEtudiant($nom,$prenom);
    $getNote = $dbConnect->prepare("SELECT note_soutenance, note_rapport, note_technique FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    return $result;
   }

   function readNoteEng($id) {
    $getNote = $dbConnect->prepare("SELECT note_eng FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    return $result;
   }

   function readNoteStage($id) {
    $getNote = $dbConnect->prepare("SELECT note_stage FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    return $result;
   }

   function readNoteExpCom($id) {
    $getNote = $dbConnect->prepare("SELECT note_expCom FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    return $result;
   }

   function readPenalite($id) {
    $getNote = $dbConnect->prepare("SELECT penalite1, penalite2 FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    return $result;
   }

   function readCommentStage($id) {
    $getNote = $dbConnect->prepare("SELECT no_com_stage FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    $result = readCom($result);
    return $result;
   }

   function readCommentEng($id) {
    $getNote = $dbConnect->prepare("SELECT no_com_eng FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    $result = readCom($result);
    return $result;
   }

   function readCommentExpCom($id) {
    $getNote = $dbConnect->prepare("SELECT no_com_expCom FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    $result = readCom($result);
    return $result;
   }

   function readCommentPenalite1($id) {
    $getNote = $dbConnect->prepare("SELECT no_com_penalite1 FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    $result = readCom($result);
    return $result;
   }

   function readCommentPenalite2($id) {
    $getNote = $dbConnect->prepare("SELECT no_com_penalite2 FROM notation WHERE no_note = :id");
    $getNote->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $getNote->execute();
    $result = $getNote->fetch();
    $result = readCom($result);
    return $result;
   }



   //Update
   function updateComStage($id,$commentaire) {
    $idCom=readCommentStage($id);
    updateCom($idCom,$commentaire);
   }

   function updateComExpCom($id,$commentaire) {
    $idCom=readCommentExpCom($id);
    updateCom($idCom,$commentaire);
   }

   function updateComEng($id,$commentaire) {
    $idCom=readCommentEng($id);
    updateCom($idCom,$commentaire);
   }

   function updateComPenalite1($id,$commentaire) {
    $idCom=readCommentPenalite1($id); 
    updateCom($idCom,$commentaire);
   }

   function updateComPenalite2($id,$commentaire) {
    $idCom=readCommentPenalite2($id); 
    updateCom($idCom,$commentaire);
   }

   function updateNoteTechnique($id,$note){
    $update = $dbConnect->prepare("UPDATE notation SET note_technique = $note WHERE no_note = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function updateNoteRapport($id,$note){
    $update = $dbConnect->prepare("UPDATE notation SET note_rapport = $note WHERE no_note = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function updateNoteSoutenance($id,$note){
    $update = $dbConnect->prepare("UPDATE notation SET note_soutenance = $note WHERE no_note = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function updateNoteStage($id,$note){
    $update = $dbConnect->prepare("UPDATE notation SET note_stage = $note WHERE no_note = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function updateNoteExpCom($id,$note){
    $update = $dbConnect->prepare("UPDATE notation SET note_expCom = $note WHERE no_note = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function updateNoteEng($id,$note){
    $update = $dbConnect->prepare("UPDATE notation SET note_eng = $note WHERE no_note = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function updatePenalite1($id,$penalite){
    $update = $dbConnect->prepare("UPDATE notation SET penalite1 = $penalite WHERE no_note = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   function updatePenalite1($id,$penalite){
    $update = $dbConnect->prepare("UPDATE notation SET penalite1 = $penalite WHERE no_note = :id");
    $update->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $update->execute();
   }

   //Delete
   function delete($id) {
    $delete = $dbConnect->prepare("DELETE notation FROM notation WHERE no_note = :id");
    $delete->bindParam(':id', $id, PDO::PARAM_VARCHAR);
    $delete->execute();
   }
 }