<?php

echo "<br/>";
echo "Ejercicio15";
echo "<br/>";

abstract class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    public function __construct()
    {
        
    }

    public function GetColor(){
        return $this->_color;
    }

    public function SetColor($color){
        $this->_color = $color;
    }

    public abstract function Dibujar();

    protected abstract function CalcularDatos();

    public function __toString(){
        return "a" ;
    }

}

class Rectangulo extends FiguraGeometrica{
    private $_ladoDos;
    private $_ladoUno;

    public function __construct($l1,$l2)
    {
        $this->_ladoUno = $l1;
        $this->_ladoDos = $l2;
        $this->CalcularDatos();
    }
    protected function CalcularDatos()
    {
        $this->_superficie = $this->_ladoUno * $this->_ladoDos;
        $this->_perimetro = 2*($this->_ladoUno + $this->_ladoDos);
    }
    public function Dibujar()
    {
        $figura = "";
        for ($i=0; $i < $this->_ladoUno;  $i++) { 
            for ($j=0; $j <$this->_ladoDos ; $j++) { 
                $figura .= '*';
            }
            $figura .= "<br />";
        }
        return $figura;
    }
    public function __toString()
    {
        
    }
}



