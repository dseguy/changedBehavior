# namespace Is Not Valid As A Class Constant Name

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/namespaceClassConst.html","headline":"namespace Is Not Valid As A Class Constant Name","name":"namespace Is Not Valid As A Class Constant Name","description":"namespace is a PHP keyword, and it is allowed inside class for naming methods or properties.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/namespaceClassConst.html","inLanguage":"en","dateModified":"2026-08-13T10:17:08+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"namespace Is Not Valid As A Class Constant Name"}]}}</script>

namespace is a PHP keyword, and it is allowed inside class for naming methods or properties. After PHP 8.6, it is not possible to use it for constant name.



The actual motivation is a future feature: reserving namespace would allow a future `::namespace` pseudo-constant, analogous to `::class`, for directory namespaces. For example, replacing stringy APIs like `Order\Domain\Entities` with `\Order\Domain\Entities::namespace`, which gives you IDE support, refactoring, and static analysis for free.

## PHP code

```php
<?php

class x { const namespace= 1;}

echo x::namespace;

?>
```

## Before

```text
1
```

## After

```text
PHP Deprecated:  Declaring class constant called 'namespace' is deprecated in /codes/namespaceClassConst.php on line 3

Deprecated: Declaring class constant called 'namespace' is deprecated in /codes/namespaceClassConst.php on line 3
1
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in 8.6.

## See Also

- [PHP RFC: PHP Namespace Policy](https://wiki.php.net/rfc/deprecations_php_8_6)

## Error Messages

- [Declaring class constant called 'namespace' is deprecated](https://php-errors.readthedocs.io/en/latest/messages/Declaring+class+constant+called+%27namespace%27+is+deprecated.html)
