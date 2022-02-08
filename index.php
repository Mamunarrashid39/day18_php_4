<?php


require_once "vendor/autoload.php";
use App\classes\Example;
use App\classes\FullName;

// $Example =new Example();
// $Example->index();


//$fullName= new Fullname ();
//$fullName->index();

$fullName= new FullName();
$fullName->index();