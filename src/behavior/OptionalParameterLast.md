# Optional Parameter Are After Compulsory Parameters

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/OptionalParameterLast.html","headline":"Optional Parameter Are After Compulsory Parameters","name":"Optional Parameter Are After Compulsory Parameters","description":"Optional parameters have a default value.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/OptionalParameterLast.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Optional Parameter Are After Compulsory Parameters"}]}}</script>

Optional parameters have a default value. When running the functioncall, PHP assigns the parameters by position. This way, the first parameter would get the value, even though it has the default value, and then, there will be a missing argument for the second one.



Since PHP 8.0, PHP reports that situation. It might be turned into an error in PHP 9.0

## PHP code

```php
<?php

function foo($a = 1, $b) {
    print $a $b\n;
}

foo(1, 2);

?>
```

## Before

```text
PHP Deprecated:  Required parameter $b follows optional parameter $a

Deprecated: Required parameter $b follows optional parameter $a
1 2
```

## After

```text
PHP Deprecated:  foo(): Optional parameter $a declared before required parameter $b is implicitly treated as a required parameter

Deprecated: foo(): Optional parameter $a declared before required parameter $b is implicitly treated as a required parameter
1 2
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Required parameter $%s follows optional parameter $%s](https://php-errors.readthedocs.io/en/latest/messages/required-parameter-%24%25s-follows-optional-parameter-%24%25s.html)

## Analyzer

- [Functions/WrongOptionalParameter](https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/WrongOptionalParameter.html)
