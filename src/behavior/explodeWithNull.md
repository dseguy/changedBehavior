# Cannot Explode() Null

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/explodeWithNull.html","headline":"Cannot Explode() Null","name":"Cannot Explode() Null","description":"Null used to be a valid argument for explode(), used as an empty string.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/explodeWithNull.html","inLanguage":"en","dateModified":"2026-08-12T15:28:13+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Cannot Explode() Null"}]}}</script>

Null used to be a valid argument for explode(), used as an empty string. Nowadays, PHP requires an actual string to explode.

## PHP code

```php
<?php

var_dump(explode(';', null));

?>
```

## Before

```text
array(1) {
  [0]=>
  string(0) "" 
}
```

## After

```text
PHP Deprecated:  explode(): Passing null to parameter #2 ($string) of type string is deprecated 

Deprecated: explode(): Passing null to parameter #2 ($string) of type string is deprecated 
array(1) {
  [0]=>
  string(0) "" 
}
```

## PHP version change

This behavior changed in 8.1.

## Error Messages

- [%s(): Passing null to parameter #%](https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29%3A-passing-null-to-parameter-%23%25.html)
