<?php
namespace Foo;

function strlen() {}
const INI_ALL = 3;
class Exception {}

$a = \strlen('hi'); // グローバル関数 strlen をコールします
$b = \INI_ALL; // グローバル定数 INI_ALL にアクセスします
$c = new \Exception('error'); // グローバルクラス Exception のインスタンスを作成します
?>
