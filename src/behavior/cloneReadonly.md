# Can Clone Readonly Properties

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/cloneReadonly.html","headline":"Can Clone Readonly Properties","name":"Can Clone Readonly Properties","description":"Readonly properties may be changed, both at constructor and cloning time, since PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/cloneReadonly.html","inLanguage":"en","dateModified":"2025-12-31T05:48:14+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Can Clone Readonly Properties"}]}}</script>

Readonly properties may be changed, both at constructor and cloning time, since PHP 8.3. Until then, once set, they could never be changed.

## PHP code

```php
<?php

class X {
	readonly int $property;
	readonly A $property2;
	
	function __construct(int $p) {
		$this->property = $p;
		$this->property2 = new A($p);
	}
	
	function __clone() {
		$this->property++; // clone used to change scalar
		$this->property2 = new A($this->property); // clone used to change object
	}
}

$x = new X;
$y = clone $x;

var_dump($y);

?>
```

## Before

```text
PHP Fatal error:  Uncaught Error: Cannot modify readonly property x::$p

Fatal error: Uncaught Error: Cannot modify readonly property x::$p
```

## After

```text
object(x)#2 (1) {
  ["p"]=>
  int(3)
}
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Cannot modify readonly property %s::$%s](https://php-errors.readthedocs.io/en/latest/messages/cannot-modify-readonly-property-%25s%3A%3A%24%25s.html)

## Analyzer

- [Classes/CanCloneReadonly](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/CanCloneReadonly.html)
