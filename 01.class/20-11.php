<?php
function sum(int $a, int $b) {
    return $a + $b;
}

var_dump(sum(1, 2));

// これらは integer 型として扱われます。出力例に注目！
var_dump(sum(1.5, 2.5));
?>
