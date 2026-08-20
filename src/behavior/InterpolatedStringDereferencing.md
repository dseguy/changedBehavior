# Interpolated String Dereferencing

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/InterpolatedStringDereferencing.html","headline":"Interpolated String Dereferencing","name":"Interpolated String Dereferencing","description":"Until PHP 8, it was not possible to use a literal string as a variable for an array, or a class name, and access, respectively, index, properties, constant or methods.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/InterpolatedStringDereferencing.html","inLanguage":"en","dateModified":"2025-07-30T17:14:45+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Interpolated String Dereferencing"}]}}</script>

Until PHP 8, it was not possible to use a literal string as a variable for an array, or a class name, and access, respectively, index, properties, constant or methods. It was not possible for interpolated strings, which are strings that include another string. 



In PHP 8, this is now possible.

## PHP code

```php
<?php

$bar = "abc";

echo "foo$bar"[0];
echo PHP_EOL
echo "foo$bar"::foo();

class fooabc{
    static function foo() {
        print __METHOD__;
    }
}

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected '[', expecting ';' or ',' 
```

## After

```text
f
fooabc::foo
```

## PHP version change

This behavior changed in 8.0.

## See Also

- [PHP RFC: Arbitrary string interpolation](https://wiki.php.net/rfc/arbitrary_string_interpolation)

## Error Messages

- [syntax error, unexpected '[', expecting ';' or ','](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%5B%27%2C-expecting-%27%3B%27-or-%27%2C%27.html)

## Analyzer

- [Php/InterpolatedStringDereferencing](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/InterpolatedStringDereferencing.html)
