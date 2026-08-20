# Heredoc Syntax In An Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/heredoc_in_array.html","headline":"Heredoc Syntax In An Array","name":"Heredoc Syntax In An Array","description":"Until PHP 7.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/heredoc_in_array.html","inLanguage":"en","dateModified":"2026-01-27T08:11:24+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Heredoc Syntax In An Array"}]}}</script>

Until PHP 7.2, it is only possible to use the HEREDOC (and NOWDOC) syntax with a final semicolon. This means it was impossible to use that syntax in an array, a list of arguments, or other context that do not finish the expression with a semicolon.

## PHP code

```php
<?php

$a = array(<<<HEREDOC
A
HEREDOC,
);

print_r($a);

?>
```

## Before

```text
PHP Parse error:  syntax error

Parse error: syntax error
```

## After

```text
Array
(
    [0] => A
)
```

## PHP version change

This behavior changed in 7.3.

## Error Messages

- [syntax error, unexpected end of file](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-end-of-file.html)
