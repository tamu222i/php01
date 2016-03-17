<?php
class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n"; // PHP 5.3.0 以降で対応

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT."\n"; // PHP 5.3.0 以降で対応
?>
