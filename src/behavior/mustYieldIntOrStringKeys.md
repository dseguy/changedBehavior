# Yield Must Use Integer Or String Keys

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mustYieldIntOrStringKeys.html","headline":"Yield Must Use Integer Or String Keys","name":"Yield Must Use Integer Or String Keys","description":"A generator is unpacked as an array, and as such, it doesn't allow keys to be anything else but string or integer.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mustYieldIntOrStringKeys.html","inLanguage":"en","dateModified":"2025-10-31T16:49:04+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Yield Must Use Integer Or String Keys"}]}}</script>

A generator is unpacked as an array, and as such, it doesn't allow keys to be anything else but string or integer. The generator may still be used in a foreach() structure, and yield usable keys, but it can't be unpacked or turned into a array without an error. In previous versions, the keys would be ignored, and re-indexed.

## PHP code

```php
<?php

function foo(...$args) {
    var_dump($args);
}
function gen() {
    yield 1.23 => 123;
}
foo(...gen());

?>
```

## Before

```text
array(3) {
  [0]=>
  int(123)
  [1]=>
  int(123)
  [2]=>
  int(123)
}
```

## After

```text
Fatal error: Uncaught Error: Keys must be of type int|string during argument unpacking
```

## PHP version change

This behavior changed in 7.2.

## Error Messages

- [Keys must be of type int|string during array unpacking](https://php-errors.readthedocs.io/en/latest/messages/keys-must-be-of-type-int%7Cstring-during-array-unpacking.html)
