<?php
namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
}

namespace { // グローバルコード
session_start();
$a = MyProject\connect();
echo MyProject\Connection::start();
}
?>
