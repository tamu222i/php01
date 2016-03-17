<?php
interface a
{
    const b = 'Interface constant';
}

// Interface constant と表示します
echo a::b;


// しかし、これは動作しません。定数のオーバーライドが
// できないからです。
class b implements a
{
    const b = 'Class constant';
}
?>
