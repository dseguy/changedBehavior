# Heredoc Syntax In An Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/heredoc_in_array.html","headline":"Heredoc Syntax In An Array","name":"Heredoc Syntax In An Array","description":"It was only possible to use the HEREDOC, and NOWDOC, syntax with a final semicolon.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/heredoc_in_array.html","inLanguage":"en","dateModified":"2026-08-20T16:05:59+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Heredoc Syntax In An Array"}]}}</script>

It was only possible to use the HEREDOC, and NOWDOC, syntax with a final semicolon. This meant it was impossible to use that syntax in an array, a list of arguments, or other context that do not finish the expression with a semicolon.



Since PHP 7.3, it is possible to use these syntaxes in more varied situations, such as method call, for example.



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
