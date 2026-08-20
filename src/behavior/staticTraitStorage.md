# Storage Of Static Properties Trait

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticTraitStorage.html","headline":"Storage Of Static Properties Trait","name":"Storage Of Static Properties Trait","description":"Static properties defined in a trait used to be merged with any existing static property in a parent class.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticTraitStorage.html","inLanguage":"en","dateModified":"2026-02-06T21:39:56+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Storage Of Static Properties Trait"}]}}</script>

Static properties defined in a trait used to be merged with any existing static property in a parent class. Since PHP 8.3, the static property is directly related to the importing class, and is made distinct from any pre-existing static class.

## PHP code

```php
<?php

trait T {
    static $T = 1;
}

class X {
    static $T = 1;

    function goo() {
        echo self::$T;
    }

}

class Y extends X {
    use t;
    
    function foo() {
        self::$T = 2;
        echo self::$T;
        self::goo();
    }
    
}

(new y)->foo();

?>
```

## Before

```text
2
```

## After

```text
1
```

## PHP version change

This behavior changed in 8.3.
