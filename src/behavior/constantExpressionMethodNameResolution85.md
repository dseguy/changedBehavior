# First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constantExpressionMethodNameResolution85.html","headline":"First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name","name":"First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name","description":"PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constantExpressionMethodNameResolution85.html","inLanguage":"en","dateModified":"2026-08-12T15:26:44+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"First-Class Callables Inside Constant Expressions Must Resolve To A Literal Method Name"}]}}</script>

PHP 8.5 allows first-class callable syntax (`(...)`) to be used inside a constant expression -- a global constant, a class constant, a static property default, a parameter default value, and so on -- so that a static method can be turned into a `Closure` at compile time. To build that closure, the method name must be resolvable at compile time, which introduces two new, related compile errors for static method calls (`X::method(...)`):



'Cannot use dynamic method name in constant expression' is reported when the braced method-name expression cannot be folded down to a constant value at all -- for example because it is an array, or depends on something not known at compile time.



'Illegal method name' is reported when the braced expression does resolve to a compile-time constant, but that value is not a legal method name, such as an integer.



The equivalent restrictions for a plain function name (rather than a static method) are reported as 'Cannot use dynamic function name in constant expression' and 'Illegal function name'.

## PHP code

```php
<?php

class X {
    public static function foo() { return 1; }
}

const C1 = X::{[1, 2]}(...); // Cannot use dynamic method name in constant expression

const C2 = X::{0}(...); // Illegal method name

?>
```

## Before

```text

```

## After

```text
PHP Fatal error:  Cannot use dynamic method name in constant expression
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Cannot use dynamic method name in constant expression](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-dynamic-method-name-in-constant-expression.html)
- [Illegal method name](https://php-errors.readthedocs.io/en/latest/messages/illegal-method-name.html)
