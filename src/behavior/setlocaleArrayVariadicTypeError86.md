# setlocale() Rejects Extra Arguments When $locales Is An Array

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/setlocaleArrayVariadicTypeError86.html","headline":"setlocale() Rejects Extra Arguments When $locales Is An Array","name":"setlocale() Rejects Extra Arguments When $locales Is An Array","description":"`setlocale()` accepts either a list of individual locale name arguments, or a single array of candidate locale names as its second parameter.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/setlocaleArrayVariadicTypeError86.html","inLanguage":"en","dateModified":"2026-08-12T07:24:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"setlocale() Rejects Extra Arguments When $locales Is An Array"}]}}</script>

`setlocale()` accepts either a list of individual locale name arguments, or a single array of candidate locale names as its second parameter. Until PHP 8.6, passing an array as `$locales` while also passing further variadic locale arguments was silently accepted, and the extra arguments were ignored. In PHP 8.6, passing any additional locale argument alongside an array `$locales` throws a `TypeError`.

## PHP code

```php
<?php

try {
    var_dump(setlocale(LC_ALL, ['en_US'], 'fr_FR'));
} catch (\TypeError $e) {
    echo "TypeError: ".$e->getMessage()."\n";
}

?>
```

## Before

```text
string(5) "en_US" 
```

## After

```text
TypeError: setlocale() expects exactly 2 arguments when argument #2 ($locales) is an array, 3 given
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [setlocale()](https://www.php.net/setlocale)

## Error Messages

- [setlocale() expects exactly 2 arguments when argument #2 ($locales) is an array, 3 given](https://php-errors.readthedocs.io/en/latest/messages/setlocale%28%29-rejects-extra-arguments-when-%24locales-is-an-array.html)
