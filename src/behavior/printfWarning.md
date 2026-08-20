# printf() Warns About Unknown Formats

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/printfWarning.html","headline":"printf() Warns About Unknown Formats","name":"printf() Warns About Unknown Formats","description":"printf(), and its related functions, reports unknown format specifiers.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/printfWarning.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"printf() Warns About Unknown Formats"}]}}</script>

printf(), and its related functions, reports unknown format specifiers. The format specifiers are letters that format the data, passed in later arguments. 



Until PHP 8.0, printf() would check if there were enough arguments for the format. Otherwise, unknown formats were ignored, and the related argument was omitted silently.

## PHP code

```php
<?php

print sprintf("%s %Z", 1, 3);
// after  PHP 8.0:  Unknown format specifier Z
// before PHP 8.0:  1

?>
```

## Before

```text
 
```

## After

```text
PHP Fatal error:  Uncaught ValueError: Unknown format specifier "Z"
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Unknown format specifier "Z"](https://php-errors.readthedocs.io/en/latest/messages/unknown-format-specifier-%22%25c.html)
