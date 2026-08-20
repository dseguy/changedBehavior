# Reflection Doesn't Return Static

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/reflection_static.html","headline":"Reflection Doesn't Return Static","name":"Reflection Doesn't Return Static","description":"Reflection used to return the original `static` type, including its case.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/reflection_static.html","inLanguage":"en","dateModified":"2026-02-25T23:47:48+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Reflection Doesn't Return Static"}]}}</script>

Reflection used to return the original `static` type, including its case. Since PHP 8.5, it is now returning the actual name of the class, instead of the relative type.

## PHP code

```php
<?php

// code from https://www.reddit.com/r/PHP/comments/1rd3j74/php_85_reflectionnamedtypegetname_change/
class Foo
{
    function poop (static $a): static
    {
    }
}

$refMethod = new ReflectionMethod('Foo', 'poop');
$refParam = $refMethod->getParameters()[0];

print_r(array(
    'paramType' => $refParam->getType()->getName(),
    'returnType' => $refMethod->getReturnType()->getName(),
));

?>
```

## Before

```text
Array
(
    [paramType] => static
    [returnType] => static
)
```

## After

```text
Array
(
    [paramType] => Foo
    [returnType] => Foo
)
```

## PHP version change

This behavior changed in 8.5.

## See Also

- [PHP 8.5 ReflectionNamedType->getName() change?](https://www.reddit.com/r/PHP/comments/1rd3j74/php_85_reflectionnamedtypegetname_change/)
