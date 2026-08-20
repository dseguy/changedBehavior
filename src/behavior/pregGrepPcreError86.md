# preg_grep() Returns false On A PCRE Execution Error

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/pregGrepPcreError86.html","headline":"preg_grep() Returns false On A PCRE Execution Error","name":"preg_grep() Returns false On A PCRE Execution Error","description":"`preg_grep()` filters an array using a regular expression.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/pregGrepPcreError86.html","inLanguage":"en","dateModified":"2026-08-12T07:24:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"preg_grep() Returns false On A PCRE Execution Error"}]}}</script>

`preg_grep()` filters an array using a regular expression. Until PHP 8.6, when the underlying PCRE engine failed on one of the array's entries (for example malformed UTF-8 input combined with the `/u` modifier), that entry was silently skipped and a partial array was returned for the rest. In PHP 8.6, `preg_grep()` returns `false` as soon as a PCRE execution error occurs, matching the behavior of the other `preg_*` functions.

## PHP code

```php
<?php

$arr = ["\xC3\x28", 'valid'];
var_dump(preg_grep('/./u', $arr));

?>
```

## Before

```text
array(0) {
}
```

## After

```text
bool(false)
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [preg_grep()](https://www.php.net/preg_grep)
