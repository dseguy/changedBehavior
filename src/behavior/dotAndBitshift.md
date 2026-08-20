# Dot And Bitshift Priority

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dotAndBitshift.html","headline":"Dot And Bitshift Priority","name":"Dot And Bitshift Priority","description":"The dot (concatenation) and bitshift (<< and >>) operators have a distinct priority in PHP.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/dotAndBitshift.html","inLanguage":"en","dateModified":"2026-02-25T23:50:10+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Dot And Bitshift Priority"}]}}</script>

The dot (concatenation) and bitshift (<< and >>) operators have a distinct priority in PHP 

## PHP code

```php
<?php
echo 3 . 4 << 1;
?>
```

## Before

```text
68
```

## After

```text
38
```

## PHP version change

This behavior was deprecated in The behavior of unparenthesized expressions containing both '.' and '>>'/'<<' will change in PHP 8: '<<'/'>>' will take a higher precedence.

This behavior changed in 8.0.

## See Also

- [Other incompatible Changes](https://www.php.net/manual/en/migration80.incompatible.php)
- [Bitwise Operators](https://www.php.net/manual/en/language.operators.bitwise.php)

## Analyzer

- [Php/ConcatAndAddition](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/ConcatAndAddition.html)
