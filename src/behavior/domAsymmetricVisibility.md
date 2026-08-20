# DOM Readonly Properties Use Asymmetric Visibility

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/domAsymmetricVisibility.html","headline":"DOM Readonly Properties Use Asymmetric Visibility","name":"DOM Readonly Properties Use Asymmetric Visibility","description":"Properties previously documented as readonly, such as `DOMNode::$nodeType`, `DOMDocument::$xmlEncoding`, `DOMEntity::$actualEncoding`, `$encoding` and `$version`, are now declared with asymmetric visibility (`public private(set)`).","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/domAsymmetricVisibility.html","inLanguage":"en","dateModified":"2026-07-26T06:31:57+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"DOM Readonly Properties Use Asymmetric Visibility"}]}}</script>

Properties previously documented as readonly, such as `DOMNode::$nodeType`, `DOMDocument::$xmlEncoding`, `DOMEntity::$actualEncoding`, `$encoding` and `$version`, are now declared with asymmetric visibility (`public private(set)`). Writing to them from outside the class still fails, but the error message and its wording changed.

## PHP code

```php
<?php

$doc = new DOMDocument();
$doc->loadXML('<root/>');

try {
    $doc->xmlEncoding = 'UTF-8';
} catch (\Error $e) {
    echo get_class($e), ': ', $e->getMessage(), "\n";
}

?>
```

## Before

```text
Error: Cannot modify readonly property DOMDocument::$xmlEncoding
```

## After

```text
Error: Cannot modify private(set) property DOMDocument::$xmlEncoding from global scope
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [DOMDocument](https://www.php.net/manual/en/class.domdocument.php)
