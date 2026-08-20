# convert_uuencode() Works On Empty Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/convert_uuencode.html","headline":"convert_uuencode() Works On Empty Strings","name":"convert_uuencode() Works On Empty Strings","description":"Until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/convert_uuencode.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"convert_uuencode() Works On Empty Strings"}]}}</script>

Until PHP 8.0, convert_uuencode() returned false, aka error, when provided with an empty string. Since then, it returns a valid encoded string, which may be decoded later.

## PHP code

```php
<?php

var_dump( convert_uuencode(''));

?>
```

## Before

```text
bool(false)
```

## After

```text
string(2) "\`
" 
```

## PHP version change

This behavior changed in 8.0.
