# isset()-Materialized Magic Property Skips __get()

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/magicPropertyIssetGet86.html","headline":"isset()-Materialized Magic Property Skips __get()","name":"isset()-Materialized Magic Property Skips __get()","description":".","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/magicPropertyIssetGet86.html","inLanguage":"en","dateModified":"2026-08-20T19:30:05+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"isset()-Materialized Magic Property Skips __get()"}]}}</script>

?? and empty() on an inaccessible property call __isset() first. If __isset() materializes the property, by writing directly into the object's property table, for example $this->$name = ..., PHP 8.6 returns that freshly-written value directly instead of calling __get() afterwards. Until PHP 8.6, __get() was still called even though the property now exists, and its return value was used instead of the value __isset() had just written. Plain isset() is unaffected by this change.

## PHP code

```php
<?php

#[AllowDynamicProperties]
class Magic {
    public function __isset($name) {
        echo "__isset($name) called\n";
        $this->$name = 'materialized-by-isset';
        return true;
    }
    public function __get($name) {
        echo "__get($name) called\n";
        return 'from __get';
    }
}

$m = new Magic();
var_dump($m->x ?? 'default');

?>
```

## Before

```text
__isset(x) called
__get(x) called
string(10) "from __get" 
```

## After

```text
__isset(x) called
string(21) "materialized-by-isset" 
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [PHP 8.6 UPGRADING](https://github.com/php/php-src/blob/master/UPGRADING)
