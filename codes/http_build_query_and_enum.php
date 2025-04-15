<?php

enum E : string {
    case B = 'b';
}

print http_build_query(['a' => 'A', 'b' => e::B]);