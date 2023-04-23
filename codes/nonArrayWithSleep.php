<?php

class x {
	function __sleep() {
		return 3;
	}
}

serialize(new x);

?>