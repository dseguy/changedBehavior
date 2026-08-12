<?php

enum Suit {
    case Hearts;
    case Spades;

    public function __debugInfo(): array {
        return ['custom' => $this->name];
    }
}

var_dump(Suit::Hearts);

?>
