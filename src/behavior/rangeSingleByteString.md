# range() Uses Single Byte Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/rangeSingleByteString.html","headline":"range() Uses Single Byte Strings","name":"range() Uses Single Byte Strings","description":"When the first argument of range() is a single byte string, then the second argument must also be a single byte string, to keep the range consistent.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/rangeSingleByteString.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"range() Uses Single Byte Strings"}]}}</script>

When the first argument of range() is a single byte string, then the second argument must also be a single byte string, to keep the range consistent. Until PHP 8.3, the first string was converted to a integer too, most often 0, and then, the range was created.

## PHP code

```php
<?php

print_r(range('c', 3));

?>
```

## Before

```text
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
)
```

## After

```text
PHP Warning:  range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0

Warning: range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
)
```

## PHP version change

This behavior changed in 8.3.

## See Also

- [range](https://www.php.net/manual/en/function.range.php)

## Error Messages

- [range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0](https://php-errors.readthedocs.io/en/latest/messages/argument-%232-%28%24end%29-must-be-a-single-byte-string-if.html)
