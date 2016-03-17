<?php
// これは、有効期限が1日の永続クッキーを送信します
session_start([
    'cookie_lifetime' => 86400,
]);
?>
