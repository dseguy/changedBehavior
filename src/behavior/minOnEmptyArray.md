# min() Doesn't Accept Empty Arrays

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/minOnEmptyArray.html","headline":"min() Doesn't Accept Empty Arrays","name":"min() Doesn't Accept Empty Arrays","description":"min() doesn't accept empty arrays anymore.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/minOnEmptyArray.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"min() Doesn't Accept Empty Arrays"}]}}</script>

min() doesn't accept empty arrays anymore. It used to, and returned false, which is a type away from 0. 



Nowadays, to distinguish between returned false or null and an empty array, an exception is raised. It is recommended to check the array for content before using min() or to catch the Error with a try catch. 



Note that max() behave the same.

## PHP code

```php
<?php

try {
	$a = min([]);
} catch (\Error $e) {
	print $e->getMessage();
}

var_dump($a);

?>
```

## Before

```text
PHP Warning:  min(): Array must contain at least one element

Warning: min(): Array must contain at least one element
bool(false)
```

## After

```text
min(): Argument #1 ($value) must contain at least one elementPHP Warning:  Undefined variable $a

Warning: Undefined variable $a
NULL
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Must contain at least one element](https://php-errors.readthedocs.io/en/latest/messages/must-contain-at-least-one-element.html)
