<?php
  // シリアライズした文字列を復元するには、これが必要です
  include("23-classa.inc");

  $s = file_get_contents('store');
  $a = unserialize($s);

  // これで、$a オブジェクトの show_one() が使えるようになりました
  $a->show_one();
