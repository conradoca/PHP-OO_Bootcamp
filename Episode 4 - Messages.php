<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;


$joe= new Person("Joe");
$staff = new Staff($joe);
$laracasts=new Business($staff);
$laracasts->hire(new Person("Jimmy"));
$laracasts->getStaffMembers();

var_dump($laracasts);

?>
