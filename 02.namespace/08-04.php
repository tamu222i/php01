<?php
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // My\Full\Classname クラスのオブジェクトのインスタンスを作成します
$obj = new \Another; // Another クラスのオブジェクトのインスタンスを作成します
$obj = new Another\thing; // My\Full\Classname\thing クラスのオブジェクトのインスタンスを作成します
$obj = new \Another\thing; // Another\thing クラスのオブジェクトのインスタンスを作成します
?>
