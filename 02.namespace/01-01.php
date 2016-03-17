<?php
namespace my\name; // "名前空間の定義" を参照ください

class MyClass {}
function myfunction() {}
const MYCONST = 1;

$a = new MyClass;
$c = new \my\name\MyClass; // "グローバル空間" を参照ください

$a = strlen('hi'); // "名前空間の使用法: グローバル関数/定数への
                   // 移行" を参照ください

$d = namespace\MYCONST; // "namespace 演算子および __NAMESPACE__ 定数"
                        // を参照ください
$d = __NAMESPACE__ . '\MYCONST';
echo constant($d); // "名前空間および動的言語機能" を参照ください
?>
