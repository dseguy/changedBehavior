# Calling Static Methods On Strings

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/InterpolatedStringMethodcall.html","headline":"Calling Static Methods On Strings","name":"Calling Static Methods On Strings","description":"The left operand of the `::` operator for methods could not be a literal string, until PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/InterpolatedStringMethodcall.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Calling Static Methods On Strings"}]}}</script>

The left operand of the `::` operator for methods could not be a literal string, until PHP 8.0. It was not recognized as a valid syntax. 



In PHP 8.0 and later, it is possible to build a class name in a string, then use it immediately in a method call. 



It is also valid to access class constants and properties. 

## PHP code

```php
<?php

$bar = abc;

echo foo$bar::foo();

class fooabc{
	static function foo() {
		print __METHOD__;
	}
}

?>
```

## Before

```text
PHP Parse error:  syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','

Parse error: syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','
```

## After

```text
fooabc::foo
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM)](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3A%3A%27-%28t_paamayim_nekudotayim%29%2C-expecting-%27%3B%27-or-%27%2C%27.html)
- [syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','](https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%3A%3A%27-%28t_paamayim_nekudotayim%29%2C-expecting-%27%3B%27-or-%27%2C%27.html)
