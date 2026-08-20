# Increment On Boolean Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/incrementOnBoolean.html","headline":"Increment On Boolean Is Deprecated","name":"Increment On Boolean Is Deprecated","description":"Incrementing or decrementing a boolean value had no effect.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/incrementOnBoolean.html","inLanguage":"en","dateModified":"2025-10-31T17:00:24+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Increment On Boolean Is Deprecated"}]}}</script>

Incrementing or decrementing a boolean value had no effect. In PHP 8.3, it is now a deprecation warning, and a message.

## PHP code

```php
<?php

$a = true;
$a++;

$b = false;
--$b;
echo $a, $b;

?>
```

## Before

```text
1
```

## After

```text
PHP Warning:  Increment on type bool has no effect, this will change in the next major version of PHP 

Warning: Increment on type bool has no effect, this will change in the next major version of PHP 
PHP Warning:  Decrement on type bool has no effect, this will change in the next major version of PHP 

Warning: Decrement on type bool has no effect, this will change in the next major version of PHP 
1
```

## PHP version change

This behavior was deprecated in 8.3.

This behavior changed in 9.0.

## Error Messages

- [Increment on type bool has no effect, this will change in the next major version of PHP](https://php-errors.readthedocs.io/en/latest/messages/increment-on-type-bool-has-no-effect%2C-this-will-change-in-the-next-major-version-of-php.html)
