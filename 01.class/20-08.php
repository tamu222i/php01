<?php
interface I { public function f(); }
class C implements I { public function f() {} }

// これは I を実装していません。
class E {}

function f(I $i) {
    echo get_class($i)."\n";
}

f(new C);
f(new E);
?>
