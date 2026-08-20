# str_replace() Enforces Strings In Array Argument

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/str_replaceOnArraysOfThings.html","headline":"str_replace() Enforces Strings In Array Argument","name":"str_replace() Enforces Strings In Array Argument","description":"str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/str_replaceOnArraysOfThings.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"str_replace() Enforces Strings In Array Argument"}]}}</script>

str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments.



Until PHP 8.0, it was possible to pass an array of arrays, and the inner arrays would be omitted in the replacement. In PHP 8.0, the inner arrays are cast to a string, aka `Array` and then, the replacements occurs.



This is also applicable to str_ireplace().

## PHP code

```php
<?php

var_dump(str_replace('a', 'b', [[]]));

class x {
	function __toString() {
		return 'def';
	}
}

var_dump(str_replace('a', 'b', [new x]));

?>
```

## Before

```text
array(1) {
  [0]=>
  array(0) {
  }
}
array(1) {
  [0]=>
  object(x)#1 (0) {
  }
}
```

## After

```text
PHP Warning:  Array to string conversion

Warning: Array to string conversion
array(1) {
  [0]=>
  string(5) Arrby
}
array(1) {
  [0]=>
  string(3) def
}
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Array to string conversion](https://php-errors.readthedocs.io/en/latest/messages/array-to-string-conversion.html)
