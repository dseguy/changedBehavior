# Final Promoted Properties

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finalPromotedProperties.html","headline":"Final Promoted Properties","name":"Final Promoted Properties","description":"Promoted properties could not be final.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/finalPromotedProperties.html","inLanguage":"en","dateModified":"2026-08-20T19:26:05+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Final Promoted Properties"}]}}</script>

Promoted properties could not be final. Since PHP 8.5, it is possible to use final in promoted properties definition.

## PHP code

```php
<?php

class x {
    function __construct( 
        public final int $i
    ) {}
}

var_dump(new x(1));

?>
```

## Before

```text
PHP Fatal error:  Cannot use the final modifier on a parameter

Fatal error: Cannot use the final modifier on a parameter
```

## After

```text
object(x)#1 (1) {
  ["i"]=>
  int(1)
}
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Cannot use the final modifier on a parameter](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-the-final-modifier-on-a-parameter.html)
