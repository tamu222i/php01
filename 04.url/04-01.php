<?php
// 上のタグは www.example.com 上のものだと仮定します
$tags = get_meta_tags('http://www.example.com/');

// すべてのキーが小文字であり、. (ピリオド) が _ に
// 置換されていることに注目してください。
echo $tags['author'];       // name
echo $tags['keywords'];     // php documentation
echo $tags['description'];  // a php manual
echo $tags['geo_position']; // 49.33;-86.59
?>
