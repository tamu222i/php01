<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        // 注意: $name は大文字小文字を区別します
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    /**  PHP 5.3.0 以降 */
    public static function __callStatic($name, $arguments)
    {
        // 注意: $name は大文字小文字を区別します
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context');  // PHP 5.3.0 以降
?>
