<?php
include_once "./archivos/files.php";

class Auto extends fileHandler{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;
    private $_id;


    public function __construct($id,$marca,$color,$precio = 0,$fecha = "" )
    {
        parent::__construct('auto.txt');
        $this->_color = $color;
        $this->_marca = $marca;
        $this->_precio = $precio; 
        $this->_fecha = $fecha;
        $this->_id=$id;
    }
    
    public function __get($name)
    {
        
    }
    public function GetColor(){
        return $this->_color;
    }
    public function GetPrecio(){
        return "$".$this->_precio;
    }
    public function GetFecha(){
        return $this->_fecha;
    }

    public function AgregarImpuestos($impuesto){
        $this->_precio += $impuesto;
    }

    public static function MostrarAuto($auto){

        $aux = "Marca: $auto->_marca"  ;
        $aux .= " Color: $auto->_color" ;
        $aux .= " Precio: $auto->_precio";
        $aux .= " Fecha: $auto->_fecha";

        return $aux;
    }
    public function Equals($auto){
        return $this->_marca == $auto->_marca;
    }

    public static function Add($a1, $a2){
        if ($a1->Equals($a2)&& $a1->_color==$a2->_color) {
            return $a1->_precio + $a2->_precio;
        }
        else{
            return 0;
        }
    }

    public function __toString()
    {
        return $this->_marca.'*'.$this->_color.'*'.$this->_precio.'*'.$this->_fecha;
    }
    public function Save(){
       return parent::SaveObject($this);
        
    }

    public static function ReadAll(){
        $list = parent::Read();
        $arrayAutos = array();
        if (count($list)>0) {
            foreach ($list as $key => $value) {
                if (count($value)>1) {
                    $auto = new Auto($value[0],$value[1],$value[3]);
                    array_push($arrayAutos,$auto);
                }
            }
        }
        return $arrayAutos;
    }



}