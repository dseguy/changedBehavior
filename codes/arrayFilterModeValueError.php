<?php

var_dump(array_filter([1, 0, 2, null], fn($v) => true, 99));

?>