# SplFileObject::next() Always Advances The Stream

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splFileObjectNextCaching86.html","headline":"SplFileObject::next() Always Advances The Stream","name":"SplFileObject::next() Always Advances The Stream","description":"`SplFileObject::next()` used to only advance to the next line when a prior `current()` call had already cached a line internally.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splFileObjectNextCaching86.html","inLanguage":"en","dateModified":"2026-08-12T07:24:50+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"SplFileObject::next() Always Advances The Stream"}]}}</script>

`SplFileObject::next()` used to only advance to the next line when a prior `current()` call had already cached a line internally; without that cache, `next()` was a no-op and the following `current()` call re-read the same line. In PHP 8.6, `next()` unconditionally advances the underlying stream, so a subsequent `current()` call always returns the line after the one that was current before `next()` was called.

## PHP code

```php
<?php

$path = tempnam(sys_get_temp_dir(), 'spl');
file_put_contents($path, "line1\nline2\nline3\n");

$f = new SplFileObject($path);
$f->next();
var_dump(trim($f->current()));

unlink($path);

?>
```

## Before

```text
string(5) "line1" 
```

## After

```text
string(5) "line2" 
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [SplFileObject::next()](https://www.php.net/splfileobject.next)
