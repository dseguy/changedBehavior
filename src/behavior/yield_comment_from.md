# Comment Inside yield from

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/yield_comment_from.html","headline":"Comment Inside yield from","name":"Comment Inside yield from","description":"It was possible to insert a comment between the `yield` and the `from`.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/yield_comment_from.html","inLanguage":"en","dateModified":"2026-08-20T19:16:09+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Comment Inside yield from"}]}}</script>

It was possible to insert a comment between the `yield` and the `from`. 



In PHP 8.3 more recent, this would not compile, unless there was a defined constant called `from`.

## PHP code

```php
<?php
 
function foo() {
    yield /*a*/  from [3];
} 

foreach(foo() as $i) {
    print $i;
}
?>
```

## Before

```text
PHP Fatal error:  Uncaught Error: Undefined constant "from" 

Fatal error: Uncaught Error: Undefined constant "from" 
```

## After

```text
3
```

## PHP version change

This behavior changed in 8.3.

## Error Messages

- [Undefined constant "%s"](https://php-errors.readthedocs.io/en/latest/messages/undefined-constant-%22%25s.html)
