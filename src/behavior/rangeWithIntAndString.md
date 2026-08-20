# range() With Int And String

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/rangeWithIntAndString.html","headline":"range() With Int And String","name":"range() With Int And String","description":"range() now emits a warning when one of the arguments is a string, and the other is an integer.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/rangeWithIntAndString.html","inLanguage":"en","dateModified":"2025-09-21T07:44:39+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"range() With Int And String"}]}}</script>

range() now emits a warning when one of the arguments is a string, and the other is an integer. It still behaves like before, and cast the string to an integer.

## PHP code

```php
<?php

print_r(range(1, 'z')); 

?>
```

## Before

```text
Array
(
    [0] => 1
    [1] => 0
)
```

## After

```text
PHP Warning:  range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 

Warning: range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 
Array
(
    [0] => 1
    [1] => 0
)
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0 ](https://php-errors.readthedocs.io/en/latest/messages/argument-%232-%28%24end%29-must-be-a-single-byte-string-if.html)
