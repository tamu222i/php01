<?php
namespace foo;

class MyClass {}

// 現在の名前空間のクラスをタイプヒントに使用する方法
function test(MyClass $typehintexample = null) {}
// 現在の名前空間のクラスをタイプヒントに使用するもうひとつの方法
function test(\foo\MyClass $typehintexample = null) {}

// 現在の名前空間のクラスの継承
class Extended extends MyClass {}

// グローバル関数へのアクセス
$a = \globalfunc();

// グローバル定数へのアクセス
$b = \INI_ALL;
?>
