<?php
namespace Foo\Bar;
include '05-01.php';

const FOO = 2;
function foo() {}
class foo
{
    static function staticmethod() {}
}

/* 非修飾名 */
foo(); // Foo\Bar\foo 関数と解釈されます
foo::staticmethod(); // Foo\Bar\foo クラスの staticmethod メソッドと解釈されます
echo FOO; // 定数 Foo\Bar\FOO と解釈されます

/* 修飾名 */
subnamespace\foo(); // Foo\Bar\subnamespace\foo 関数と解釈されます
subnamespace\foo::staticmethod(); // Foo\Bar\subnamespace\foo クラスの
                                  // staticmethod メソッドと解釈されます
echo subnamespace\FOO; // 定数 Foo\Bar\subnamespace\FOO と解釈されます
                                  
/* 完全修飾名 */
\Foo\Bar\foo(); // Foo\Bar\foo 関数と解釈されます
\Foo\Bar\foo::staticmethod(); // Foo\Bar\foo クラスの staticmethod メソッドと解釈されます
echo \Foo\Bar\FOO; // 定数 Foo\Bar\FOO と解釈されます
?>
