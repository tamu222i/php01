<?php
function makeyogurt($flavour, $type = "acidophilus")
{
    return "Making a bowl of $type $flavour.\n";
}
 
echo makeyogurt("raspberry");   // 期待通り動作します
?>
