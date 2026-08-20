# substr() Returns Empty String On Out Of Bond Offset

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/substrReturnsEmptyStringOnOutOfBondOffset.html","headline":"substr() Returns Empty String On Out Of Bond Offset","name":"substr() Returns Empty String On Out Of Bond Offset","description":"substr() used to return false when the parameters used to extract the string were out of bound, or well out of the string sizes.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/substrReturnsEmptyStringOnOutOfBondOffset.html","inLanguage":"en","dateModified":"2026-02-06T21:29:07+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"substr() Returns Empty String On Out Of Bond Offset"}]}}</script>

substr() used to return false when the parameters used to extract the string were out of bound, or well out of the string sizes. With PHP 8.0, this is not reported as an error anymore, and fails silently.



One collateral impact is that code that checks on the returned value to be false is now dead code.

## PHP code

```php
<?php

var_dump(substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0
var_dump(mb_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
var_dump(iconv_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
var_dump(grapheme_substr('FooBar', 42, 3)); // "" in PHP >=8.0, false in PHP < 8.0);
?>
```

## Before

```text
bool(false)
string(0) "" 
bool(false)
bool(false)
```

## After

```text
string(0) "" 
string(0) "" 
string(0) "" 
string(0) "" 
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [substr()](https://www.php.net/substr)
