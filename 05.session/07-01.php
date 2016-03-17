<?php
session_start();

$old_sessionid = session_id();

session_regenerate_id();

$new_sessionid = session_id();

echo "古いセッション: $old_sessionid<br />";
echo "新しいセッション: $new_sessionid<br />";

print_r($_SESSION);
?>
