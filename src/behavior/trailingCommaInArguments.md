# Trailing Comma In Arguments

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/trailingCommaInArguments.html","headline":"Trailing Comma In Arguments","name":"Trailing Comma In Arguments","description":"Trailing comma in arguments is the last argument left empty.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/trailingCommaInArguments.html","inLanguage":"en","dateModified":"2025-09-02T20:53:37+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Trailing Comma In Arguments"}]}}</script>

Trailing comma in arguments is the last argument left empty. This last argument is not transmitted, so the last comma has no effect. This feature is useful when arguments are kept on a different line : the last argument has now also a comma, and adding one extra argument will yield a one line diff, compared to the previous version. Without it, the diff would be two lines, and include the preceding line. 

## PHP code

```php
<?php

function foo($a,
             $b,
             $c,
              ) { echo __METHOD__; }

echo foo(1);

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected ')', expecting variable (T_VARIABLE)
```

## After

```text
foo
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [syntax error, unexpected ')', expecting variable (T_VARIABLE)](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%29%27%2C-expecting-variable-%28t_variable%29.html)

## Analyzer

- [Php/TrailingComma](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/TrailingComma.html)
