# in_array() String Int Comparisons

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/inArrayStringIng.html","headline":"in_array() String Int Comparisons","name":"in_array() String Int Comparisons","description":"The default comparison style of in_array() is the relaxed one.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/inArrayStringIng.html","inLanguage":"en","dateModified":"2025-10-25T08:52:21+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"in_array() String Int Comparisons"}]}}</script>

The default comparison style of in_array() is the relaxed one. Hence, the behavior of that comparison changed in PHP 8.0, so does in_array().



By default, comparing strings and integers may not work as before. This is the case when the string doesn't convert obviously to an integer. 



## PHP code

```php
<?php

var_dump(in_array(' 1a', [ 1]));

?>
```

## Before

```text
bool(true)
```

## After

```text
bool(false)
```

## PHP version change

This behavior changed in 8.0.
