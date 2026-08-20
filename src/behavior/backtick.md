# Back-tick Operator Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/backtick.html","headline":"Back-tick Operator Is Deprecated","name":"Back-tick Operator Is Deprecated","description":"The back tick operator is deprecated, and will be removed in PHP 9.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/backtick.html","inLanguage":"en","dateModified":"2026-01-22T09:58:00+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Back-tick Operator Is Deprecated"}]}}</script>

The back tick operator is deprecated, and will be removed in PHP 9.0. It should be replaced with a call to `shell_exec()`, which is the function equivalent. It may also be replaced with any other dedicated feature: for example, listing files in a directory may be replaced with a call to `scandir()`.

## PHP code

```php
<?php

print `echo 'Hello'`;

?>
```

## Before

```text
Hello
```

## After

```text
PHP Deprecated:  The backtick (`) operator is deprecated, use shell_exec() instead

Deprecated: The backtick (`) operator is deprecated, use shell_exec() instead
Hello
```

## PHP version change

This behavior was deprecated in 8.5.

This behavior changed in .

## See Also

- [PHP RFC: Deprecations for PHP 8.5](https://wiki.php.net/rfc/deprecations_php_8_5)

## Error Messages

- [The backtick (\`) operator is deprecated, use shell_exec() instead](https://php-errors.readthedocs.io/en/latest/messages/the-backtick-%28%60%29-operator-is-deprecated%2C-use-shell_exec%28%29-instead.html)

## Analyzer

- [Php/DeprecatedBackTicks](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/DeprecatedBackTicks.html)
