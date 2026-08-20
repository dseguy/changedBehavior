# throw Is An Expression

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/throwIsAnExpression.html","headline":"throw Is An Expression","name":"throw Is An Expression","description":"`throw` was a standalone expression: it needed to be alone, between semicolons (or equivalents).","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/throwIsAnExpression.html","inLanguage":"en","dateModified":"2025-09-06T08:46:30+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"throw Is An Expression"}]}}</script>

`throw` was a standalone expression: it needed to be alone, between semicolons (or equivalents). 



Since PHP 8.0, throw may be included in another expression. This is useful with `or`, or the coalesce operator, to execute the expression when a value is missing or failing.

## PHP code

```php
<?php

foo() or throw new \Exception();

$x = $_GET['x'] ?? throw new \Exception('Missing value for x');

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected 'throw' (T_THROW)

Parse error: syntax error, unexpected 'throw' (T_THROW)
```

## After

```text

```

## PHP version change

This behavior changed in 8.0.

## See Also

- [Exceptions](https://www.php.net/manual/en/language.exceptions.php)

## Error Messages

- [syntax error, unexepected 'throw' (T_THROW)](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27throw%27-%28t_throw%29.html)

## Analyzer

- [Php/ThrowWasAnExpression](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ThrowWasAnExpression.html)
