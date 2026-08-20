# PHP Constants Are Not Case Insensitive

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/caseInsensitiveDefine.html","headline":"PHP Constants Are Not Case Insensitive","name":"PHP Constants Are Not Case Insensitive","description":"PHP allowed the creation of case-insensitive constants with the function `define`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/caseInsensitiveDefine.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"PHP Constants Are Not Case Insensitive"}]}}</script>

PHP allowed the creation of case-insensitive constants with the function `define`. That was the third parameter to be passed, with a default, and often ignored value of `false`.



Since PHP 8.0, case-insensitive constants are not possible anymore. Creating a constant with both `const` and `define` only leads to case-sensitive global constant.



As a reminder, accessing a non-existing constant is a Fatal error, so an error on the case in a global constant leads to it.

## PHP code

```php
<?php

define('A', 1, true);

echo a;
echo A;

?>
```

## Before

```text
11
```

## After

```text
PHP Warning:  define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported

Warning: define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
PHP Fatal error:  Uncaught Error: Undefined constant a

Fatal error: Uncaught Error: Undefined constant a
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported](https://php-errors.readthedocs.io/en/latest/messages/define%28%29%3A-argument-%233-%28%24case_insensitive%29-is-ignored-since-declaration-of-case-insensitive-constants-is-no-longer-supported.html)
- [define(): delaration of case insensitive constants is deprecated](https://php-errors.readthedocs.io/en/latest/messages/define%28%29%3A-declaration-of-case-insensitive-constants-is-deprecated.html)

## Analyzer

- [Constants/CaseInsensitiveConstants](https://exakat.readthedocs.io/en/latest/Reference/Rules/Constants/CaseInsensitiveConstants.html)
