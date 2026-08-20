# array_key_exists() doesn't work on objects

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_key_existsOnObjects.html","headline":"array_key_exists() doesn't work on objects","name":"array_key_exists() doesn't work on objects","description":"array_key_exists() used to accept arrays and objects, and worked on them indistinctly.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/array_key_existsOnObjects.html","inLanguage":"en","dateModified":"2025-10-07T20:20:01+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"array_key_exists() doesn't work on objects"}]}}</script>

array_key_exists() used to accept arrays and objects, and worked on them indistinctly. 



Since PHP 8.0, array_key_exists() only works on arrays. Objects must be converted to arrays before usage.

## PHP code

```php
<?php

var_dump(array_key_exists('a', (object) ['a' => 1]));

?>
```

## Before

```text
true
```

## After

```text
Fatal error
```

## PHP version change

This behavior was deprecated in Using array_key_exists() on objects is deprecated. Use isset() or property_exists().

This behavior changed in 8.0.

## Error Messages

- [Uncaught TypeError: array_key_exists(): Argument #2 ($array) must be of type array, stdClass given](https://php-errors.readthedocs.io/en/latest/messages/array_key_exists%28%29%3A-argument-%232-%28%24array%29-must-be-of-type-array%2C-%25s-given.html)

## Analyzer

- [Php/ArrayKeyExistsWithObjects](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ArrayKeyExistsWithObjects.html)
