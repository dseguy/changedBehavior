# ${expression} is deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dollar_curly_expression.html","headline":"${expression} is deprecated","name":"${expression} is deprecated","description":"The `$\\{}` allowed the usage of an expression to be used as the name of a variable, inside de double quoted string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dollar_curly_expression.html","inLanguage":"en","dateModified":"2026-08-12T15:27:38+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"${expression} is deprecated"}]}}</script>

The `$\{}` allowed the usage of an expression to be used as the name of a variable, inside de double quoted string. This feature was largely unknown and unused, so it is removed.

## PHP code

```php
<?php

$foo = 'bar';
$bar = 'xyz';
var_dump("foo is ${$foo}");

?>
```

## Before

```text
string(10) "foo is xyz" 
```

## After

```text
PHP Deprecated:  Using  (variable variables) in strings is deprecated, use {} instead

Deprecated: Using  (variable variables) in strings is deprecated, use {} instead
string(10) "foo is xyz" b
```

## PHP version change

This behavior changed in 8.2.

## Error Messages

- [Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead](https://php-errors.readthedocs.io/en/latest/messages/using-%24%7Bexpr%7D-%28variable-variables%29-in-strings-is-deprecated%2C-use-%7B%24%7Bexpr%7D%7D-instead.html)
