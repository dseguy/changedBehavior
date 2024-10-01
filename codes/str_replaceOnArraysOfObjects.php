<?php

class x {
	function __toString() {
		return 'def';
	}
}

var_dump(str_replace('a', 'b', [new x]));

var_dump(str_replace('a', 'b', [new stdclass]));

?>