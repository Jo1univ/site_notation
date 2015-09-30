<?php

/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 27/09/2015
 * Time: 16:16
 */
class Coef
{
    private $id;
    private $libNote;
    private $val;

    /**
     * Coef constructor.
     * @param $id
     * @param $libNote
     * @param $val
     */
    public function __construct($id, $libNote, $val)
    {
        $this->id = $id;
        $this->libNote = $libNote;
        $this->val = $val;
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
    public function getLibNote()
    {
        return $this->libNote;
    }

    /**
     * @param mixed $libNote
     */
    public function setLibNote($libNote)
    {
        $this->libNote = $libNote;
    }

    /**
     * @return mixed
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * @param mixed $val
     */
    public function setVal($val)
    {
        $this->val = $val;
    }


}