# Old Style Constructor

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/oldStyleConstructor.html","headline":"Old Style Constructor","name":"Old Style Constructor","description":"Since PHP 5, the constructor method of a class was the eponymous method: the method with the same name as the class.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/oldStyleConstructor.html","inLanguage":"en","dateModified":"2025-11-07T09:50:25+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Old Style Constructor"}]}}</script>

Since PHP 5, the constructor method of a class was the eponymous method: the method with the same name as the class. 



In PHP 7, this feature was deprecated in favor of using the `__construct`. During that phase, `__construct` had priority over the eponymous function, but the latter was still used in case of fallback, for backward compatibility.



In PHP 8, the eponymous method is now a normal method.

## PHP code

```php
<?php

class X {
    function X() {
        echo __METHOD__;
    }
}

var_dump(new X());

?>
```

## Before

```text
PHP Deprecated:  Methods with the same name as their class will not be constructors in a future version of PHP; X has a deprecated constructor

Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; X has a deprecated constructor
X::Xobject(X)#1 (0) {
}
```

## After

```text
object(X)#1 (0) {
}
```

## PHP version change

This behavior was deprecated in 7.0.

This behavior changed in 8.0.

## Error Messages

- [Deprecated: Methods with the same name as their class will not be constructors in a future version of PHP; x has a deprecated constructor](https://php-errors.readthedocs.io/en/latest/messages/methods-with-the-same-name-as-their-class-will-not-be-constructors-in-a-future-version-of-php%3B-%25s-has-a-deprecated-constructor.html)

## Analyzer

- [Classes/OldStyleConstructor](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/OldStyleConstructor.html)
