<?php

namespace Acme;
use Acme\Users\Person;

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

 ?>
