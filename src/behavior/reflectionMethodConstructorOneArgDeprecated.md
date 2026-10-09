# ReflectionMethod Constructor With A Single Argument Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/reflectionMethodConstructorOneArgDeprecated.html","headline":"ReflectionMethod Constructor With A Single Argument Is Deprecated","name":"ReflectionMethod Constructor With A Single Argument Is Deprecated","description":"`ReflectionMethod::__construct()` accepted two call shapes: two arguments, `new ReflectionMethod($classOrObject, $methodName)`, or a single string combining both as `\"Class::method\"`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/reflectionMethodConstructorOneArgDeprecated.html","inLanguage":"en","dateModified":"2026-09-09T15:22:57+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"ReflectionMethod Constructor With A Single Argument Is Deprecated"}]}}</script>

`ReflectionMethod::__construct()` accepted two call shapes: two arguments, `new ReflectionMethod($classOrObject, $methodName)`, or a single string combining both as `"Class::method"`. PHP 8.3 added `ReflectionMethod::createFromMethodName()` as a dedicated factory method for that single-string form. Until PHP 8.4, calling the constructor with just the combined string was completely silent. In PHP 8.4, it emits a deprecation notice in favor of the new factory method; the object it constructs, and the rest of the Reflection API, are unaffected.

## PHP code
```php
<?php

$m = new ReflectionMethod('DateTime::format');
echo $m->getName(), "\n";
```
## Before
```text
format
```
## After
```text
PHP Deprecated:  Calling ReflectionMethod::__construct() with 1 argument is deprecated, use ReflectionMethod::createFromMethodName() instead in /codes/reflectionMethodConstructorOneArgDeprecated.php on line 3

Deprecated: Calling ReflectionMethod::__construct() with 1 argument is deprecated, use ReflectionMethod::createFromMethodName() instead in /codes/reflectionMethodConstructorOneArgDeprecated.php on line 3
format
```
## PHP version change
This behavior was deprecated in 8.4.

This behavior changed in .

## See Also

- [PHP RFC: Deprecate functions with overloaded signatures](https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures)
- [ReflectionMethod::createFromMethodName()](https://www.php.net/manual/en/reflectionmethod.createfrommethodname.php)

## Error Messages

- [Calling ReflectionMethod::__construct() with 1 argument is deprecated, use ReflectionMethod::createFromMethodName() instead](https://php-errors.readthedocs.io/en/latest/messages/calling-reflectionmethod%3A%3A__construct%28%29-with-1-argument-is-deprecated%2C.html)

## Extension
- [Reflection](../extension.md#Reflection)