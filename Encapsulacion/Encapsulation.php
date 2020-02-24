<?php
// Public: Se podrá acceder a ella de cualquier forma, directamente o por métodos de la misma o de otras clases. Ejemplo:
//protected Se puede acceder desde la clase que los define y desde clase que herenden esta clase
//private solo se acceden desde esta clase
class Persona
{
    public $nombre;
    private $apellido;
    protected $edad;
    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
}
$persona = new Persona('Pepito', 'Perez', 24);
//podemos modifcar el nombre por qeu es publica
$persona->nombre = "Robert";
//en la propiedad protected no podemos modificarla nos dara error
// $persona->edad = 25 ;
// Para modificar el valor tenemos que tener el metodo set setEdad esa es launica manera
$persona->setEdad(22);
//apellidos es private tenemos que utilizar el metodo get getApellidos no podemos modificarla
var_dump($persona->getApellido());
var_dump($persona);
