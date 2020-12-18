<?php
class Persona{
    protected $idpersona;
    public $nombre;
    protected $paterno;
    protected $materno;
public function __construct($nombre)
{
    $this->nombre = $nombre;
}

  public function getNombre(){
      return $this->nombre;
  }
 

    /**
     * Get the value of idpersona
     */ 
    public function getIdpersona()
    {
        return $this->idpersona;
    }

    /**
     * Set the value of idpersona
     *
     * @return  self
     */ 
    public function setIdpersona($idpersona)
    {
        $this->idpersona = $idpersona;

        return $this;
    }

    /**
     * Get the value of paterno
     */ 
    public function getPaterno()
    {
        return $this->paterno;
    }

    /**
     * Set the value of paterno
     *
     * @return  self
     */ 
    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;

        return $this;
    }

    /**
     * Get the value of materno
     */ 
    public function getMaterno()
    {
        return $this->materno;
    }

    /**
     * Set the value of materno
     *
     * @return  self
     */ 
    public function setMaterno($materno)
    {
        $this->materno = $materno;

        return $this;
    }
}