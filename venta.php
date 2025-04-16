<?php
class Venta{
    private $nummero;
    private $fecha;
    private $objCliente;
    private $coleccionDMotos;
    private $precioFinal;
    
    public function __construc($num,$fecha,$objCli,$colDMoto,$pFinal){

    $this->numero=$num;
    $this->fecha=$fecha;
    $this->objCliente=$objCli;
    $this->coleccionDMotos=$colDMoto;
    $this->precioFinal=$pFinal;
     
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getObjCliente(){
        return $this->objCliente;
    }

    public function getColeccionDMotos(){
        return $this->coleccionDMotos;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function setNumero($num){
        $this->numero=$num;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function setObjCliente($objCli){
        $this->objCliente=$objCli;
    }

    public function setColeccionDMotos($colDMoto){
        $this->coleccionDMotos=$colDMoto;
    }

    public function setPrecioFinal($pFinal){
        $this->precioFinal=$pFinal;
    }

    public function __toString(){
        $cadena="Venta: ". $this->getNumero."\n";
        $cadena .="Fecha: ".$this->getFecha."\n";
        $cadena .="Refercencia al cliente: ".$this->getObjCliente."\n";
        $cadena .="Coleccion de motos: ---- \n".$this->getColeccionDMotos."---- "."\n";
        $cadena .="Precio final".$this->getPrecioFinal."\n";
         return $cadena;
    }

    
}
