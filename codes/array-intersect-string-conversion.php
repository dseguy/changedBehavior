<?php
// 3. array_intersect() converts values to strings while scanning its inputs.
// Manual: this can change the number and order of __toString() calls and warnings,
// and an invalid later argument can suppress conversions from earlier arrays.
require __DIR__ . '/_helpers.php';

class Label
{
    public function __construct(private int $n) {}

    public function __toString(): string
    {
        echo "  __toString({$this->n}) called\n";
        return "v{$this->n}";
    }
}

attempt('two non-empty arrays', fn() => array_intersect([new Label(1), new Label(2)], ['v1', 'v9']));

// Argument types are validated before conversion, so the first array's
// __toString() should not run on 8.6.
attempt('invalid later argument', fn() => array_intersect([new Label(3)], 42));

// "Values are not converted if any input array is empty."
attempt('one empty array', fn() => array_intersect([new Label(4)], []));
