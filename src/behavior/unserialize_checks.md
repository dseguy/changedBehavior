# unserialize() Checks The End Of The String

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_checks.html","headline":"unserialize() Checks The End Of The String","name":"unserialize() Checks The End Of The String","description":"The format used by unserialize() is a closed format: it might be smaller than the string that contains it.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/unserialize_checks.html","inLanguage":"en","dateModified":"2025-09-19T17:03:15+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"unserialize() Checks The End Of The String"}]}}</script>

The format used by unserialize() is a closed format: it might be smaller than the string that contains it. Until PHP 8.3, unserialize() stops as soon as it is satisfied, leaving the possible remainder of the string hanging. In PHP 8.3, a warning is raised.

## PHP code

```php
<?php

print_r(unserialize('O:1:"a":1:{s:8:"property";s:3:"yes";}  '));

?>
```

## Before

```text
__PHP_Incomplete_Class Object
(
    [__PHP_Incomplete_Class_Name] => a
    [property] => yes
)
```

## After

```text
PHP Warning:  unserialize(): Extra data starting at offset 37 of 39 bytes

Warning: unserialize(): Extra data starting at offset 37 of 39 bytes
__PHP_Incomplete_Class Object
(
    [__PHP_Incomplete_Class_Name] => a
    [property] => yes
)
```

## PHP version change

This behavior changed in 8.3.

## See Also

- [PHP RFC: Make unserialize() emit a warning for trailing bytes](https://wiki.php.net/rfc/unserialize_warn_on_trailing_data)

## Error Messages

- [unserialize(): Extra data starting at offset 37 of 39 bytes](https://php-errors.readthedocs.io/en/latest/messages/extra-data-starting-at-offset-%25d-of-%25zd-bytes.html)
