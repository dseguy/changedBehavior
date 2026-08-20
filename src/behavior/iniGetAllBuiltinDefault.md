# ini_get_all() Includes The Built-in Default Value

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/iniGetAllBuiltinDefault.html","headline":"ini_get_all() Includes The Built-in Default Value","name":"ini_get_all() Includes The Built-in Default Value","description":"`ini_get_all()` used to return, for each directive, only the `global_value`, `local_value` and `access` keys.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/iniGetAllBuiltinDefault.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"ini_get_all() Includes The Built-in Default Value"}]}}</script>

`ini_get_all()` used to return, for each directive, only the `global_value`, `local_value` and `access` keys. In PHP 8.6, a fourth key, `builtin_default_value`, is added, containing the value that is hard-coded in PHP itself, regardless of any `php.ini` or `ini_set()` change.

## PHP code

```php
<?php

$all = ini_get_all('core', true);
var_dump($all['precision']);

?>
```

## Before

```text
array(3) {
  [global_value]=>
  string(2) 14
  [local_value]=>
  string(2) 14
  [access]=>
  int(7)
}
```

## After

```text
array(4) {
  [global_value]=>
  string(2) 14
  [local_value]=>
  string(2) 14
  [builtin_default_value]=>
  string(2) 14
  [access]=>
  int(7)
}
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [ini_get_all()](https://www.php.net/ini_get_all)
