# Removing $this from a closure is deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/UnbindingThis.html","headline":"Removing $this from a closure is deprecated","name":"Removing $this from a closure is deprecated","description":"When a closure is created in a non-static method, it imports automatically the current object.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/UnbindingThis.html","inLanguage":"en","dateModified":"2025-09-01T20:41:32+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Removing $this from a closure is deprecated"}]}}</script>

When a closure is created in a non-static method, it imports automatically the current object. Nowadays, it is not possible to remove that object from the closure, as it would not run anymore.

## PHP code

```php
<?php

class x {
	private $p = 1;
	
	function foo() {
		return function () { return $this->p; };
	}
}

$x = new x;
$closure = $x->foo();
print $closure->bindTo(null);

?>
```

## Before

```text
PHP Deprecated:  Unbinding $this of closure is deprecated

Deprecated: Unbinding $this of closure is deprecated
PHP Fatal error:  Uncaught Error: Object of class Closure could not be converted to string

Fatal error: Uncaught Error: Object of class Closure could not be converted to string
```

## After

```text
PHP Warning:  Cannot unbind $this of closure using $this

Warning: Cannot unbind $this of closure using $this
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Object of class %s could not be converted to string](https://php-errors.readthedocs.io/en/latest/messages/object-of-class-%25s-could-not-be-converted-to-string.html)
