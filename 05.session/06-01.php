<?php

/* セッション名をWebsiteIDに設定する */

$previous_name = session_name("WebsiteID");

echo "前回のセッション名は、$previous_name です。<br />";
?>
