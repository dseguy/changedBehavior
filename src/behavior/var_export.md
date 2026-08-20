# var_export() Format

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/var_export.html","headline":"var_export() Format","name":"var_export() Format","description":"PHP used to export an object with a fully qualified name, except for the first backslash.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/var_export.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"var_export() Format"}]}}</script>

PHP used to export an object with a fully qualified name, except for the first backslash. Since PHP 8.2, the name is a fully qualified one, and may be used in any namespace, without adaptation.

## PHP code

```php
<?php

class X {}

var_export(new X);

?>
```

## Before

```text
\X::__set_state(array(
))
```

## After

```text
\\X::__set_state(array(
))
```

## PHP version change

This behavior changed in 8.2.

## See Also

- [var_export() combined with enum produces code unsuitable for inclusion in namespaces](https://github.com/php/php-src/issues/8232)
- [Add leading backslash to enum and class names in var_export](https://externals.io/message/117466)
