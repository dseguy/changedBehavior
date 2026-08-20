# Clone A Constant

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/cloneConstant.html","headline":"Clone A Constant","name":"Clone A Constant","description":"Cloning a constant was useless until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/cloneConstant.html","inLanguage":"en","dateModified":"2025-09-06T08:50:42+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Clone A Constant"}]}}</script>

Cloning a constant was useless until PHP 8.1: this is the version where global constants could be initialized with an object. 



The syntax has always been valid, but, at execution time, it would emit an error, as the constant could not be cloned.

## PHP code

```php
<?php

class C {}

const A = new C;

var_dump(clone A);

?>
```

## Before

```text
PHP Fatal error:  Constant expression contains invalid operations

Fatal error: Constant expression contains invalid operations
```

## After

```text
object(C)#2 (0) {
}
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [Constant expression contains invalid operations](https://php-errors.readthedocs.io/en/latest/messages/constant-expression-contains-invalid-operations.html)
- [__clone method called on non-object](https://php-errors.readthedocs.io/en/latest/messages/__clone-method-called-on-non-object.html)

## Analyzer

- [Php/CloneConstant](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/CloneConstant.html)
