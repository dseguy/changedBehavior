# Keywords In Namespace

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/keywordInNamespace.html","headline":"Keywords In Namespace","name":"Keywords In Namespace","description":"PHP didn't accept its own keywords in the definition of a namespace.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/keywordInNamespace.html","inLanguage":"en","dateModified":"2026-02-01T20:53:00+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Keywords In Namespace"}]}}</script>

PHP didn't accept its own keywords in the definition of a namespace. Nowadays, namespaces are parsed as a whole, and there are no keywords in there. Before, the namespaces were parsed bit by bit, and the presence of the keywords was an impediment in that process. 

## PHP code

```php
<?php
namespace a\eval\b;
echo __NAMESPACE__;
?>
```

## Before

```text
syntax error, unexpected token "\", expecting "{"
```

## After

```text
a\eval\b
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [syntax error, unexpected token "--", expecting "{"](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-token-%22--%22%2C-expecting-%22%7B%22.html)

## Analyzer

- [Namespaces/NoKeywordInNamespace](https://exakat.readthedocs.io/en/latest/Reference/Rules/Namespaces/NoKeywordInNamespace.html)
