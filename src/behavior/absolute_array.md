# array And callable Cannot Be Absolute

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/absolute_array.html","headline":"array And callable Cannot Be Absolute","name":"array And callable Cannot Be Absolute","description":"`array` and `callable` cannot be an absolute type, with the leading backslash.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/absolute_array.html","inLanguage":"en","dateModified":"2026-08-12T15:25:55+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"array And callable Cannot Be Absolute"}]}}</script>

`array` and `callable` cannot be an absolute type, with the leading backslash. This was not the case until PHP 8.5, and is now in harmony with other types like `int`.

## PHP code

```php
<?php

function foo() : \array {
    return [];
}

print_r(foo());

?>
```

## Before

```text
PHP Fatal error:  Uncaught TypeError: foo(): Return value must be of type array, array returned

Fatal error: Uncaught TypeError: foo(): Return value must be of type array, array returned
```

## After

```text
PHP Fatal error:  Cannot use array as a type name as it is reserved

Fatal error: Cannot use array as a type name as it is reserved
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Cannot use "array" as a type name as it is reserved](https://php-errors.readthedocs.io/en/latest/messages/cannot-use--%22%25s-%22-as-%25s-as-it-is-reserved.html)
