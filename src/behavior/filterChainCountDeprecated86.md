# Long php://filter Chains Are Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/filterChainCountDeprecated86.html","headline":"Long php://filter Chains Are Deprecated","name":"Long php://filter Chains Are Deprecated","description":"A `php://filter` URL can chain several filters with `|`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/filterChainCountDeprecated86.html","inLanguage":"en","dateModified":"2026-09-06T08:48:00+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Long php://filter Chains Are Deprecated"}]}}</script>

A `php://filter` URL can chain several filters with `|`. Until PHP 8.6, any number of filters could be chained silently. In PHP 8.6, opening a `php://filter` URL with more than 16 chained filters emits a deprecation notice suggesting the `max_filter_count` stream context option or `stream_filter_append()` instead.

## PHP code
```php
<?php

$filters = str_repeat('string.toupper|', 20);
$handle = fopen('php://filter/read='.$filters.'/resource=php://memory', 'r');
var_dump($handle !== false);

?>
```
## Before
```text
bool(true)
```
## After
```text
PHP Deprecated:  Using more than 16 filters in a php://filter URL is deprecated, set this limit using the stream context option max_filter_count, or use stream_filter_append in /codes/filterChainCountDeprecated86.php on line 4

Deprecated: Using more than 16 filters in a php://filter URL is deprecated, set this limit using the stream context option max_filter_count, or use stream_filter_append in /codes/filterChainCountDeprecated86.php on line 4
bool(true)
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [Filters](https://www.php.net/manual/en/filters.php)
- [stream_filter_append](https://www.php.net/stream_filter_append)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Using more than 16 filters in a php://filter URL is deprecated, set this limit using the stream context option max_filter_count, or use stream_filter_append](https://php-errors.readthedocs.io/en/latest/messages/long-php%3A%2F%2Ffilter-chains-are-deprecated.html)

## Extension