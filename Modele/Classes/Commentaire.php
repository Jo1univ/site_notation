<?php


class Commentaire
{
    private $id;
    private $txt;

    public function __construct($id, $txt)
    {
        $this->id = $id;
        $this->txt = $txt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTxt()
    {
        return $this->txt;
    }

    public function setTxt($txt)
    {
        $this->txt = $txt;
    }


}