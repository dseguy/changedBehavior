# Generators Don't Return

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/generatorDontReturn.html","headline":"Generators Don't Return","name":"Generators Don't Return","description":"In PHP 5.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/generatorDontReturn.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Generators Don't Return"}]}}</script>

In PHP 5.x, generators were not allowed to have return values. This feature was added in PHP 7.0, with the `getReturn` method.

## PHP code

```php
<?php

function foo() {
    yield 'a';
    
    return 2;
}

foreach(foo() as $a) {
    print $a.PHP_EOL;
}

?>
```

## Before

```text
PHP Fatal error:  Generators cannot return values using "return" 

Fatal error: Generators cannot return values using "return" 
```

## After

```text
a
```

## PHP version change

This behavior changed in 7.0.

## Error Messages

- [Generator return type must be a supertype of Generator](https://php-errors.readthedocs.io/en/latest/messages/generator-return-type-must-be-a-supertype-of-generator.html)
