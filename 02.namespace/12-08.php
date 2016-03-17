<?php
namespace foo;
use blah\blah as foo;

const FOO = 1;

function my() {}
function foo() {}
function sort(&$a)
{
    \sort($a); // グローバル関数 "sort" をコールします
    $a = array_flip($a);
    return $a;
}

my(); // "foo\my" をコールします
$a = strlen('hi'); // "foo\strlen" が存在しないので、グローバル関数 "strlen" をコールします
$arr = array(1,3,2);
$b = sort($arr); // "foo\sort" 関数をコールします
$c = foo(); // calls function "foo\foo" - import is not applied

$a = FOO; // sets $a to value of constant "foo\FOO" - import is not applied
$b = INI_ALL; // sets $b to value of global constant "INI_ALL"
?>
