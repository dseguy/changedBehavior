# Unserialize with the upper case S is deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_S.html","headline":"Unserialize with the upper case S is deprecated","name":"Unserialize with the upper case S is deprecated","description":"When using the unserialize() function, the string should not use `S` (upper case S) to format a string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_S.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Unserialize with the upper case S is deprecated"}]}}</script>

When using the unserialize() function, the string should not use `S` (upper case S) to format a string. It should only use `s` (lower case S).



Other formats, such as `i`, `b` or `N` are already case sensitive.

## PHP code

```php
<?php

var_dump(unserialize('S:1:e;'));

?>
```

## Before

```text
string(1) e
```

## After

```text
PHP Deprecated:  unserialize(): Unserializing the 'S' format is deprecated

Deprecated: unserialize(): Unserializing the 'S' format is deprecated
string(1) e
```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [Unserializing the 'S' format is deprecated](https://php-errors.readthedocs.io/en/latest/messages/unserializing-the-%27s%27-format-is-deprecated.html)
