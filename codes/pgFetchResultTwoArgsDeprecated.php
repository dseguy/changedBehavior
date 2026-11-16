<?php

try {
    var_dump(pg_fetch_result('not-a-resource', 'field'));
} catch (\Throwable $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}
