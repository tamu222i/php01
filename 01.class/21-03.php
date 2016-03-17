<?php
class A {
    private function foo() {
        echo "success!\n";
    }
    public function test() {
        $this->foo();
        static::foo();
    }
}

class B extends A {
   /* foo() が B にコピーされるので、メソッドのスコープは A のままとなり、
    * コールは成功します */
}

class C extends A {
    private function foo() {
        /* もとのメソッドが置き換えられるので、新しいメソッドのスコープは C となります */
    }
}

$b = new B();
$b->test();
$c = new C();
$c->test();   //fails
?>
