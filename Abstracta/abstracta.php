<?php

class Laptop{
    public $encendido;
    public function encender(){
        $this->encendido = true;
    }
    public function apagar()
    {
        $this->encendido = false;
    }
}