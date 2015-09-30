<?php

/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 27/09/2015
 * Time: 15:56
 */
class Jury
{
    private $id;
    private $noOrdre;
    private $presidant;
    private $encadrant1;
    private $encadrant2;


    public function __construct($encadrant2, $id, $noOrdre, $presidant, $encadrant1)
    {
        $this->encadrant2 = $encadrant2;
        $this->id = $id;
        $this->noOrdre = $noOrdre;
        $this->presidant = $presidant;
        $this->encadrant1 = $encadrant1;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNoOrdre()
    {
        return $this->noOrdre;
    }

    public function getPresidant()
    {
        return $this->presidant;
    }

    public function getEncadrant1()
    {
        return $this->encadrant1;
    }

    public function getEncadrant2()
    {
        return $this->encadrant2;
    }


}