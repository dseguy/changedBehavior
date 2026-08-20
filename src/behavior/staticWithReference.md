# Static Properties With References

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticWithReference.html","headline":"Static Properties With References","name":"Static Properties With References","description":"Static properties are shared between inheriting classes.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticWithReference.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Static Properties With References"}]}}</script>

Static properties are shared between inheriting classes. However, due to an implementation artifact, it was possible to separate the static properties by assigning a reference. This loophole has been fixed in PHP 7.3.

## PHP code

```php
<?php

    class Test {
        public static $x = 0;
    }
    class Test2 extends Test { }
    
    Test2::$x = &$x;
    $x = 1;
    
    var_dump(Test::$x, Test2::$x);
    // Previously: int(0), int(1)
    // Now: int(1), int(1)

?>
```

## Before

```text
int(0)
int(1)
```

## After

```text
int(1)
int(1)
```

## PHP version change

This behavior changed in 7.3.
