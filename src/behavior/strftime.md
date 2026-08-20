# strftime() And gmstrftime() Are Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strftime.html","headline":"strftime() And gmstrftime() Are Deprecated","name":"strftime() And gmstrftime() Are Deprecated","description":"`strftime()` and `gmstrftime()` format time and date according to locale settings.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/strftime.html","inLanguage":"en","dateModified":"2026-08-12T15:29:03+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"strftime() And gmstrftime() Are Deprecated"}]}}</script>

`strftime()` and `gmstrftime()` format time and date according to locale settings. These functions are deprecated in PHP 8.1, and should be replaced with `date()` and `gmdate()`, respectively, or with `gmdate()` or with `IntlDateFormatter::format()`: both of them, with the right format.

## PHP code

```php
<?php

echo strftime(1);
echo gmstrftime(2);

?>
```

## Before

```text
12
```

## After

```text
PHP Deprecated:  Function strftime() is deprecated since 8.1, use IntlDateFormatter::format() instead

Deprecated: Function strftime() is deprecated since 8.1, use IntlDateFormatter::format() instead
1PHP Deprecated:  Function gmstrftime() is deprecated since 8.1, use IntlDateFormatter::format() instead

Deprecated: Function gmstrftime() is deprecated since 8.1, use IntlDateFormatter::format() instead
2
```

## PHP version change

This behavior changed in 8.4.

## See Also

- [PHP: Fixing Deprecated strftime() calls](https://whateverthing.com/blog/2022/12/05/php-fixing-deprecated-strftime-calls/)

## Error Messages

- [Function %s() is deprecated%S](https://php-errors.readthedocs.io/en/latest/messages/function-%25s%28%29-is-deprecated%25s.html)
