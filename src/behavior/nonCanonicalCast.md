# Non-canonical Cast

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nonCanonicalCast.html","headline":"Non-canonical Cast","name":"Non-canonical Cast","description":"Non canonical cast operators `(integer)`, `(binary)`, `(double)`, `(boolean)` are deprecated, since PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nonCanonicalCast.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Non-canonical Cast"}]}}</script>

Non canonical cast operators `(integer)`, `(binary)`, `(double)`, `(boolean)` are deprecated, since PHP 8.5.

## PHP code

```php
<?php

print (integer) 2;
print (double) 2;
print (boolean) 2;
print (binary) 2;

?>
```

## Before

```text
2212
```

## After

```text
PHP Deprecated:  Non-canonical cast (integer) is deprecated, use the (int) cast instead

Deprecated: Non-canonical cast (integer) is deprecated, use the (int) cast instead
PHP Deprecated:  Non-canonical cast (double) is deprecated, use the (float) cast instead

Deprecated: Non-canonical cast (double) is deprecated, use the (float) cast instead
PHP Deprecated:  Non-canonical cast (boolean) is deprecated, use the (bool) cast instead

Deprecated: Non-canonical cast (boolean) is deprecated, use the (bool) cast instead
PHP Deprecated:  Non-canonical cast (binary) is deprecated, use the (string) cast instead

Deprecated: Non-canonical cast (binary) is deprecated, use the (string) cast instead
2212
```

## PHP version change

This behavior was deprecated in 8.5.

This behavior changed in 8.5.

## Error Messages

- [Non-canonical cast (binary) is deprecated, use the (string) cast instead](https://php-errors.readthedocs.io/en/latest/messages/non-canonical-cast-%28binary%29-is-deprecated%2C-use-the-%28string%29-cast-instead.html)
- [Non-canonical cast (binary) is deprecated, use the (bool) cast instead](https://php-errors.readthedocs.io/en/latest/messages/non-canonical-cast-%28boolean%29-is-deprecated%2C-use-the-%28bool%29-cast-instead.html)
- [Non-canonical cast (double) is deprecated, use the (float) cast instead](https://php-errors.readthedocs.io/en/latest/messages/non-canonical-cast-%28double%29-is-deprecated%2C-use-the-%28float%29-cast-instead.html)
- [Non-canonical cast (integer) is deprecated, use the (int) cast instead](https://php-errors.readthedocs.io/en/latest/messages/non-canonical-cast-%28integer%29-is-deprecated%2C-use-the-%28int%29-cast-instead.html)
