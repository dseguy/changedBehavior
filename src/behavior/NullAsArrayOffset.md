# Null As Array Offset

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullAsArrayOffset.html","headline":"Null As Array Offset","name":"Null As Array Offset","description":"Array indices may be integers or strings.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullAsArrayOffset.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Null As Array Offset"}]}}</script>

Array indices may be integers or strings. They may also be boolean or `null`, although both these types are converted in integers and string (respectively).



In PHP 8.5, a warning is emitted when a null value is used as an index.

## PHP code

```php
<?php

$array = ['a' => 2];
$array[null] = 3;

print $array['']; 
print $array[null]; 

?>
```

## Before

```text
33
```

## After

```text
PHP Deprecated:  Using null as an array offset is deprecated, use an empty string instead

Deprecated: Using null as an array offset is deprecated, use an empty string instead
3PHP Deprecated:  Using null as an array offset is deprecated, use an empty string instead

Deprecated: Using null as an array offset is deprecated, use an empty string instead
3
```

## PHP version change

This behavior changed in 8.5.

## Error Messages

- [Using null as an array offset is deprecated, use an empty string instead](https://php-errors.readthedocs.io/en/latest/messages/using-null-as-an-array-offset-is-deprecated%2C-use-an-empty-string-instead.html)
