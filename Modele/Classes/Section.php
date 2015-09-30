<?php

/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 27/09/2015
 * Time: 16:00
 */
class Section
{
    private $id;
    private $lib;
    private $lib_long;
    private $bilan;
    private $suivi;
    private $nbAnnee;
    private $coef;
    private $totalCoef;
    private $dateImp;
    private $reps;
    private $secretaire;


    public function __construct($id, $lib, $lib_long, $bilan, $suivi, $nbAnnee, $coef, $totalCoef, $dateImp, $reps, $secretaire)
    {
        $this->id = $id;
        $this->lib = $lib;
        $this->lib_long = $lib_long;
        $this->bilan = $bilan;
        $this->suivi = $suivi;
        $this->nbAnnee = $nbAnnee;
        $this->coef = $coef;
        $this->totalCoef = $totalCoef;
        $this->dateImp = $dateImp;
        $this->reps = $reps;
        $this->secretaire = $secretaire;
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
    public function getLib()
    {
        return $this->lib;
    }

    /**
     * @return mixed
     */
    public function getLibLong()
    {
        return $this->lib_long;
    }

    /**
     * @return mixed
     */
    public function getBilan()
    {
        return $this->bilan;
    }

    /**
     * @return mixed
     */
    public function getSuivi()
    {
        return $this->suivi;
    }

    /**
     * @return mixed
     */
    public function getNbAnnee()
    {
        return $this->nbAnnee;
    }

    /**
     * @return mixed
     */
    public function getCoef()
    {
        return $this->coef;
    }

    /**
     * @return mixed
     */
    public function getTotalCoef()
    {
        return $this->totalCoef;
    }

    /**
     * @return mixed
     */
    public function getDateImp()
    {
        return $this->dateImp;
    }

    /**
     * @return mixed
     */
    public function getReps()
    {
        return $this->reps;
    }

    /**
     * @return mixed
     */
    public function getSecretaire()
    {
        return $this->secretaire;
    }


}