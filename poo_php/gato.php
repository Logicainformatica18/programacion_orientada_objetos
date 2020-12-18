<?php
require_once('animal.php');
class Gato extends Animal{
    protected $tamaniobigotes;

    public function __construct($persona,$nombre,$tamaniobigotes)
    {
        parent::__construct($persona,$nombre);
        $this->tamaniobigotes = $tamaniobigotes;
    }

    /**
     * Get the value of tamaniobigotes
     */ 
    public function getTamaniobigotes()
    {
        return $this->tamaniobigotes;
    }

    /**
     * Set the value of tamaniobigotes
     *
     * @return  self
     */ 
    public function setTamaniobigotes($tamaniobigotes)
    {
        $this->tamaniobigotes = $tamaniobigotes;

        return $this;
    }
    //polimorfismo
    public function getNombre()
    {
        return "polimorfismo " .$this->nombre;
    }
}