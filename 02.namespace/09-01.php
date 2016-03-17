<?php
namespace A\B\C;

/* この関数は A\B\C\fopen です */
function fopen() { 
     /* ... */
     $f = \fopen(...); // グローバルな fopen をコールします
     return $f;
} 
?>
