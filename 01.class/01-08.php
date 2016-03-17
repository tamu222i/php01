<?php
include("01-01.php");
class ExtendClass extends SimpleClass
{
    // 親クラスのメソッドを再定義
    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();
?>
