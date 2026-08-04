<?php

interface Shape {
    const SIDES = 0;
}

class Square implements Shape {
    #[\Override]
    const SIDES = 4; // Fine, overrides Shape::SIDES

    #[\Override]
    const COLOR = 'blue'; // Fatal error, no matching parent constant
}

enum eSquare implements Shape {
    #[\Override]
    const SIDES = 4; // Fine, overrides Shape::SIDES

    #[\Override]
    const COLOR = 'blue'; // Fatal error, no matching parent constant
}

?>