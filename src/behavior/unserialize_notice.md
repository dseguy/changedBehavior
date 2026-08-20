# unserialize() Error Report

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_notice.html","headline":"unserialize() Error Report","name":"unserialize() Error Report","description":"unserialize() parses a string into a PHP data structure: array, int, object, etc.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_notice.html","inLanguage":"en","dateModified":"2026-02-06T21:26:18+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"unserialize() Error Report"}]}}</script>

unserialize() parses a string into a PHP data structure: array, int, object, etc. When the parser encounters an error, it emits a specific message, and returns null. This error used to be a `notice` and it now a `warning`.

## PHP code

```php
<?php

unserialize("an invalid string");

?>
```

## Before

```text
PHP Notice:  unserialize(): Error at offset 0 of 17 bytes

Notice: unserialize(): Error at offset 0 of 17 bytes
```

## After

```text
PHP Warning:  unserialize(): Error at offset 0 of 17 bytes

Warning: unserialize(): Error at offset 0 of 17 bytes
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Error at offset 0 of 17 bytes](https://php-errors.readthedocs.io/en/latest/messages/error-at-offset-%25zd-of-%25zd.html)
