<?php

include_once "./ejercicio17.php";

class Garage{
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos ;

    public function __construct($razonSocial,$precio = 0)
    {
        $this->_razonSocial=$razonSocial;
        $this->_precioPorHora=$precio;
        $this->_autos= array();
    }
    public function MostrarGarage(){

    }
    public function Equals($auto){
       
        foreach ($this->_autos as $value) {
           if($value->Equals($auto))
           {
                return true;
           }else{
               return false;
           }
        }
    }
    public function Add($auto){
        if (!this->Equals($auto)) {
            array_push($this->_autos,$auto);
        }
    }
}