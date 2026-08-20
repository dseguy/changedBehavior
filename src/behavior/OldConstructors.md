# Old Constructors

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/OldConstructors.html","headline":"Old Constructors","name":"Old Constructors","description":"In PHP 4, the constructor was the method of the same name as the class.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/OldConstructors.html","inLanguage":"en","dateModified":"2026-01-20T06:52:11+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Old Constructors"}]}}</script>

In PHP 4, the constructor was the method of the same name as the class. They were called during instantiation of an object. In PHP 7, there were replaced with the `__construct` method, and were used in case of fallback.



Old constructors are also called `PHP 4 constructor`, as they were used during that time; they are also called eponymous constructors, as they use the same name as the class. 

## PHP code

```php
<?php

class X {
	function x() {
		print __METHOD__;
	}

	function foo() {
		print __METHOD__;
	}
}

(new x())->foo();
?>
```

## Before

```text
PHP Deprecated:  Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor

Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor
x::xx::foo
```

## After

```text
x::foo
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Methods with the same name as their class will not be constructors in a future version of PHP](https://php-errors.readthedocs.io/en/latest/messages/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php%3B-%25s-has-a-deprecated-constructor.html)

## Analyzer

- [Classes/OldStyleConstructor](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/OldStyleConstructor.html)
