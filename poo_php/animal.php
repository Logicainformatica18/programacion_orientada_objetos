<?php
class Animal{
    private $idanimal;
    protected $nombre;
    public $persona;

    public function __construct($persona,$nombre){
        $this->persona=$persona;
        $this->nombre = $nombre;
    }
 
    public function getNombre()
    {
        return $this->nombre;
    }
}