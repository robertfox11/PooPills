<?php
 
// creamos la clase abstracta
abstract class AnimalAbstract
{
protected $_energiaConsumida = 0;
 
  public function getEnergiaConsumida()
  {
    return $this->_energiaConsumida;
  }
}
 
// creamos la clase perro que hereda la clase animal
class Perro extends AnimalAbstract
{
  public function correr()
  {
     $this->_energiaConsumida += 50;
  }
}
 
// creamos la clase leon que hereda la clase animal
class Leon extends AnimalAbstract
{
  public function correr()
  {
    if ($this->_energiaConsumida > 160){
        $this->_energiaConsumida += 100 ;
    } else {
        $this->_energiaConsumida += 80 ;
    }
  }
}
 
// Ahora creamos la clase usuario
class Usuario
{
private $_animal;
 
 function __construct($animal)
 {
   $this->_animal = $animal;
 }
 public function hacerCorrerAnimal()
 {
    $this->_animal->correr();
 }
 public function energiaConsumidaAnimal()
 {
    return $this->_animal->getEnergiaConsumida();
 }
 
}
 
$usuario_1 = new Usuario(new Perro);
$usuario_1->hacerCorrerAnimal();
 
$usuario_2 = new Usuario(new Leon);
$usuario_2->hacerCorrerAnimal();
 
echo 'Energía consumida por el animal del usuario 1 es: ' . $usuario_1->energiaConsumidaAnimal() . '<br>';
echo 'Energía consumida por el animal del usuario 2 es: ' . $usuario_2->energiaConsumidaAnimal() . '<br>';
/*
La salida sería:
Energía consumida por el animal del usuario 1 es: 50
Energía consumida por el animal del usuario 2 es: 80
*/
?>