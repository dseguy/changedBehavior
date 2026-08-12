<?php

$arr = ["\xC3\x28", 'valid'];
var_dump(preg_grep('/./u', $arr));

?>
