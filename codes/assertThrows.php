<?php
// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
	print __METHOD__;

    return true;
}

set_error_handler('myErrorHandler');

try {
	assert(false);
} catch (\Error $e) {
	print $e->getMessage();
}

?>