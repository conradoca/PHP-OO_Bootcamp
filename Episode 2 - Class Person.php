<?php

class Person{

  private $name;

  private $age=0;

  public function __construct($name){
    $this->name=$name;
  }

  public function setAge($age){
    if ($age >= 18){
      $this->age=$age;
    }
    else {
      throw new Exception("Age can't be below 18!", 1);
    }
  }

  public function getAge(){
    return $this->age;
  }

  public function getName(){
    return $this->name;
  }

}

$joe=new Person ('Joe');
$joe->setAge(19);
var_dump($joe);
 ?>
