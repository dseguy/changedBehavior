<?php
var_dump(grapheme_strstr("e\u{0301}", "\u{00E9}"));
// now: bool(false)
// expected: string(3) "é"