# Relative Callable In Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/relativeCallable.html","headline":"Relative Callable In Strings","name":"Relative Callable In Strings","description":"PHP has a syntax to designate a method, with its class and method name as a string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/relativeCallable.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Relative Callable In Strings"}]}}</script>

PHP has a syntax to designate a method, with its class and method name as a string. That syntax used to support relative class names, such as self, parent and static. That allowed the definition of callable that would be relative to their point of execution, and not their point of definition. This is a gone feature in PHP 8.2.

## PHP code

```php
<?php

class x {
    function a() {
        print __METHOD__;
    }
    
    function b() {
        call_user_func('self::a');
    }
}

(new x)->b();

?>
```

## Before

```text
x::a
```

## After

```text
PHP Deprecated:  Use of "self" in callables is deprecated

Deprecated: Use of "self" in callables is deprecated
x::a
```

## PHP version change

This behavior was deprecated in 8.2.

This behavior changed in 9.0.

## See Also

- [PHP RFC: Expand deprecation notice scope for partially supported callables](\https://wiki.php.net/rfc/partially-supported-callables-expand-deprecation-notices)
- [Callable](https://www.php.net/manual/en/language.types.callable.php)

## Error Messages

- [Use of "self" in callables is deprecated](https://php-errors.readthedocs.io/en/latest/messages/use-of-%22self%22-in-callables-is-deprecated.html)

## Analyzer

- [Functions/DeprecatedCallable](https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/DeprecatedCallable.html)
