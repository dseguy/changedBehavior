# var_export() With Stdclass

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/var_export_stdclass.html","headline":"var_export() With Stdclass","name":"var_export() With Stdclass","description":"PHP used to export stdClass objects like other classes, with a call to the magic method __set_state().","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/var_export_stdclass.html","inLanguage":"en","dateModified":"2025-11-23T21:17:22+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"var_export() With Stdclass"}]}}</script>

PHP used to export stdClass objects like other classes, with a call to the magic method __set_state(). Since PHP 7.2, it does the export with the cast of an array to (object). This is more readable, and acknowledge the absence of such method for stdClass.

## PHP code

```php
<?php

   var_export(new stdClass);

?>
```

## Before

```text
stdClass::__set_state(array())
```

## After

```text
(object) array()
```

## PHP version change

This behavior changed in 7.2.
