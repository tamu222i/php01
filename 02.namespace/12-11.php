<?php
namespace my\stuff;
include 'file1.php';
include 'another.php';

use another\thing as MyClass;
$a = new MyClass; // 名前空間 another のクラス "thing" のインスタンスを作成します。
?>
