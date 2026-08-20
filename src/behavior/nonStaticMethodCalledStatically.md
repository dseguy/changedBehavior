# Non Static Method Called Statically

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nonStaticMethodCalledStatically.html","headline":"Non Static Method Called Statically","name":"Non Static Method Called Statically","description":"It is not possible to call a non-static method statically, and now, it is also not possible to call non-statically a static method.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nonStaticMethodCalledStatically.html","inLanguage":"en","dateModified":"2026-02-25T23:45:17+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Non Static Method Called Statically"}]}}</script>

It is not possible to call a non-static method statically, and now, it is also not possible to call non-statically a static method. 



The static syntax is still valid with expression like `parent::__construct`. Be aware that a call such as `self::foo` also checks if the target method is static.



## PHP code

```php
<?php

class Foo {
    public function bar() {}
    
    static function foo() {
    	self::bar();
    }
}
//Non-static method Foo::bar() cannot be called statically (line 10)
Foo::bar();

//Non-static method Foo::bar() cannot be called statically (line 6)
Foo::foo();

?>
```

## Before

```text
PHP Deprecated:  Non-static method Foo::bar() should not be called statically 

Deprecated: Non-static method Foo::bar() should not be called statically 
```

## After

```text
PHP Fatal error:  Uncaught Error: Non-static method Foo::bar() cannot be called statically 

Fatal error: Uncaught Error: Non-static method Foo::bar() cannot be called statically 
```

## PHP version change

This behavior was deprecated in 7.0.

This behavior changed in 8.0.

## Error Messages

- [Non-static method Foo::bar() cannot be called statically](https://php-errors.readthedocs.io/en/latest/messages/non-static-method-%25s%3A%3A%25s%28%29-cannot-be-called-statically.html)

## Analyzer

- [Classes/NonStaticMethodsCalledStatic](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/NonStaticMethodsCalledStatic.html)
