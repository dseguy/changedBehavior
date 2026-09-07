<?php

function getValue(): string {
    try {
        throw new Exception('boom');
    } finally {
        return 'fallback';
    }
}

echo getValue(), "\n";
