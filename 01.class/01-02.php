<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        // 注意: E_STRICT が有効な場合、次の行で警告が発生します
        A::foo();
    }
}

$a = new A();
$a->foo();

// 注意: E_STRICT が有効な場合、次の行で警告が発生します
A::foo();
$b = new B();
$b->bar();

// 注意: E_STRICT が有効な場合、次の行で警告が発生します
B::bar();
?>
