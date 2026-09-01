# SplFileObject::fgets() No Longer Caches The Current Line

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splFileObjectFgetsCaching.html","headline":"SplFileObject::fgets() No Longer Caches The Current Line","name":"SplFileObject::fgets() No Longer Caches The Current Line","description":"`SplFileObject::fgets()` used to cache the line it read so that a following `current()` call returned that same cached line instead of reading again.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splFileObjectFgetsCaching.html","inLanguage":"en","dateModified":"2026-09-01T07:53:51+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"SplFileObject::fgets() No Longer Caches The Current Line"}]}}</script>

`SplFileObject::fgets()` used to cache the line it read so that a following `current()` call returned that same cached line instead of reading again. It also let `next()` be called past end-of-file an unlimited number of times, incrementing `key()` without bound. In PHP 8.6, `fgets()` no longer caches the line for `current()`, so `current()` now reads and returns the next line from the stream; `next()` past EOF is now a no-op, so `key()` stops advancing once the end of the file is reached.

## PHP code

```php
<?php

$path = tempnam(sys_get_temp_dir(), 'spl');
file_put_contents($path, "line1\nline2\nline3\n");

$f = new SplFileObject($path);
var_dump(trim($f->fgets()));
var_dump(trim($f->current()));

for ($i = 0; $i < 5; $i++) {
    $f->next();
}
var_dump($f->key());

unlink($path);

?>
```

## Before

```text
string(5) line1
string(5) line1
int(5)
```

## After

```text
string(5) line1
string(5) line2
int(3)
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [SplFileObject::fgets()](https://www.php.net/splfileobject.fgets)
- [SplFileObject::current()](https://www.php.net/splfileobject.current)
- [SplFileObject::next()](https://www.php.net/splfileobject.next)
- [SplFileObject::key()](https://www.php.net/splfileobject.key)
