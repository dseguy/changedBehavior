# http_build_query() supports enumerations

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/http_build_query_and_enum.html","headline":"http_build_query() supports enumerations","name":"http_build_query() supports enumerations","description":"`http_build_query()` accepted backed enumerations, and used to produce a query string with a `b` array, containing `value` and `name`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/http_build_query_and_enum.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"http_build_query() supports enumerations"}]}}</script>

`http_build_query()` accepted backed enumerations, and used to produce a query string with a `b` array, containing `value` and `name`. Since PHP 8.4, it is now using the string value of the case.

## PHP code

```php
<?php

enum E : string {
    case B = 'b';
}

print http_build_query(['a' => 'A', 'b' => e::B]);

?>
```

## Before

```text
a=A&b%5Bname%5D=B&b%5Bvalue%5D=b
```

## After

```text
a=A&b=b
```

## PHP version change

This behavior changed in 8.4.

## See Also

- [Dealing with a PHP BC break](https://nyamsprod.com/blog/dealing-with-a-php-bc-break/)
