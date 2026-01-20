<?php

const S = "123s";
const C = (int) S;

class X {
    const C = (int) S;
}

echo C;