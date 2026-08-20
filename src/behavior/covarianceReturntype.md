# Returntype Covariance

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/covarianceReturntype.html","headline":"Returntype Covariance","name":"Returntype Covariance","description":"PHP added the support of return type covariance.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/covarianceReturntype.html","inLanguage":"en","dateModified":"2026-08-20T19:27:30+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Returntype Covariance"}]}}</script>

PHP added the support of return type covariance. Since PHP 7.4, the return type of a child class may be more strict than the one of the parent. 



In PHP 7.3, the child method must have the same return type than the parent.



## PHP code

```php
<?php

interface I {}

interface J extends I {}

class X {
	function foo() : I {
	
	}
}

class Y extends X {
	function foo() : J {
	
	}
}

var_dump(new Y);

?>
```

## Before

```text
PHP Fatal error:  Declaration of y::foo(): j must be compatible with x::foo(): i 

Fatal error: Declaration of y::foo(): j must be compatible with x::foo(): i 
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
