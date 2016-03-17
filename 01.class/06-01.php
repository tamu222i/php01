<?php
/**
 * MyClass の定義
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // 動作します
echo $obj->protected; // Fatal エラー
echo $obj->private; // Fatal エラー
$obj->printHello(); // Public、Protected そして Private を表示します


/**
 * MyClass2 の定義
 */
class MyClass2 extends MyClass
{
    // public および protected メソッドは再定義できますが、
    // private はできません。
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // 動作します
echo $obj2->protected; // Fatal エラー
echo $obj2->private; // 未定義です
$obj2->printHello(); // Public、Protected2、Undefined を表示します

?>
