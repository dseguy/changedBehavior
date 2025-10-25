<?php

function get_contents() {
  file_get_contents("https://www.php.net/");
  var_dump($http_response_header); // variable is populated in the local scope
}
get_contents();