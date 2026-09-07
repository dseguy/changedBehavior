# Calling A Function Named readonly() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/readonlyFunctionCallDeprecated.html","headline":"Calling A Function Named readonly() Is Deprecated","name":"Calling A Function Named readonly() Is Deprecated","description":"`readonly` has been a semi-reserved word since PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/readonlyFunctionCallDeprecated.html","inLanguage":"en","dateModified":"2026-09-06T19:36:49+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Calling A Function Named readonly() Is Deprecated"}]}}</script>

`readonly` has been a semi-reserved word since PHP 8.1, when it became the modifier for readonly properties and classes. It could still be used as the name of a function, class, or constant, and PHP even special-cased a global function literally called `readonly()` so that WordPress, which ships one, kept working. Until PHP 8.6, declaring and calling such a function produced no warning at all. In PHP 8.6, calling a function named `readonly()` emits a deprecation notice on every call, in preparation for the word becoming fully reserved.

## PHP code
```php
<?php

function readonly() {
    return 'not a property modifier';
}

echo readonly(), "\n";

?>
```
## Before
```text
not a property modifier
```
## After
```text
PHP Deprecated:  Calling a function “readonly” is deprecated in /codes/readonlyFunctionCallDeprecated.php on line 3

Deprecated: Calling a function “readonly” is deprecated in /codes/readonlyFunctionCallDeprecated.php on line 3
not a property modifier
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [PHP 8.6 Deprecations RFC](https://wiki.php.net/rfc/deprecations_php_8_6)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Calling a function “readonly” is deprecated](https://php-errors.readthedocs.io/en/latest/messages/calling-a-function-readonly%28%29-is-deprecated.html)

## Extension
- [Core](../extension.md#Core)