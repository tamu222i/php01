<?php
$url = 'http://www.example.com';

print_r(get_headers($url));

print_r(get_headers($url, 1));
?>
