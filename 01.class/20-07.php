<?php
class C {}
class D extends C {}

// これは C を継承していません。
class E {}

function f(C $c) {
    echo get_class($c)."\n";
}

f(new C);
f(new D);
f(new E);
?>
