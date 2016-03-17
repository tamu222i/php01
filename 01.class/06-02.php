<?php
/**
 * MyClass の定義
 */
class MyClass
{
    // public コンストラクタの宣言
    public function __construct() { }

    // public メソッドの宣言
    public function MyPublic() { }

    // protected メソッドの宣言
    protected function MyProtected() { }

    // private メソッドの宣言
    private function MyPrivate() { }

    // これは public となります
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic(); // 動作します
$myclass->MyProtected(); // Fatal エラー
$myclass->MyPrivate(); // Fatal エラー
$myclass->Foo(); // Public、Protected および Private が動作します


/**
 * MyClass2 の定義
 */
class MyClass2 extends MyClass
{
    // これは public となります
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate(); // Fatal エラー
    }
}

$myclass2 = new MyClass2;
$myclass2->MyPublic(); // 動作します
$myclass2->Foo2(); // Public および Protected は動作しますが、Private は動作しません

class Bar 
{
    public function test() {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic() {
        echo "Bar::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Bar::testPrivate\n";
    }
}

class Foo extends Bar 
{
    public function testPublic() {
        echo "Foo::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Foo::testPrivate\n";
    }
}

$myFoo = new Foo();
$myFoo->test(); // Bar::testPrivate 
                // Foo::testPublic
?>
