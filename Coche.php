<?php

class Coche{
    public $color;
    public $modelo;
    public $marca;
    public $plazas;
    public $velocidad;
    //creamos constructor
    public function __construct($color, $modelo, $marca, $plazas, $velocidad)
    {
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->plazas = $plazas;
        $this->velocidad =$velocidad;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
    public function getPlazas()
    {
        return $this->plazas;
    }
    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;

        return $this;
    }
    //metodos
    public function getVelocidad(){
        return $this->velocidad++;
    }
    public function getFrenar(){
        $this->velocidad--;
    }
}

$car = new Coche("Rojo", "Ibiza", "Seat", 4,300);

// $car->getVelocidad();
// $car->getVelocidad();
$car->getVelocidad();
$car->getVelocidad();
$car->getVelocidad();
$car->getVelocidad();
$car->getFrenar();
//mostramos tambien la velocidad que y el freno que dimos
var_dump($car);
// echo $car;