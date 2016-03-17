<?php
namespace Foo;
class Bar {
    public function Bar() {
        // PHP 5.3.0-5.3.2 までは、これはコンストラクタとみなされました
        // PHP 5.3.3 以降は、これはコンストラクタにはなりません
    }
}
?>
