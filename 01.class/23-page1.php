<?php
  include("23-classa.inc");
  
  $a = new A;
  $s = serialize($a);
  // $s を、page2.php からみつけられるどこかに書き出します
  file_put_contents('store', $s);
