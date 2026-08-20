# Unpack Arrays In Arrays

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unpack_arrays.html","headline":"Unpack Arrays In Arrays","name":"Unpack Arrays In Arrays","description":"The ellipsis operator can now be used in arrays, with an effect similar to array_merge().","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unpack_arrays.html","inLanguage":"en","dateModified":"2025-09-01T20:10:41+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Unpack Arrays In Arrays"}]}}</script>

The ellipsis operator can now be used in arrays, with an effect similar to array_merge(). In particular, the string keys are now supported.

## PHP code

```php
<?php

$array = [...['a' => 'foo'], ...['b' => 'bar']];

print_r($array);

?>
```

## Before

```text
PHP Fatal error:  Cannot unpack array with string keys

Fatal error: Cannot unpack array with string keys
```

## After

```text
Array
(
    [a] => foo
    [b] => bar
)
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Cannot unpack array with string keys](https://php-errors.readthedocs.io/en/latest/messages/cannot-unpack-array-with-string-keys.html)

## Analyzer

- [Structures/ArrayWithStringEllipsis](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/ArrayWithStringEllipsis.html)
