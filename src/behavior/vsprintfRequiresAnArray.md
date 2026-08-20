# vsprint() Requires An Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/vsprintfRequiresAnArray.html","headline":"vsprint() Requires An Array","name":"vsprint() Requires An Array","description":"vsprint() used to skip argument type validation, and wrongly report missing arguments, when the last argument was not a array.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/vsprintfRequiresAnArray.html","inLanguage":"en","dateModified":"2026-02-06T21:26:41+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"vsprint() Requires An Array"}]}}</script>

vsprint() used to skip argument type validation, and wrongly report missing arguments, when the last argument was not a array. Since PHP 8.0, the error message is clear.

## PHP code

```php
<?php

print vsprintf('%04d-%02d-%02d', 1);
vprintf('%04d-%02d-%02d', 1);

?>
```

## Before

```text
vsprintf(): Too few arguments
```

## After

```text
vsprintf(): Argument #2 ($values) must be of type array, int given
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [Too few arguments](https://php-errors.readthedocs.io/en/latest/messages/too-few-arguments.html)
- [Argument #%d ($%s) must be of type %s, %s given](https://php-errors.readthedocs.io/en/latest/messages/argument-%23%25d-%28%24%25s%29-must-be-of-type-%25s%2C-%25s-given.html)
