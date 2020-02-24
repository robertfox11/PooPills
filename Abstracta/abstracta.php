<?php

abstract class Laptop{
    public $encendido;
    abstract public function encender();
    public function apagar()
    {
        $this->encendido = false;
    }
}

class pcAsus extends Laptop{

    public $software;
    public function encenderSoftware(){
        $this->software = true;
    }
    public function encender()
    {
        $this->encendido = true;
    }
}

$laptop = new pcAsus();

$laptop->encenderSoftware();
$laptop->encender();
$laptop->apagar();
var_dump($laptop);