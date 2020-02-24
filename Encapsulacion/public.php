<?php
class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
    public function imprimir()
    {
        return $this->edad;
    }
}
$persona = new Persona('Pepito', 'Perez', 24);
echo $persona->edad;
echo $persona->imprimir();
