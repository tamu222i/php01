<?php
namespace A\B\C;
class Exception extends \Exception {}

$a = new Exception('hi'); // $a は A\B\C\Exception クラスのオブジェクトです
$b = new \Exception('hi'); // $b は Exception クラスのオブジェクトです

$c = new ArrayObject; // fatal error, class A\B\C\ArrayObject not found
?>
