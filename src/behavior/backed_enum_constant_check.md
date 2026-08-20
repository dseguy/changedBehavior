# Backed Enum Values Needed To Compile

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/backed_enum_constant_check.html","headline":"Backed Enum Values Needed To Compile","name":"Backed Enum Values Needed To Compile","description":"The backed enums needed to be a completely processable at compile time.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/backed_enum_constant_check.html","inLanguage":"en","dateModified":"2026-08-20T19:20:07+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Backed Enum Values Needed To Compile"}]}}</script>

The backed enums needed to be a completely processable at compile time. In particular, using other constants, global or class, was not possible. 



In PHP 8.2 and later, this problem has be postponed to execution time. This means that, when the constant values in the expression are available at usage time, then it is OK. 



Note that all the case expressions are checked at once, whatever the case, or constant used. If any constant expression is missing, even if it is not used, then PHP yields a fatal error. Autoload may play its part.



## PHP code

```php
<?php

const D = 1;

enum Foo: string {
    case A = '/' . D;
    case B = '/' . B;
    const C = 1;
}

Foo::A; // first actual usage of the case

?>
```

## Before

```text
PHP Fatal error:  Enum case value must be compile-time evaluatable 

Fatal error: Enum case value must be compile-time evaluatable 
```

## After

```text
PHP Fatal error:  Uncaught Error: Undefined constant B

Fatal error: Uncaught Error: Undefined constant B
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Enum case value must be compile-time evaluatable](https://php-errors.readthedocs.io/en/latest/messages/enum-case-value-must-be-compile-time-evaluatable.html)
