# Only First Byte

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/onlyFirstByte.html","headline":"Only First Byte","name":"Only First Byte","description":"When assigning a string to a position inside another string, PHP reports a warning: indeed, only the first byte is used.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/onlyFirstByte.html","inLanguage":"en","dateModified":"2025-09-17T08:30:30+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Only First Byte"}]}}</script>

When assigning a string to a position inside another string, PHP reports a warning: indeed, only the first byte is used.

## PHP code

```php
<?php

$str = 'xy';  

// first letter is now a
$str[0] = 'a';

// second letter is now b, c is ignored
$str[1] = 'bc';

echo $str;

?>
```

## Before

```text
ab
```

## After

```text
PHP Warning:  Only the first byte will be assigned to the string offset 

Warning: Only the first byte will be assigned to the string offset 
ab
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Only the first byte will be assigned to the string offset](https://php-errors.readthedocs.io/en/latest/messages/only-the-first-byte-will-be-assigned-to-the-string-offset.html)

## Analyzer

- [Structures/OnlyFirstByte](https://exakat.readthedocs.io/en/latest/Reference/Rules/Structures/OnlyFirstByte.html)
