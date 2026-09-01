# Passing An Object To mb_convert_variables() Is Deprecated

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mbConvertVariablesObjectDeprecated.html","headline":"Passing An Object To mb_convert_variables() Is Deprecated","name":"Passing An Object To mb_convert_variables() Is Deprecated","description":"`mb_convert_variables()` accepts one or more variables by reference and converts their character encoding in place.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mbConvertVariablesObjectDeprecated.html","inLanguage":"en","dateModified":"2026-09-01T07:53:37+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Passing An Object To mb_convert_variables() Is Deprecated"}]}}</script>

`mb_convert_variables()` accepts one or more variables by reference and converts their character encoding in place; historically, an object passed as one of these variables had its accessible public properties converted, just like an array. Until PHP 8.6, this worked silently. In PHP 8.6, passing an object to `mb_convert_variables()` emits a deprecation notice suggesting `get_object_vars()` first, even though the conversion still happens exactly as before.

## PHP code

```php
<?php

$o = new stdClass();
$o->a = "abc";
$o->b = "def";

$from = mb_convert_variables("UTF-8", "auto", $o);
var_dump($from);
var_dump($o);

?>
```

## Before

```text
string(5) "ASCII" 
object(stdClass)#1 (2) {
  ["a"]=>
  string(3) "abc" 
  ["b"]=>
  string(3) "def" 
}
```

## After

```text
PHP Deprecated:  mb_convert_variables(): Passing an object for argument #3 $vars to mb_convert_variables() is deprecated, call get_object_vars() first instead in /codes/mbConvertVariablesObjectDeprecated.php on line 7

Deprecated: mb_convert_variables(): Passing an object for argument #3 $vars to mb_convert_variables() is deprecated, call get_object_vars() first instead in /codes/mbConvertVariablesObjectDeprecated.php on line 7
string(5) "ASCII" 
object(stdClass)#1 (2) {
  ["a"]=>
  string(3) "abc" 
  ["b"]=>
  string(3) "def" 
}
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [mb_convert_variables()](https://www.php.net/mb_convert_variables)
- [get_object_vars()](https://www.php.net/get_object_vars)

## Error Messages

- [mb_convert_variables(): Passing an object for argument #3 $vars to mb_convert_variables() is deprecated, call get_object_vars() first instead](https://php-errors.readthedocs.io/en/latest/messages/mb_convert_variables%28%29%3A-passing-an-object-for-argument-%233-%24vars-to-mb_convert_variables%28%29-is-deprecated%2C-call-get_object_vars%28%29-first-instead.html)
