# No Dynamic Properties By Default

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dynamicProperties.html","headline":"No Dynamic Properties By Default","name":"No Dynamic Properties By Default","description":"Properties never required a definition before usage, just like variables.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dynamicProperties.html","inLanguage":"en","dateModified":"2026-01-20T16:04:56+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"No Dynamic Properties By Default"}]}}</script>

Properties never required a definition before usage, just like variables. They could be added at any moment in any object. 



In PHP 8.2, this is now a deprecated behavior. The property must be declared before usage. Visibility, type and default value are optional as before, so the requirement is to add the property in the class. 



It is also possible to skip that warning by extending explicitly the stdClass; by adding the #[AllowDynamicProperties] attribute or by creating the magic property method __get or __set, depending on the usage.



## PHP code

```php
<?php

class x {} 

$x = new x;
$x->property = 1; 
echo $x->property;

?>
```

## Before

```text
1
```

## After

```text
PHP Deprecated:  Creation of dynamic property x::$p is deprecated

Deprecated: Creation of dynamic property x::$p is deprecated
1
```

## PHP version change

This behavior was deprecated in 8.2.

This behavior changed in 9.0.

## See Also

- [PHP 8.2: Dynamic Properties are deprecated](https://php.watch/versions/8.2/dynamic-properties-deprecated)

## Error Messages

- [Creation of dynamic property User::$name is deprecated](https://php-errors.readthedocs.io/en/latest/messages/creation-of-dynamic-property-%25s%3A%3A%24%25s-is-deprecated.html)

## Analyzer

- [Classes/UndefinedProperty](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/UndefinedProperty.html)
