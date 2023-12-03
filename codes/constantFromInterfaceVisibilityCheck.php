<?php

interface i {
    public const IPrivate   = 'private';
    public const IProtected = 'protected';
    public const IPublic    = 'public';
}

class x implements i {
    private const IPrivate = 1;
    protected const IProtected = 2;
    public const IPublic = 3;
}

echo x::IPrivate . PHP_EOL;
echo x::IProtected . PHP_EOL;
echo x::IPublic . PHP_EOL;

?>
