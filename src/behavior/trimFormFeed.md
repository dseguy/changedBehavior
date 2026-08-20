# trim() Strips Form Feed By Default

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/trimFormFeed.html","headline":"trim() Strips Form Feed By Default","name":"trim() Strips Form Feed By Default","description":"`trim()`, `ltrim()` and `rtrim()` remove a fixed set of characters by default when no second argument is provided.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/trimFormFeed.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"trim() Strips Form Feed By Default"}]}}</script>

`trim()`, `ltrim()` and `rtrim()` remove a fixed set of characters by default when no second argument is provided. Until PHP 8.6, that set was space, tab, newline, carriage return, NUL byte and vertical tab. In PHP 8.6, the form feed character (`\f`, `\x0C`) was added to that default set.

## PHP code

```php
<?php

var_dump(trim("\fHello\f"));

?>
```

## Before

```text
string(7) Hello
```

## After

```text
string(5) Hello
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)
