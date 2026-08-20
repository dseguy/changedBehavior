# $this Must Be The Local Object

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/thisMustBeInObject.html","headline":"$this Must Be The Local Object","name":"$this Must Be The Local Object","description":"`$this` used to be a variable like any other, except for being filled with the local object in a method.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/thisMustBeInObject.html","inLanguage":"en","dateModified":"2025-09-06T08:45:44+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"$this Must Be The Local Object"}]}}</script>

`$this` used to be a variable like any other, except for being filled with the local object in a method. 



Since PHP 7.1, it is now only used for this purpose. This means that `$this` cannot be used outside a class, an enumeration or a trait, and for any other purpose.

## PHP code

```php
<?php

var_dump($this);

?>
```

## Before

```text
PHP Notice:  Undefined variable: this

Notice: Undefined variable: this
NULL
```

## After

```text
PHP Fatal error:  Uncaught Error: Using $this when not in object context

Fatal error: Uncaught Error: Using $this when not in object context
```

## PHP version change

This behavior changed in 7.1.

## Error Messages

- [Using $this when not in object context](https://php-errors.readthedocs.io/en/latest/messages/using-%24this-when-not-in-object-context.html)

## Analyzer

- [Classes/StaticContainsThis](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/StaticContainsThis.html)
- [Classes/ThisIsNotForStatic](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/ThisIsNotForStatic.html)
- [Classes/UsingThisOutsideAClass](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/UsingThisOutsideAClass.html)
- [Classes/ThisIsForClasses](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/ThisIsForClasses.html)
