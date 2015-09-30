<?php

/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 27/09/2015
 * Time: 16:11
 */
class Stage
{
    private $id;
    private $lieu;
    private $sujet;
    private $motclé;
    private $dateVerfi;
    private $tuteur;
    private $adrVerfi;
    private $soutenance;
    private $tauxEnc;

    public function __construct($id, $lieu, $sujet, $motclé, $dateVerfi, $tuteur, $adrVerfi, $soutenance, $tauxEnc)
    {
        $this->id = $id;
        $this->lieu = $lieu;
        $this->sujet = $sujet;
        $this->motclé = $motclé;
        $this->dateVerfi = $dateVerfi;
        $this->tuteur = $tuteur;
        $this->adrVerfi = $adrVerfi;
        $this->soutenance = $soutenance;
        $this->tauxEnc = $tauxEnc;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @return mixed
     */
    public function getMotclé()
    {
        return $this->motclé;
    }

    /**
     * @return mixed
     */
    public function getDateVerfi()
    {
        return $this->dateVerfi;
    }

    /**
     * @return mixed
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * @return mixed
     */
    public function getAdrVerfi()
    {
        return $this->adrVerfi;
    }

    /**
     * @return mixed
     */
    public function getSoutenance()
    {
        return $this->soutenance;
    }

    /**
     * @return mixed
     */
    public function getTauxEnc()
    {
        return $this->tauxEnc;
    }

}