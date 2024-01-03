<?php

class x implements iterator {
	public function __construct() { echo __METHOD__; }
	public function current() {}
	public function key(): mixed {}
	public function next(): void {}
	public function rewind(): void {}
	public function valid(): bool {}
}

new x;

?>