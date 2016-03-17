<?php
$a = "dangerous\name"; // ダブルクォートの中では \n が改行文字になってしまいます!
$obj = new $a;

$a = 'not\at\all\dangerous'; // これなら大丈夫です
$obj = new $a;
?>
