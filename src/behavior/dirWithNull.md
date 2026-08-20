# No More dir() With Null

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dirWithNull.html","headline":"No More dir() With Null","name":"No More dir() With Null","description":"When calling `dir()` with `null` as parameter, it defaulted to open again the last opened directory.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dirWithNull.html","inLanguage":"en","dateModified":"2026-02-01T21:01:47+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"No More dir() With Null"}]}}</script>

When calling `dir()` with `null` as parameter, it defaulted to open again the last opened directory. Since PHP 8.1, this is not possible anymore.

## PHP code

```php
<?php

$a = dir('/tmp');

$b = dir(null);

var_dump($b);

?>
```

## Before

```text
bool(false)
```

## After

```text
PHP Deprecated:  dir(): Passing null to parameter #1 ($directory) of type string is deprecated

Deprecated: dir(): Passing null to parameter #1 ($directory) of type string is deprecated
bool(false)
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Passing null to parameter #1 ($directory) of type string is deprecated](https://php-errors.readthedocs.io/en/latest/messages/passing-null-is-deprecated%2C-instead-the-last-opened-directory-stream-should-be-provided.html)
