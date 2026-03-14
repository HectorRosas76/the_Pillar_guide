<?php
echo 'hola mundo'
class Figura{
    public abstract function area();/*polimorfismo*/
    public function getAreaMsg(){
return "\n El area es de". $this->area();
    }
}

interface IFigura{
public function toString();
}

class Cuadrado extends Figura implements IFigura
{
    private $arista;
    public function __construc($arista){
        $this->arista = $arista;
    } 
    public function setArista($value){
        $this->arista= $value;
    }
    public function getArista(){
        return $this->arista;/*herencia*/
    }
    public function area(){
        return pow($this->arista, 2);
    }
    /* pow= funcion*/

    public function toString(){/*polimorfismo*/
        return "\n El cuadrado es de". $this->area();
    }
    }


class Rectangulo{
    private $base = 0;
    private $altura = 0;

    public function __construct($base, $altura)
    {
       $this->base = $base;
        $this->altura = $altura;
    }

    public function area(){
        return $this->base * $this->altura;
    }

    public function toString(){
        return "\n El rectangulo es de ". $this->base. "x" $this->altura;
    }
}


$cuadrado1 = new Cuadrado(25);
echo "\n El cuadrado es de". $cuadrado1->arista;
$cuadrado1 = new Cuadrado(25);
echo "\n El cuadrado es de". $cuadrado1->getArista();
$cuadrado1 = new Cuadrado(25);
echo "\n El area es de". $cuadrado1->area();

$rectangulo1 = new Rectangulo(10, 25);
echo $rectagulo1= toString();
echo $rectagulo1= getAreaMsg();


class Triangulo extends Figura implements IFigura{
private $base = 0;
private $altura = 0;

public function __construct($base,$altura)
 {
       $this->base = $base;
        $this->altura = $altura;
    }

        public function area(){
        return $this->base * $this->altura;
    }

    public function toString(){
        return "\n El triangulo es de ". $this->base. "x" $this->altura;
    }


}

?>