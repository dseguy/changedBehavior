# __FUNCTION__ In Closure Changed

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/magicConstantInClosure.html","headline":"__FUNCTION__ In Closure Changed","name":"__FUNCTION__ In Closure Changed","description":"When using the magic constant `__FUNCTION__` inside a closure, the content used to be the `{closure}` string only.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/magicConstantInClosure.html","inLanguage":"en","dateModified":"2026-01-20T06:24:56+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"__FUNCTION__ In Closure Changed"}]}}</script>

When using the magic constant `__FUNCTION__` inside a closure, the content used to be the `{closure}` string only. Since PHP 8.4, it also includes the name of the original file, and the line number, so as to identify the origin source code.

## PHP code

```php
<?php

$foo = fn() => __FUNCTION__;

$closure = function() { return __FUNCTION__;};

echo $foo();

echo $closure();


?>
```

## Before

```text
{closure}{closure}
```

## After

```text
{closure:/codes/magicConstantInClosure.php:3}{closure:/codes/magicConstantInClosure.php:5}
```

## PHP version change

This behavior changed in 8.4.
