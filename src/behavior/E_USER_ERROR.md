# E_USER_ERROR Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/E_USER_ERROR.html","headline":"E_USER_ERROR Is Deprecated","name":"E_USER_ERROR Is Deprecated","description":"The PHP native constant E_USER_ERROR is deprecated.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/E_USER_ERROR.html","inLanguage":"en","dateModified":"2025-09-16T20:33:13+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"E_USER_ERROR Is Deprecated"}]}}</script>

The PHP native constant E_USER_ERROR is deprecated. It should not be used anymore with the `trigger()` function, nor anywhere else in the code. It shall be removed entirely in PHP 9.

## PHP code

```php
<?php

trigger_error('user error', E_USER_ERROR);

?>
```

## Before

```text
PHP Deprecated:  Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead

Deprecated: Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead
PHP Fatal error:  user error

Fatal error: user error
```

## After

```text
PHP Fatal error:  user error

Fatal error: user error
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead](https://php-errors.readthedocs.io/en/latest/messages/passing-e_user_error-to-trigger_error%28%29-is-deprecated-since-8.4%2C-throw-an-exception-or-call-exit-with-a-string-message-instead.html)

## Analyzer

- [Php/TriggerErrorUsage](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/TriggerErrorUsage.html)
