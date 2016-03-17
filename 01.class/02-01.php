<?php
class SimpleClass
{
   // 無効なプロパティ宣言
   public $var1 = 'hello ' . 'world';
   public $var2 = <<<EOD
hello world
EOD;
   public $var3 = 1+2;
   public $var4 = self::myStaticMethod();
   public $var5 = $myVar;

   // 有効なプロパティ宣言
   public $var6 = myConstant;
   public $var7 = array(true, false);

   // これは PHP 5.3.0 以降でのみ使える方式です
   public $var8 = <<<'EOD'
hello world
EOD;
}
?>
