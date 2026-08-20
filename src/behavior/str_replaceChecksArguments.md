# str_replace() Checks For Arguments

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/str_replaceChecksArguments.html","headline":"str_replace() Checks For Arguments","name":"str_replace() Checks For Arguments","description":"str_replace() can replace a string with another string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/str_replaceChecksArguments.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"str_replace() Checks For Arguments"}]}}</script>

str_replace() can replace a string with another string; an array of strings with another array of strings, with a one to one relationship; or an array of strings with a single string, where all of the searched strings are replaced with the same target string. Yet, it is not possible to replace one string by an array of strings, as they are not of the same type, and PHP would need to choose one of the target strings.

This is an example of conditional typing : the type of one of the arguments depends on the type of the other argument.

## PHP code

```php
<?php

print str_replace( array('b', 'c'), 'a', 'abc');
?>
```

## Before

```text
Notice: Array to string conversion in /in/GhW96 on line 3
Arraybc
```

## After

```text
Uncaught TypeError: str_replace(): Argument #2 ($replace) must be of type string when argument #1
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [str_replace(): Argument #2 ($replace) must be of type string when argument #1](https://php-errors.readthedocs.io/en/latest/messages/argument-%23%25d-%28%24%25s%29-must-be-of-type-%25s%2C-%25s-given.html)
