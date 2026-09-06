# spl_classes() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splClassesDeprecated86.html","headline":"spl_classes() Is Deprecated","name":"spl_classes() Is Deprecated","description":"`spl_classes()` returns an array naming the classes and interfaces provided by the SPL extension.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splClassesDeprecated86.html","inLanguage":"en","dateModified":"2026-09-06T08:48:08+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"spl_classes() Is Deprecated"}]}}</script>

`spl_classes()` returns an array naming the classes and interfaces provided by the SPL extension. In PHP 8.6, calling it emits a deprecation notice recommending `ReflectionExtension::getClassNames()` instead; the returned array is unchanged.

## PHP code
```php
<?php

$classes = spl_classes();
var_dump(count($classes));

?>
```
## Before
```text
int(55)
```
## After
```text
PHP Deprecated:  Function spl_classes() is deprecated since 8.6, use ReflectionExtension::getClassNames() instead in /codes/splClassesDeprecated86.php on line 3

Deprecated: Function spl_classes() is deprecated since 8.6, use ReflectionExtension::getClassNames() instead in /codes/splClassesDeprecated86.php on line 3
int(55)
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [spl_classes()](https://www.php.net/spl_classes)
- [ReflectionExtension::getClassNames()](https://www.php.net/reflectionextension.getclassnames)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Function spl_classes() is deprecated since 8.6, use ReflectionExtension::getClassNames() instead](https://php-errors.readthedocs.io/en/latest/messages/spl_classes%28%29-is-deprecated.html)

## Extension
- [spl](../extension.md#spl)