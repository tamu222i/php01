<?php

// PHP 7 より前のバージョンのコード
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new Logger());

// PHP 7 以降のコード
$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});
