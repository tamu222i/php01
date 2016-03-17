<?php
class SimpleClass
{
    // プロパティの宣言
    public $var = 'a default value';

    // メソッドの宣言
    public function displayVar() {
        echo $this->var;
    }
}

$o = new SimpleClass();
echo $o->var;
echo $o->displayVar();
?>
