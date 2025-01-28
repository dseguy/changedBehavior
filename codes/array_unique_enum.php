<?php

enum E: string
{
    case A = 'A';
    case B = 'B';
    case C = 'C';
}

$data = [
    E::A,
    E::B,
    E::C,
    E::A,
    E::B,
    E::C,
];

$data = array_unique($data, flags: SORT_REGULAR);

var_dump($data);