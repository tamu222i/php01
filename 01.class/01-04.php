<?php
class SimpleClass {
}
$instance = new SimpleClass();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance と $reference は null になります

var_dump($instance);
var_dump($reference);
var_dump($assigned);
?>
