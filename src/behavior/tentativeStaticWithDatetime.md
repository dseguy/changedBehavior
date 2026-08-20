# Tentative Static Returntype With Datetime

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/tentativeStaticWithDatetime.html","headline":"Tentative Static Returntype With Datetime","name":"Tentative Static Returntype With Datetime","description":"The `createFromImmutable()` method from `DateTime` and `DateTimeImmutable` always return an object of the same class.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/tentativeStaticWithDatetime.html","inLanguage":"en","dateModified":"2026-02-06T21:32:57+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Tentative Static Returntype With Datetime"}]}}</script>

The `createFromImmutable()` method from `DateTime` and `DateTimeImmutable` always return an object of the same class. In PHP 8.2 and later, the return type is now `static`, it will tentatively return a children class, when the method is called from that child class.

## PHP code

```php
<?php

class A extends DateTime{}

$date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");

$mutable = A::createFromImmutable( $date );

var_dump($mutable);
?>
```

## Before

```text

```

## After

```text
object(A)#2 (3) {
  ["date"]=>
  string(26) "2014-06-20 11:45:00.000000" 
  ["timezone_type"]=>
  int(3)
  ["timezone"]=>
  string(13) "Europe/London" 
}
```

## PHP version change

This behavior changed in 8.2.
