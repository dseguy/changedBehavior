# Unpack Array With String Keys

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unpack_arrays_with_strings.html","headline":"Unpack Array With String Keys","name":"Unpack Array With String Keys","description":"The ellipsis operator was introduced to unpack arrays.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unpack_arrays_with_strings.html","inLanguage":"en","dateModified":"2026-08-20T19:19:34+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Unpack Array With String Keys"}]}}</script>

The ellipsis operator was introduced to unpack arrays. In PHP 7.4, it only supported integer keys, and not string keys. This was introduced in PHP 8.0.

## PHP code

```php
<?php

$array = ['a' => 1];

foo(...$array);

function foo($a) {
	echo $a;
}

?>
```

## Before

```text
PHP Fatal error:  Uncaught Error: Cannot unpack array with string keys

Fatal error: Uncaught Error: Cannot unpack array with string keys
```

## After

```text
1
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Cannot unpack array with string keys](https://php-errors.readthedocs.io/en/latest/messages/cannot-unpack-array-with-string-keys.html)

## Analyzer

- [Structures/ArrayWithStringEllipsis](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/ArrayWithStringEllipsis.html)
