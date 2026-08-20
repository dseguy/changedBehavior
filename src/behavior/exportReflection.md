# Method export() in Reflection Is removed

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/exportReflection.html","headline":"Method export() in Reflection Is removed","name":"Method export() in Reflection Is removed","description":"The `Reflection::export()` static method was deprecated in PHP 7.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/exportReflection.html","inLanguage":"en","dateModified":"2026-02-25T23:50:43+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Method export() in Reflection Is removed"}]}}</script>

The `Reflection::export()` static method was deprecated in PHP 7.4 and removed in 8.0.

## PHP code

```php
<?php

class A {}

$reflector = new ReflectionClass('A');

print Reflection::export($reflector, true);

?>
```

## Before

```text
PHP Deprecated:  Function Reflection::export() is deprecated 

Deprecated: Function Reflection::export() is deprecated 
Class [ <user> class A ] {
  @@ /exportReflection.php 3-3

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [0] {
  }
}
```

## After

```text
PHP Fatal error:  Uncaught Error: Call to undefined method Reflection::export() 

Fatal error: Uncaught Error: Call to undefined method Reflection::export() 
```

## PHP version change

This behavior changed in 8.0.
