<?php
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // My\Full\Classname クラスのオブジェクトのインスタンスを作成します
$a = 'Another';
$obj = new $a;      // Another クラスのオブジェクトのインスタンスを作成します
?>
