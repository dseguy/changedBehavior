<?php

var_dump(substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0
var_dump(mb_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
var_dump(iconv_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
var_dump(grapheme_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
?>