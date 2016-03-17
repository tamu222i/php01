<?php
// デフォルトでは、get_headers は GET リクエストを使ってヘッダを取得します。
// HEAD リクエストでヘッダを取得したい場合は、ストリームコンテキストを使います。
stream_context_set_default(
    array(
        'http' => array(
            'method' => 'HEAD'
        )
    )
);
$headers = get_headers('http://example.com');
?>
