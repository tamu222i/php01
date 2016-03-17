<?php
class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // PHP 5.3.0 以降で対応

echo MyClass::CONST_VALUE;
?>
