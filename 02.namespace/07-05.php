<?php

namespace\func(); // func() 関数をコールします
namespace\sub\func(); // sub\func() 関数をコールします
namespace\cname::method(); // cname クラスの静的メソッド "method" をコールします
$a = new namespace\sub\cname(); // sub\cname クラスのオブジェクトのインスタンスを作成します
$b = namespace\CONSTANT; // 定数 CONSTANT の値を $b に代入します
?>
