<?php

abstract class Shape{

  protected $colour;

  public function __construct($colour){
    $this->colour=$colour;
  }

  public function getColour(){
    return $this->colour;
  }

  abstract function getArea();

}

class Rectangle extends Shape{

  protected $base=4;
  protected $height=2;

  public function getArea(){
      return $this->base*$this->height;
  }

}

class Triangle extends Shape{
  protected $base=4;
  protected $height=2;

  public function getArea(){
      return $this->base*$this->height*0.5;
  }

}

$forma=new Rectangle("Red");

echo $forma->getColour();
echo $forma->getArea();

?>
