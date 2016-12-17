<?php

class Task {

  public $description;

  public $title;

  public $completed=false;

  public function _construct ($title, $description){
    $this->title=$title;
    $this->description=$description;
  }

  public function complete(){
    $this->complete=true;
  }

}

$task=new Task('Learn OOP', 'The teacher bla, bla, bla,...')
$task->complete();

var_dump($task->completed);

?>
