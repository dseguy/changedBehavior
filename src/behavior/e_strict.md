# E_STRICT Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/e_strict.html","headline":"E_STRICT Is Deprecated","name":"E_STRICT Is Deprecated","description":"The PHP native constant `E_STRICT` is deprecated, and will be removed in PHP 9.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/e_strict.html","inLanguage":"en","dateModified":"2026-02-01T21:02:33+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"E_STRICT Is Deprecated"}]}}</script>

The PHP native constant `E_STRICT` is deprecated, and will be removed in PHP 9.0.

## PHP code

```php
<?php

var_dump(error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT));

?>
```

## Before

```text
int(32767)
```

## After

```text
PHP Deprecated:  Constant E_STRICT is deprecated

Deprecated: Constant E_STRICT is deprecated
int(30719)
```

## PHP version change

This behavior was deprecated in 8.4.

This behavior changed in 9.0.

## See Also

- [E_STRICT deprecated](https://php.watch/versions/8.4/E_STRICT-deprecated)

## Error Messages

- [Constant %s is deprecated](https://php-errors.readthedocs.io/en/latest/messages/constant-%25s-is-deprecated.html)
