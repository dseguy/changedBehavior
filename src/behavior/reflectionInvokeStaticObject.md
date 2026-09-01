# ReflectionMethod::invoke() Deprecates Passing An Object For A Static Method

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/reflectionInvokeStaticObject.html","headline":"ReflectionMethod::invoke() Deprecates Passing An Object For A Static Method","name":"ReflectionMethod::invoke() Deprecates Passing An Object For A Static Method","description":"`ReflectionMethod::invoke()` and `ReflectionMethod::invokeArgs()` take an object as the first argument, used as `$this` for instance methods.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/reflectionInvokeStaticObject.html","inLanguage":"en","dateModified":"2026-09-01T07:49:31+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"ReflectionMethod::invoke() Deprecates Passing An Object For A Static Method"}]}}</script>

`ReflectionMethod::invoke()` and `ReflectionMethod::invokeArgs()` take an object as the first argument, used as `$this` for instance methods. Until PHP 8.6, passing an object for a `static` method was silently accepted and the object was simply ignored. In PHP 8.6, passing a non-null object for a static method emits a deprecation notice, even though the call still succeeds.

## PHP code

```php
<?php

class C {
    public static function staticMethod() {
        return "called";
    }
}

$rm = new ReflectionMethod(C::class, 'staticMethod');
var_dump($rm->invoke(new C()));

?>
```

## Before

```text
string(6) "called" 
```

## After

```text
PHP Deprecated:  Calling ReflectionMethod::invoke() for static method C::staticMethod() does not need an object parameter in /codes/reflectionInvokeStaticObject.php on line 10

Deprecated: Calling ReflectionMethod::invoke() for static method C::staticMethod() does not need an object parameter in /codes/reflectionInvokeStaticObject.php on line 10
string(6) "called" 
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [ReflectionMethod::invoke](https://www.php.net/manual/en/reflectionmethod.invoke.php)
- [ReflectionMethod::invokeArgs](https://www.php.net/manual/en/reflectionmethod.invokeargs.php)

## Error Messages

- [Calling ReflectionMethod::invoke() for static method %s::%s() does not need an object parameter](https://php-errors.readthedocs.io/en/latest/messages/calling-reflectionmethod%3A%3Ainvoke%28%29-for-static-method-%25s%3A%3A%25s%28%29-does-not-need-an-object-parameter.html)
