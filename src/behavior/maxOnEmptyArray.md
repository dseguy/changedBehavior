# max() Must Contain At Least One Element

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/maxOnEmptyArray.html","headline":"max() Must Contain At Least One Element","name":"max() Must Contain At Least One Element","description":"max() returns the largest value in the argument.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/maxOnEmptyArray.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"max() Must Contain At Least One Element"}]}}</script>

max() returns the largest value in the argument. When that argument is an empty array, there is an ambiguity related to the returned value, as there is no such value. PHP would return `null`, thought it is possible for max() to return `null`. 



To be consistent, PHP emits an error on an empty array : it is not possible to get the maximum value when there are none.

## PHP code

```php
<?php

try {
	$a = max([]);
} catch (\Error $e) {
	print $e->getMessage();
}

var_dump($a);

?>
```

## Before

```text
PHP Warning:  max(): Array must contain at least one element 

Warning: max(): Array must contain at least one element 
bool(false)
```

## After

```text
max(): Argument #1 ($value) must contain at least one elementPHP Warning:  Undefined variable $a 

Warning: Undefined variable $a 
NULL
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Must contain at least one element](https://php-errors.readthedocs.io/en/latest/messages/must-contain-at-least-one-element.html)
