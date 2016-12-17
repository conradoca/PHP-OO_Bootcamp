<?php

class Person{

  protected $name;

  public function __construct($name){
    $this->name=$name;
  }

}

class Staff{

  protected $members=[];

  public function __construct($members=[]){
    $this->members=$members;
  }

  public function add(Person $person){
    array_push($this->members, $person);
    // $this->members=$person;
  }

  public function getMembers(){
    return $this->members;
  }
}

class Business{

  private $staff;

  public function __construct(Staff $staff){
    $this->staff=$staff;
  }

  public function hire(Person $person){
    $this->staff->add($person);
  }

  public function getStaffMembers(){
    return $this->staff->getMembers();
   }

}

$joe= new Person("Joe");
$staff = new Staff($joe);
$laracasts=new Business($staff);
$laracasts->hire(new Person("Jimmy"));
$laracasts->getStaffMembers();

var_dump($laracasts);

?>
