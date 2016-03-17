<?php
$url = '//www.example.com/path?googleguy=googley';

// 5.4.7 より前のバージョンでは、パスを "//www.example.com/path" のように表示していました
var_dump(parse_url($url));
?>
