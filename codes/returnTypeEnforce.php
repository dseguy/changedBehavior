<?php

class x implements Iterator {

function __construct() {
	print __METHOD__;
}

public function current()  {}
public function key(): mixed {}
public function next(): void {}
public function rewind(): void {}
public function valid(): bool {}
} 

new x; 