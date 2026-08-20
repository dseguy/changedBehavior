# str_replace() On Arrays Of Objects

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/str_replaceOnArraysOfObjects.html","headline":"str_replace() On Arrays Of Objects","name":"str_replace() On Arrays Of Objects","description":"str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/str_replaceOnArraysOfObjects.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"str_replace() On Arrays Of Objects"}]}}</script>

str_replace() accepts an array of strings as third argument: it applies all the replacements to all the strings in that arguments.



Until PHP 8.0, it was possible to pass an array of arrays, and the inner arrays would be omitted in the replacement. In PHP 8.0, the objects are cast to a string: `stringeable` objects are always converted, while non-`stringeable` objects yields a Fatal error.



This is also applicable to str_ireplace().

## PHP code

```php
<?php

class x {
	function __toString() {
		return 'def';
	}
}

var_dump(str_replace('a', 'b', [new x]));

var_dump(str_replace('a', 'b', [new stdclass]));

?>
```

## Before

```text
array(1) {
  [0]=>
  object(stdClass)#1 (0) {
  }
}
```

## After

```text
array(1) {
  [0]=>
  string(3) def
}
PHP Fatal error:  Uncaught Error: Object of class stdClass could not be converted to string
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Object of class stdClass could not be converted to string](https://php-errors.readthedocs.io/en/latest/messages/object-of-class-%25s-could-not-be-converted-to-%25s.html)
