<?php
namespace foo;
use My\Full\Classname as Another;

// これは use My\Full\NSname as NSname と同じです
use My\Full\NSname;

// グローバルクラスをインポートします
use ArrayObject;

// 関数をインポートします (PHP 5.6+)
use function My\Full\functionName;

// 関数のエイリアスを定義します (PHP 5.6+)
use function My\Full\functionName as func;

// 定数をインポートします (PHP 5.6+)
use const My\Full\CONSTANT;

$obj = new namespace\Another; // foo\Another クラスのオブジェクトのインスタンスを作成します
$obj = new Another; // My\Full\Classname クラスのオブジェクトのインスタンスを作成します
NSname\subns\func(); // My\Full\NSname\subns\func 関数をコールします
$a = new ArrayObject(array(1)); // ArrayObject クラスのオブジェクトのインスタンスを作成します
// "use ArrayObject" がなければ、foo\ArrayObject クラスのオブジェクトのインスタンスを作成することになります
func(); // 関数 My\Full\functionName を呼びます
echo CONSTANT; // 定数 My\Full\CONSTANT の値を表示します
?>
