<?php

trait t {
    const X = 1;
    
}

class x {
	use t;
}

echo X::X;