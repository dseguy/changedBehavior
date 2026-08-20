# file_get_contents() Needs A Real Path

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/file_get_contents.html","headline":"file_get_contents() Needs A Real Path","name":"file_get_contents() Needs A Real Path","description":"file_get_contents() cannot work on an empty string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/file_get_contents.html","inLanguage":"en","dateModified":"2025-11-02T20:24:17+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"file_get_contents() Needs A Real Path"}]}}</script>

file_get_contents() cannot work on an empty string. Until PHP 8.0, it would report it as a warning, and return false, keeping the execution. In PHP 8.0, it is now a Fatal error.

## PHP code

```php
<?php

var_dump(file_get_contents(""));

?>
```

## Before

```text
PHP Warning:  file_get_contents(): Filename cannot be empty 

Warning: file_get_contents(): Filename cannot be empty 
bool(false)
```

## After

```text
PHP Fatal error:  Uncaught ValueError: Path cannot be empty 

Fatal error: Uncaught ValueError: Path cannot be empty 
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [file_get_contents(): Filename cannot be empty](https://php-errors.readthedocs.io/en/latest/messages/filename-cannot-be-empty.html)
