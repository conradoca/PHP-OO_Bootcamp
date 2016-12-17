<?php

class Person{

  private $name;

  private $age=0;

  public function __construct($name){
    $this->name=$name;
  }

  public function setAge($age){
    $this->age=$age;
  }

  public function getAge(){
    return $this->age;
  }

  public function getName(){
    return $this->name;
  }

}

$joe=new Person ('Joe');
$joe->setAge(219);
var_dump($joe);
 ?>
