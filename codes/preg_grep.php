<?php

$words = [
    'hello',
    'world',
    "invalid \xFF UTF-8",
    'hello again',
];

$result = preg_grep('/hello/u', $words);

var_dump($result);