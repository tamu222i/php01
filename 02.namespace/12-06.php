<?php
namespace foo;
use blah\blah as foo;

$a = new my\name(); // "foo\my\name" クラスのインスタンスを作成します
foo\bar::name(); // "blah\blah\bar" の静的メソッド "name" をコールします
my\bar(); // "foo\my\bar" 関数をコールします
$a = my\BAR; // $a に定数 "foo\my\BAR" の値を設定します
?>
