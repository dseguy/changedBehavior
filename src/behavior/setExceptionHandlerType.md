# set_exception_handler() Must Update Its Type To Throwable

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/setExceptionHandlerType.html","headline":"set_exception_handler() Must Update Its Type To Throwable","name":"set_exception_handler() Must Update Its Type To Throwable","description":"Until PHP 7.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/setExceptionHandlerType.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"set_exception_handler() Must Update Its Type To Throwable"}]}}</script>

Until PHP 7.0, all thrown issues were children of the `Exception` class. In PHP 7.0, all issues are children of `Throwable`. `Exception` is not only one of two classes implementing it, along with `Error`. 



To keep compatibility, it is important to switch types.

## PHP code

```php
<?php

// PHP 5.6- typed with Exception
class foo { 
    static function bar(\Exception $e) {
        print $e->getMessage();
    } 
}

set_exception_handler([Foo::class, 'bar']);

// Produces an error
1 / 0;

?>
```

## Before

```text
PHP Warning:  Division by zero 

Warning: Division by zero 
```

## After

```text
PHP Fatal error:  Uncaught TypeError: foo::bar(): Argument #1 ($e) must be of type Exception, DivisionByZeroError given 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [foo::bar(): Argument #1 ($e) must be of type Exception, DivisionByZeroError given](https://php-errors.readthedocs.io/en/latest/messages/argument-%23%25d-%28%24%25s%29-must-be-of-type-%25s%2C-%25s-given.html)
