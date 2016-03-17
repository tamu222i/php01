<?php
class foo {
   // PHP 5.3.0 以降
   public $bar = <<<'EOT'
bar
EOT;
}
$a = new foo();
echo $a->bar;
?>
