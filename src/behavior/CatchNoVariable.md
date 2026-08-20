# Catch Without Variable

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/CatchNoVariable.html","headline":"Catch Without Variable","name":"Catch Without Variable","description":"A catch clause doesn't require a storing variable anymore.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/CatchNoVariable.html","inLanguage":"en","dateModified":"2025-08-30T20:58:33+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Catch Without Variable"}]}}</script>

A catch clause doesn't require a storing variable anymore. It may simply omit it. The exception is then caught, but not provided in the clause.

## PHP code

```php
<?php

try {
    throw new Exception('Error');
} catch (Exception) {
    print 'Exception caught';
}

?>
```

## Before

```text
Parse error: syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)
```

## After

```text
Exception caught
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%29%27%2C-expecting-%27%7C%27-or-variable-%28t_variable%29.html)

## Analyzer

- [Exceptions/AnonymousCatch](https://exakat.readthedocs.io/en/latest/Reference/Rules/Exceptions/AnonymousCatch.html)
