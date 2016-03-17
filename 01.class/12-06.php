<?php
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

// sayHello の可視性を変更します
class MyClass1 {
    use HelloWorld { sayHello as protected; }
}

// 可視性を変更したエイリアスメソッドを作ります
// sayHello 自体の可視性は変わりません
class MyClass2 {
    use HelloWorld { sayHello as private myPrivateHello; }
}
?>
