# class_alias() Works On Internal Classes

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/classAliasWithInternalClass.html","headline":"class_alias() Works On Internal Classes","name":"class_alias() Works On Internal Classes","description":"class_alias() makes an alias for a class, an enumeration, an interface or a trait.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/classAliasWithInternalClass.html","inLanguage":"en","dateModified":"2026-01-20T06:24:04+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"class_alias() Works On Internal Classes"}]}}</script>

class_alias() makes an alias for a class, an enumeration, an interface or a trait. Until PHP 8.3, it was only possible on custom structures.

## PHP code

```php
<?php

class_alias(stdClass::class, A::class);

var_dump(new A);

?>
```

## Before

```text
First argument of class_alias() must be a name of user defined class
```

## After

```text
object(stdClass)#1 (0) {
}
```

## PHP version change

This behavior changed in 8.3.

## See Also

- [class_alias()](https://php.net/class_alias)

## Error Messages

- [must be a user-defined class name, internal class name given](https://php-errors.readthedocs.io/en/latest/messages/must-be-a-user-defined-class-name%2C-internal-class-name-given.html)
