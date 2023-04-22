<?php

var_dump(vsprintf("%04d-%02d-%02d", []));
//var_dump(vsprintf("%04d-%02d-%02d", []));
//vprintf would print empty string anyway
//vfprintf() prints to stream. so we don't use it here

?>