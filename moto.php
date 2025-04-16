<?php
class Moto{
    private $codigo;
    private $costo;
    private $anioFab;
    private $descripcion;
    private $porctIA;
    private $activa;

    public function __construct($codigo,$costo,$anioFab,$descripcion,$porctIA,$activa){
        $this->codigo=$cod;
        $this->costo=$cost;
        $this->anioFab=$anioF;
        $this->descripcion=$descri;
        $this->porctIA=$xIA;
        $this->activa=$acti;
    }

    
    public function getCodigo(){
        return $this->codigo;
    }

    
    public function getCosto(){
        return $this->costo;
    }

    public function getAnioFab(){
        return $this->aniofab;
    }

    public function getDescripcion(){
        return $this->getDescripcion;
    }

    public function getPorctIA(){
        return $this->porctIa;
    }

    public function getActiva(){
        return $this->activa;
    }

    public function setCodigo($cod){
        $this->codigo=$cod;
    }

    public function setCosto($cost){
        $this->costo=$cost;
    }

    public function setAnioFab($anioF){
        $this->aniofab=$anioF;
    }

    public function setDescripcion($descri){
        $this->descripcion=$descri;
    }

    public function setPorctIA($xIA){
        $this->porctIA=$xIA;
    }

    public function setActiva($acti){
        $this->activa=$acti;
    }

    public function darPrecioVenta(){
        $_venta=-1;

        if($this->getActiva()=="false"){
            $_venta=-1;
        }else{
  
            $_anio=date("Y")-$this->getAnioFab();
            $_venta = $this->getCosto()+($this->getCosto()*($_anio*$this->getPorctIA()));
        }
        return $_venta;
    }

    public function __toString(){
        $cadena="Codigo: ". $this->getCodigo."\n ";
        $cadena=$cadena. "Costo: ".$this->getCosto."\n";
        $cadena=$cadena. "Año de fabricación: ".$this->getAnioFab."\n ";
        $cadena=$cadena. "Descripcion: ".$this->getDescripcion."\n";
        $cadena=$cadena. "Porcentaje de incremento anual: ".$this->getPorctIA."\n";
        $cadena=$cadena. "Activa".$this->getActiva."\n";

        return $cadena;

    }
}
