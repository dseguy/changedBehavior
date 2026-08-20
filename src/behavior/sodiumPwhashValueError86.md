# sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sodiumPwhashValueError86.html","headline":"sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits","name":"sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits","description":"The password-hashing functions `sodium_crypto_pwhash()`, `sodium_crypto_pwhash_str()`, `sodium_crypto_pwhash_scryptsalsa208sha256()` and `sodium_crypto_pwhash_scryptsalsa208sha256_str()` validate their `$opslimit` and `$memlimit` arguments against libsodium's documented minimums.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/sodiumPwhashValueError86.html","inLanguage":"en","dateModified":"2026-08-12T07:24:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"sodium_crypto_pwhash_str() Throws ValueError For Out-Of-Range Limits"}]}}</script>

The password-hashing functions `sodium_crypto_pwhash()`, `sodium_crypto_pwhash_str()`, `sodium_crypto_pwhash_scryptsalsa208sha256()` and `sodium_crypto_pwhash_scryptsalsa208sha256_str()` validate their `$opslimit` and `$memlimit` arguments against libsodium's documented minimums. Until PHP 8.6, an out-of-range value threw a `SodiumException`. In PHP 8.6, it throws a `ValueError` instead, which better reflects that the problem is an invalid argument rather than an internal libsodium failure. `SodiumException` is still thrown for genuine libsodium failures.

## PHP code

```php
<?php

try {
    $hash = sodium_crypto_pwhash_str('password', 1, 1);
    var_dump($hash);
} catch (\ValueError $e) {
    echo "ValueError: ".$e->getMessage()."\n";
} catch (\SodiumException $e) {
    echo "SodiumException: ".$e->getMessage()."\n";
}

?>
```

## Before

```text
SodiumException: sodium_crypto_pwhash_str(): Argument #3 ($memlimit) must be greater than or equal to 8192
```

## After

```text
ValueError: sodium_crypto_pwhash_str(): Argument #3 ($memlimit) must be greater than or equal to 8192
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [sodium_crypto_pwhash_str()](https://www.php.net/sodium_crypto_pwhash_str)

## Error Messages

- [sodium_crypto_pwhash_str(): Argument #3 ($memlimit) must be greater than or equal to 8192](https://php-errors.readthedocs.io/en/latest/messages/sodium_crypto_pwhash_str%28%29-throws-valueerror-for-out-of-range-limits.html)
