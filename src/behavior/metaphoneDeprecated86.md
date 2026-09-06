# metaphone() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/metaphoneDeprecated86.html","headline":"metaphone() Is Deprecated","name":"metaphone() Is Deprecated","description":"`metaphone()` computes a phonetic key for an ASCII string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/metaphoneDeprecated86.html","inLanguage":"en","dateModified":"2026-09-06T08:50:41+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"metaphone() Is Deprecated"}]}}</script>

`metaphone()` computes a phonetic key for an ASCII string. In PHP 8.6, calling it emits a deprecation notice recommending a userland phonetic matching library instead; the function still returns the same key as before.

## PHP code
```php
<?php

var_dump(metaphone("Thompson"));

?>
```
## Before
```text
string(5) "0MPSN" 
```
## After
```text
PHP Deprecated:  Function metaphone() is deprecated since 8.6, use a userland phonetic matching library instead in /codes/metaphoneDeprecated86.php on line 3

Deprecated: Function metaphone() is deprecated since 8.6, use a userland phonetic matching library instead in /codes/metaphoneDeprecated86.php on line 3
string(5) "0MPSN" 
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [metaphone()](https://www.php.net/metaphone)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Function metaphone() is deprecated since 8.6, use a userland phonetic matching library instead](https://php-errors.readthedocs.io/en/latest/messages/metaphone%28%29-is-deprecated.html)

## Extension