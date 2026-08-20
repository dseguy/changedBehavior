# compact() Throws Notice On Missing Variable

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/compactThrowsNotice.html","headline":"compact() Throws Notice On Missing Variable","name":"compact() Throws Notice On Missing Variable","description":"compact() collects variables in an array.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/compactThrowsNotice.html","inLanguage":"en","dateModified":"2025-09-13T09:04:29+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"compact() Throws Notice On Missing Variable"}]}}</script>

compact() collects variables in an array. When trying to compact() variable that don't exist, compact() now emits warnings to signal the missing variables. They might be removed or created.



Invalid variable names, such as numeric values, are also reported.



## PHP code

```php
<?php

$name = 'Tobias';
$age = 28;

// class error, where the variable is confused with its content
var_dump(compact($name, $age));

// valid usage
// var_dump(compact("name", 'age'));

?>
```

## Before

```text
PHP Warning:  compact(): Undefined variable $Tobias

Warning: compact(): Undefined variable $Tobias
array(0) {
}
```

## After

```text
PHP Warning:  compact(): Undefined variable $Tobias

Warning: compact(): Undefined variable $Tobias
PHP Warning:  compact(): Argument #2 must be string or array of strings, int given

Warning: compact(): Argument #2 must be string or array of strings, int given
array(0) {
}
```

## PHP version change

This behavior changed in 8.1.

## See Also

- [compact()](https://www.php.net/manual/en/function.compact.php)

## Error Messages

- [Undefined variable](https://php-errors.readthedocs.io/en/latest/messages/undefined-variable.html)

## Analyzer

- [Php/CompactInexistant](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/CompactInexistant.html)
