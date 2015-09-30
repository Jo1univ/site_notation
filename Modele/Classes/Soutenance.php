<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 27/09/2015
 * Time: 15:52
 */
class Soutenance{

    private $id;
    private $heure;

    public function __construct($heure, $id)
    {
        $this->heure = $heure;
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getHeure()
    {
        return $this->heure;
    }
}

?>