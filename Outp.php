<?php

echo 'hola mundo'

class Cuadrado{
    public $arista;

    public function __construc($arista){
        $this->arista = $arista;
    } 

    public function setArista($value){
        $this->arista= $value;

    }

    public function getArista(){
        return $this->arista;
    }
}

$cuadrado1 = new Cuadrado(25);
echo "\n El cuadrado es de". $cuadrado1->arista;

$cuadrado1 = new Cuadrado(25);
echo "\n El cuadrado es de". $cuadrado1->getArista();





?>