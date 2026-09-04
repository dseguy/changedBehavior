# Returning From A finally Block Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/returnInFinallyDeprecated.html","headline":"Returning From A finally Block Is Deprecated","name":"Returning From A finally Block Is Deprecated","description":"A `return` statement inside a `finally` block always wins: it replaces whatever the `try`/`catch` block was about to return, and it silently swallows any exception that was propagating out of the `try`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/returnInFinallyDeprecated.html","inLanguage":"en","dateModified":"2026-09-04T15:19:26+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Returning From A finally Block Is Deprecated"}]}}</script>

A `return` statement inside a `finally` block always wins: it replaces whatever the `try`/`catch` block was about to return, and it silently swallows any exception that was propagating out of the `try`. Until PHP 8.6, this was fully silent, and a pending exception could disappear without a trace. In PHP 8.6, returning from a finally block emits a deprecation notice, while the runtime behavior itself (the return value winning, the exception being discarded) is unchanged.

## PHP code
```php
<?php

function getValue(): string {
    try {
        throw new Exception('boom');
    } finally {
        return 'fallback';
    }
}

echo getValue(), "\n";

?>
```
## Before
```text
fallback
```
## After
```text
PHP Deprecated:  Returning from a finally block is deprecated in /codes/returnInFinallyDeprecated.php on line 7

Deprecated: Returning from a finally block is deprecated in /codes/returnInFinallyDeprecated.php on line 7
fallback
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [PHP 8.6 Deprecations RFC](https://wiki.php.net/rfc/deprecations_php_8_6)
- [Pre-RFC discussion](https://discourse.thephp.foundation/t/php-dev-pre-rfc-deprecate-returning-from-a-finally-block/5618)

## Error Messages

- [Returning from a finally block is deprecated](https://php-errors.readthedocs.io/en/latest/messages/returning-from-a-finally-block-is-deprecated.html)

## Extension
- [Core](../extension.md#Core)