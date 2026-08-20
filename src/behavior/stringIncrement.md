# String Increments

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/stringIncrement.html","headline":"String Increments","name":"String Increments","description":"String increments are the `++` operator applied to a string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/stringIncrement.html","inLanguage":"en","dateModified":"2026-08-12T15:28:52+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"String Increments"}]}}</script>

String increments are the `++` operator applied to a string. The last character is updated to the next one in ASCII order, with a wrap up after `z`. This feature was deprecated in PHP 8.3, and the `str_increment()` and `str_decrement()` functions are introduced to replace it.

## PHP code

```php
<?php

$a = 'abc';
// $a = 'ab!';
// in PHP 8.4, the last char must be non-alpha numeric to emit the warning
$a++;

echo $a;

?>
```

## Before

```text
abd
```

## After

```text
PHP Deprecated:  Increment on non-alphanumeric string is deprecated

abds
```

## PHP version change

This behavior changed in 5.6.

## Error Messages

- [Increment on non-alphanumeric string is deprecated](https://php-errors.readthedocs.io/en/latest/messages/increment-on-non-alphanumeric-string-is-deprecated.html)
