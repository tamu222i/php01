<?php
const ONE = 1;

class foo {
    // PHP 5.6.0 以降
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;
}
?>
