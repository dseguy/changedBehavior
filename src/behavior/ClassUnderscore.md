# Underscore Named Class

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ClassUnderscore.html","headline":"Underscore Named Class","name":"Underscore Named Class","description":"It is not possible to name a class `_` underscore anymore.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ClassUnderscore.html","inLanguage":"en","dateModified":"2026-01-27T08:22:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Underscore Named Class"}]}}</script>

It is not possible to name a class `_` underscore anymore. 



This applies to classes, interfaces, traits and enumerations. It applies in every namespace.



It does not applies to functions, although that name is usually a native PHP function from the `gettext` extension. It also does not apply to constants, methods, class constants and variables. 



It is still possible to name a class with a longer name, starting with an underscore.



The `_` is being reserved for the future pattern matching feature of PHP.

## PHP code

```php
<?php

class _ {}

print get_class(new _);

?>
```

## Before

```text
_
```

## After

```text
PHP Deprecated:  Using "_" as a class name is deprecated since 8.4

Deprecated: Using "_" as a class name is deprecated since 8.4
_
```

## PHP version change

This behavior changed in 8.4.

## Error Messages

- [Using "_" as %s is deprecated since 8.4](https://php-errors.readthedocs.io/en/latest/messages/using-%22_%22-as-%25s-is-deprecated-since-8.4.html)

## Analyzer

- [Php/NoClassUnderscore](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NoClassUnderscore.html)
