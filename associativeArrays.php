<?php

// $person=[
//   "Name" => "Jimmy",
//   "Age" => 35,
//   "Country" => "Sweeden"
// ];
//
// $person["City"] = "Malmo";

$task=[];
$task=[
  "Name" => "Learn PHP",
  "Details" => "Get the basics about programming using PHP",
  "Due to" => 31/12/2016,
];

$task["Completed"]=true;

require ("views/assArrays.view.php");

?>
