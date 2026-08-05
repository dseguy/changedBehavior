<?php

interface Colorful {
    function color();
}

enum Suit implements Colorful {
    case Hearts;
}

?>