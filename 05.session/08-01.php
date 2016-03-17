<?php
// session_register() の使用は推奨されません。
$barney = "A big purple dinosaur.";
session_register("barney");

// PHP 4.1.0以降では$_SESSIONの使用が推奨されます。
$_SESSION["zim"] = "An invader from another planet.";

// 古い手法としては $HTTP_SESSION_VARS があります。
$HTTP_SESSION_VARS["spongebob"] = "He's got square pants.";
?>
