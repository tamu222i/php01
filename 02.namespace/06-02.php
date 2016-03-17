<?php
namespace namespacename;
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
const constname = "namespaced";

/* ダブルクォートを使う場合は "\\namespacename\\classname" としなければなりません */
$a = '\namespacename\classname';
$obj = new $a; // namespacename\classname::__construct と表示します
$a = 'namespacename\classname';
$obj = new $a; // これも namespacename\classname::__construct と表示します
$b = 'namespacename\funcname';
$b(); // namespacename\funcname と表示します
$b = '\namespacename\funcname';
$b(); // これも namespacename\funcname と表示します
echo constant('\namespacename\constname'), "\n"; // namespaced と表示します
echo constant('namespacename\constname'), "\n"; // これも namespaced と表示します
?>
