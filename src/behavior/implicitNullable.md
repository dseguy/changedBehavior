# Implicit Nullable

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/implicitNullable.html","headline":"Implicit Nullable","name":"Implicit Nullable","description":"A typed argument with a default value of `null` was also implicitly nullable: it would accept null as a value.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/implicitNullable.html","inLanguage":"en","dateModified":"2025-09-27T07:24:16+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Implicit Nullable"}]}}</script>

A typed argument with a default value of `null` was also implicitly nullable: it would accept null as a value. This is deprecated in PHP 8.4, and will be removed in PHP 9.0. It is recommended to make the nullable type explicit in the code.



That issue applies to arguments in methods and functions, but not on properties or returned values. 



## PHP code

```php
<?php

function foo(int $a = null) {
	var_dump($a);
}

foo(1);
foo(null);

?>
```

## Before

```text
int(1)
NULL
```

## After

```text
PHP Deprecated:  foo(): Implicitly marking parameter $a as nullable is deprecated, the explicit nullable type must be used instead 

Deprecated: foo(): Implicitly marking parameter $a as nullable is deprecated, the explicit nullable type must be used instead 
int(1)
NULL
```

## PHP version change

This behavior was deprecated in 8.4.

This behavior changed in 9.0.

## Error Messages

- [Default value for property of type int may not be null. Use the nullable type ?int to allow null default value](https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-implicitly-marking-parameter-%24%25s-as-nullable-is-deprecated%2C-the-explicit-nullable-type-must-be-used-instead.html)

## Analyzer

- [Classes/HiddenNullable](https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/HiddenNullable.html)
