<?php
class SimpleClass {
}
$instance = new SimpleClass();

// 変数を使うこともできます
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()
echo get_class($instance);
?>
