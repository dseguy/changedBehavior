# eval() Without Try

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/EvalWithouTry.html","headline":"eval() Without Try","name":"eval() Without Try","description":"The `eval()` command throws an error in case of unparsable PHP code.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/EvalWithouTry.html","inLanguage":"en","dateModified":"2026-02-25T23:38:42+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"eval() Without Try"}]}}</script>

The `eval()` command throws an error in case of unparsable PHP code. This error can be caught, to handle gracefully the situation, with a try-catch structure.



It is recommended to always use try-catch when dealing with eval().



It is possible to differentiate a parse error in the host code from a parse error in the eval() string with the error message: when it is in the eval() string, the error message mention eval: `Parse error: syntax error, unexpected identifier "a" in file.ph : eval()'d code on line 1`.

## PHP code

```php
<?php

try {
    eval('A = 1');
} catch (Error $e) {
    echo $e->getMessage();
}

?>
```

## Before

```text
Parse error: syntax error, unexpected '='
```

## After

```text
syntax error, unexpected token "="
```

## PHP version change

This behavior changed in 7.0.

## Analyzer

- [Structures/EvalWithoutTry](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/EvalWithoutTry.html)
