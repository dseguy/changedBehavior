# Array Has No Absolute Name

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/absoluteArrayName.html","headline":"Array Has No Absolute Name","name":"Array Has No Absolute Name","description":"Classes may be used as type, with an optional leading `\\`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/absoluteArrayName.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Array Has No Absolute Name"}]}}</script>

Classes may be used as type, with an optional leading `\`. This is not the case for scalar types, such as `int` or `string`, but it was the case for `array`. In PHP 8.5, it is now homogenized.

## PHP code

```php
<?php

function foo(\array $x = []) {}

?>
```

## Before

```text
PHP Fatal error:  Cannot use array as default value for parameter $x of type array

Fatal error: Cannot use array as default value for parameter $x of type array
```

## After

```text
PHP Fatal error:  Cannot use array as a type name as it is reserved

Fatal error: Cannot use array as a type name as it is reserved
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Cannot use "%s" as a type name as it is reserved](https://php-errors.readthedocs.io/en/latest/messages/cannot-use-%22%25s%22-as-a-type-name-as-it-is-reserved.html)
