# get_object_vars() Does Not Work On ArrayObject

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/getObjectVars.html","headline":"get_object_vars() Does Not Work On ArrayObject","name":"get_object_vars() Does Not Work On ArrayObject","description":"Until PHP 7.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/getObjectVars.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"get_object_vars() Does Not Work On ArrayObject"}]}}</script>

Until PHP 7.4, `ArrayObject` used to export its properties as they were defined in the array. Since then, `ArrayObject` does not export any property anymore. They are still accessible via the normal property syntax, just not with `get_object_vars()` anymore.

## PHP code

```php
<?php

// Illustration courtesy of Doug Bierer
$obj = new ArrayObject(['A' => 1,'B' => 2,'C' => 3]);
var_dump($obj->getArrayCopy());
var_dump(get_object_vars($obj));
//var_dump((array) $obj);

?>
```

## Before

```text
array(3) {
  [A]=>
  int(1)
  [B]=>
  int(2)
  [C]=>
  int(3)
}
array(3) {
  [A]=>
  int(1)
  [B]=>
  int(2)
  [C]=>
  int(3)
}
```

## After

```text
array(3) {
  [A]=>
  int(1)
  [B]=>
  int(2)
  [C]=>
  int(3)
}
array(0) {
}
```

## PHP version change

This behavior changed in 7.4.
