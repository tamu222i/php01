<?php
class MySessionHandler implements SessionHandlerInterface
{
    // ここでインターフェイスを実装します
}

$handler = new MySessionHandler();
session_set_save_handler($handler, true);
session_start();

// $_SESSION への値の設定や格納されている値の取得を進めます
