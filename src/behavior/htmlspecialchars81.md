# Default Values With htmlspecialchars()

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/htmlspecialchars81.html","headline":"Default Values With htmlspecialchars()","name":"Default Values With htmlspecialchars()","description":"The default values of htmlspecialchars() were changed in PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/htmlspecialchars81.html","inLanguage":"en","dateModified":"2026-01-27T08:09:21+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Default Values With htmlspecialchars()"}]}}</script>

The default values of htmlspecialchars() were changed in PHP 8.1. It was ENT_COMPAT and it is now replaced with `ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401`.



In particular, it means that `'`, single quote, is now converted in HTML entities.



## PHP code

```php
<?php

echo htmlspecialchars("'");

?>
```

## Before

```text
'
```

## After

```text
&#039;
```

## PHP version change

This behavior changed in 8.1.

## See Also

- [htmlspecialchars](https://www.php.net/htmlspecialchars)
