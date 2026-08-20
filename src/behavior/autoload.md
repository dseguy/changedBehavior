# Using __autoload() is deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/autoload.html","headline":"Using __autoload() is deprecated","name":"Using __autoload() is deprecated","description":"Defining the `__autoload()` function used to be the way to create a autoloading mechanism for classes, traits, interfaces and enumerations.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/autoload.html","inLanguage":"en","dateModified":"2026-01-20T06:53:21+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Using __autoload() is deprecated"}]}}</script>

Defining the `__autoload()` function used to be the way to create a autoloading mechanism for classes, traits, interfaces and enumerations. This was later replaced by the spl_autoload_register() function, which allows adding and removing autoloading functions. Ever since, creating the __autoload() function is reported as deprecated, and the function is not used since PHP 8.0.

## PHP code

```php
<?php

function __autoload() {}

?>
```

## Before

```text
PHP Fatal error:  __autoload() is no longer supported, use spl_autoload_register() instead

Fatal error: __autoload() is no longer supported, use spl_autoload_register() instead
```

## After

```text
PHP Fatal error:  __autoload() is no longer supported, use spl_autoload_register() instead

Fatal error: __autoload() is no longer supported, use spl_autoload_register() instead
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [ __autoload() is no longer supported, use spl_autoload_register() instead](https://php-errors.readthedocs.io/en/latest/messages/__autoload%28%29-is-no-longer-supported%2C-use-spl_autoload_register%28%29-instead.html)
