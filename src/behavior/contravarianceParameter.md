# Parameter Contravariance

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/contravarianceParameter.html","headline":"Parameter Contravariance","name":"Parameter Contravariance","description":"PHP 7.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/contravarianceParameter.html","inLanguage":"en","dateModified":"2026-01-04T21:00:40+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Parameter Contravariance"}]}}</script>

PHP 7.4 added the support of parameter type contravariance. The parameter type of a child class may be less strict than the one of the parent. 



In PHP 7.3, the child method must have the same parameter type than the parent.



## PHP code

```php
<?php

interface I {}

interface J extends I {}

class X {
	function foo(j $a) {}
}

class Y extends X {
	function foo(i $a) {}
}

var_dump(new Y);

?>
```

## Before

```text
PHP Warning:  Declaration of y::foo(i $a) should be compatible with x::foo(j $a)

Warning: Declaration of y::foo(i $a) should be compatible with x::foo(j $a)
object(y)#1 (0) {
}
```

## After

```text
object(y)#1 (0) {
}
```

## PHP version change

This behavior changed in 7.4.

## Error Messages

- [Declaration of %s::%s() should be compatible with %s::%s()](https://php-errors.readthedocs.io/en/latest/messages/declaration-of-%25s%3A%3A%25s%28%29-must-be-compatible-with-%25s%3A%3A%25s%28%29.html)
