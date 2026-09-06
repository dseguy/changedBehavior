# SplFileObject::fgetcsv() And fputcsv() Are Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splFileObjectCsvMethodsDeprecated86.html","headline":"SplFileObject::fgetcsv() And fputcsv() Are Deprecated","name":"SplFileObject::fgetcsv() And fputcsv() Are Deprecated","description":"`SplFileObject::fgetcsv()` and `SplFileObject::fputcsv()` read and write one CSV record on the wrapped file.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splFileObjectCsvMethodsDeprecated86.html","inLanguage":"en","dateModified":"2026-09-06T08:50:41+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"SplFileObject::fgetcsv() And fputcsv() Are Deprecated"}]}}</script>

`SplFileObject::fgetcsv()` and `SplFileObject::fputcsv()` read and write one CSV record on the wrapped file. In PHP 8.6, calling either method emits a deprecation notice recommending the plain `fgetcsv()`/`fputcsv()` functions on the underlying stream instead; both methods keep their previous behavior otherwise.

## PHP code
```php
<?php

file_put_contents(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.csv', "a,b,c\n");

$file = new SplFileObject(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.csv');
var_dump($file->fgetcsv());

$out = new SplFileObject(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.out.csv', 'w');
var_dump($out->fputcsv(['x', 'y']));

unlink(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.csv');
unlink(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.out.csv');

?>
```
## Before
```text
PHP Deprecated:  SplFileObject::fgetcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl() in /codes/splFileObjectCsvMethodsDeprecated86.php on line 6

Deprecated: SplFileObject::fgetcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl() in /codes/splFileObjectCsvMethodsDeprecated86.php on line 6
array(3) {
  [0]=>
  string(1) "a" 
  [1]=>
  string(1) "b" 
  [2]=>
  string(1) "c" 
}
PHP Deprecated:  SplFileObject::fputcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl() in /codes/splFileObjectCsvMethodsDeprecated86.php on line 9

Deprecated: SplFileObject::fputcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl() in /codes/splFileObjectCsvMethodsDeprecated86.php on line 9
int(4)
```
## After
```text
PHP Deprecated:  Method SplFileObject::fgetcsv() is deprecated since 8.6 in /codes/splFileObjectCsvMethodsDeprecated86.php on line 6

Deprecated: Method SplFileObject::fgetcsv() is deprecated since 8.6 in /codes/splFileObjectCsvMethodsDeprecated86.php on line 6
PHP Deprecated:  SplFileObject::fgetcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl() in /codes/splFileObjectCsvMethodsDeprecated86.php on line 6

Deprecated: SplFileObject::fgetcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl() in /codes/splFileObjectCsvMethodsDeprecated86.php on line 6
array(3) {
  [0]=>
  string(1) "a" 
  [1]=>
  string(1) "b" 
  [2]=>
  string(1) "c" 
}
PHP Deprecated:  Method SplFileObject::fputcsv() is deprecated since 8.6 in /codes/splFileObjectCsvMethodsDeprecated86.php on line 9

Deprecated: Method SplFileObject::fputcsv() is deprecated since 8.6 in /codes/splFileObjectCsvMethodsDeprecated86.php on line 9
PHP Deprecated:  SplFileObject::fputcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl() in /codes/splFileObjectCsvMethodsDeprecated86.php on line 9

Deprecated: SplFileObject::fputcsv(): the $escape parameter must be provided, as its default value will change, either explicitly or via SplFileObject::setCsvControl() in /codes/splFileObjectCsvMethodsDeprecated86.php on line 9
int(4)
```
## PHP version change
This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [SplFileObject::fgetcsv()](https://www.php.net/splfileobject.fgetcsv)
- [SplFileObject::fputcsv()](https://www.php.net/splfileobject.fputcsv)
- [fgetcsv()](https://www.php.net/fgetcsv)
- [fputcsv()](https://www.php.net/fputcsv)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Method SplFileObject::fgetcsv() is deprecated since 8.6](https://php-errors.readthedocs.io/en/latest/messages/splfileobject%3A%3Afgetcsv%28%29-and-fputcsv%28%29-are-deprecated.html)
- [Method SplFileObject::fputcsv() is deprecated since 8.6](https://php-errors.readthedocs.io/en/latest/messages/splfileobject%3A%3Afgetcsv%28%29-and-fputcsv%28%29-are-deprecated.html)

## Extension
- [spl](../extension.md#spl)