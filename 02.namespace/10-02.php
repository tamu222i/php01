<?php
namespace A\B\C;

const E_ERROR = 45;
function strlen($str)
{
    return \strlen($str) - 1;
}

echo E_ERROR, "\n"; // "45" と表示します
echo INI_ALL, "\n"; // "7" と表示します - グローバルの INI_ALL に移行しました

echo strlen('hi'), "\n"; // "1" と表示します
if (is_array('hi')) { // "is not array" と表示します
    echo "is array\n";
} else {
    echo "is not array\n";
}
?>
