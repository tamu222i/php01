<?php
class classname
{
    function __construct()
    {
        echo __METHOD__,"\n";
    }
}
function funcname()
{
    echo __FUNCTION__,"\n";
}
const constname = "global";

$a = 'classname';
$obj = new $a; // classname::__construct と表示します
$b = 'funcname';
$b(); // funcname と表示します
echo constant('constname'), "\n"; // global と表示します
?>
