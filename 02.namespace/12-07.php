<?php
namespace foo;
use blah\blah as foo;

$a = new name(); // "foo\name" クラスのインスタンスを作成します
foo::name(); // "blah\blah" クラスの静的メソッド "name" をコールします
?>
