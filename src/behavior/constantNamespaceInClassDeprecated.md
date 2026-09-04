# Declaring A Class Constant Named namespace Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constantNamespaceInClassDeprecated.html","headline":"Declaring A Class Constant Named namespace Is Deprecated","name":"Declaring A Class Constant Named namespace Is Deprecated","description":"`namespace` is a reserved word in PHP, but a historical lexer exception allowed it to be used as the name of a class, interface, trait or enum constant, as well as a static property.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/constantNamespaceInClassDeprecated.html","inLanguage":"en","dateModified":"2026-09-04T15:19:15+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Declaring A Class Constant Named namespace Is Deprecated"}]}}</script>

`namespace` is a reserved word in PHP, but a historical lexer exception allowed it to be used as the name of a class, interface, trait or enum constant, as well as a static property. Until PHP 8.6, declaring such a constant produced no warning. In PHP 8.6, declaring a constant called `namespace` emits a deprecation notice, reserving the word for a possible future `::namespace` pseudo-constant, analogous to the existing `::class`.

## PHP code
```php
<?php

class Foo {
    const NAMESPACE = 'bar';
}

echo Foo::NAMESPACE, "\n";

?>
```
## Before
```text
bar
```
## After
```text
PHP Deprecated:  Declaring class constant "namespace" is deprecated in /codes/constantNamespaceInClassDeprecated.php on line 4

Deprecated: Declaring class constant "namespace" is deprecated in /codes/constantNamespaceInClassDeprecated.php on line 4
bar
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [PHP 8.6 Deprecations RFC](https://wiki.php.net/rfc/deprecations_php_8_6)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Declaring class constant "namespace" is deprecated](https://php-errors.readthedocs.io/en/latest/messages/declaring-%25s-constant-called-namespace-is-deprecated.html)

## Extension
- [Core](../extension.md#Core)