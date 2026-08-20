# FilessytemIterator Skips Dot Files

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/filessytemiteratorSkipDot.html","headline":"FilessytemIterator Skips Dot Files","name":"FilessytemIterator Skips Dot Files","description":"FilessytemIterator class used to list the current directory `.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/filessytemiteratorSkipDot.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"FilessytemIterator Skips Dot Files"}]}}</script>

FilessytemIterator class used to list the current directory `.` and the parent directory `..`. Files starting with a dot were and are still listed. 



In PHP 8.2, the dot files are not listed by default. At instantiation time, it is possible to have those file listed by using the FilesystemIterator::SKIP_DOTS option.

## PHP code

```php
<?php

// $dir is a path to a folder that contains 2 files:  a.txt and .b 
$it = new FilesystemIterator(dirname($dir), FilesystemIterator::CURRENT_AS_FILEINFO);
foreach ($it as $fileinfo) {
    echo $fileinfo->getFilename() . "\n";
}

?>
```

## Before

```text
.
..
a.txt
.b
```

## After

```text
.
..
a.txt
.b
```

## PHP version change

This behavior changed in 8.1.

## See Also

- [FilesystemIterator::__construct](\https://www.php.net/manual/en/filesystemiterator.construct.php)
