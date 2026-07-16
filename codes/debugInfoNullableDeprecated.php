<?php

class x {
    public function __debugInfo(): ?array {
        return ['a' => 1];
    }
}

var_dump(new x());

?>