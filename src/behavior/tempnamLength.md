# Length Of tempnam() Has Been Raised

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/tempnamLength.html","headline":"Length Of tempnam() Has Been Raised","name":"Length Of tempnam() Has Been Raised","description":"The temporary name, provided by `tempname()` used to be 6 characters, added to the provided prefix.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/tempnamLength.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Length Of tempnam() Has Been Raised"}]}}</script>

The temporary name, provided by `tempname()` used to be 6 characters, added to the provided prefix. It is now 19 characters, so 13 more characters.



There might be impact on database, if this is stored.

## PHP code

```php
<?php

print strlen(tempnam(/tmp, FOO));
// PHP 8.4+ : /tmp/FOO3u8m0hgq3afe2eSwgTld
// PHP 8.3- : /tmp/FOO3u8m0h

?>
```

## Before

```text
22
```

## After

```text
35
```

## PHP version change

This behavior changed in 8.4.
