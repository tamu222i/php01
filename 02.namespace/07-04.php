<?php
namespace MyProject;

use blah\blah as mine; // "名前空間の使用法: エイリアス/インポート" を参照ください

blah\mine(); // MyProject\blah\mine() 関数をコールします
namespace\blah\mine(); // MyProject\blah\mine() 関数をコールします

namespace\func(); // MyProject\func() 関数をコールします
namespace\sub\func(); // MyProject\sub\func() 関数をコールします
namespace\cname::method(); // MyProject\cname クラスの静的メソッド "method" をコールします
$a = new namespace\sub\cname(); // MyProject\sub\cname クラスのオブジェクトのインスタンスを作成します
$b = namespace\CONSTANT; // 定数 MyProject\CONSTANT の値を $b に代入します
?>
