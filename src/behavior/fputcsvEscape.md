# fputcsv() Needs Escape Parameter

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/fputcsvEscape.html","headline":"fputcsv() Needs Escape Parameter","name":"fputcsv() Needs Escape Parameter","description":"fputcsv().","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/fputcsvEscape.html","inLanguage":"en","dateModified":"2026-03-02T16:20:48+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"fputcsv() Needs Escape Parameter"}]}}</script>

fputcsv() 

## PHP code

```php
<?php

$fp = fopen(':memory:', 'w');
var_dump(fputcsv($fp, [1,2,3]));

?>
```

## Before

```text
int(6)
```

## After

```text
PHP Deprecated:  fputcsv(): the $escape parameter must be provided as its default value will chang

Deprecated: fputcsv(): the $escape parameter must be provided as its default value will change
int(6)
```

## PHP version change

This behavior was deprecated in 8.4.

This behavior changed in 8.4.

## See Also

- [PHP RFC: Kill proprietary CSV escaping mechanism](https://wiki.php.net/rfc/kill-csv-escaping)
- [PHP 8.4: CSV: The $escape parameter must be provided](https://php.watch/versions/8.4/csv-functions-escape-parameter)

## Error Messages

- [the $escape parameter must be provided as its default value will change](https://php-errors.readthedocs.io/en/latest/messages/the-%24escape-parameter-must-be-provided-as-its-default-value-will-change.html)

## Analyzer

- [Php/FputcsvNeedsEscape](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/FputcsvNeedsEscape.html)
