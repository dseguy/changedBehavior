# self Cannot Be Used Anymore In Callable Arrays

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/selfInCallable.html","headline":"self Cannot Be Used Anymore In Callable Arrays","name":"self Cannot Be Used Anymore In Callable Arrays","description":"PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/selfInCallable.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"self Cannot Be Used Anymore In Callable Arrays"}]}}</script>

PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.



Until PHP 8.2, it was possible to use the keyword `self`, to make the callable dependent on the context of usage of the callable. 



In the example, self would be calling the static method `replace`, in A. 



Since PHP 8.2, this is a deprecated feature, and it will be removed in PHP 9.

## PHP code

```php
<?php

class B
{
    public static function work($it) {
		return preg_replace_callback('~\w+~', array('self', 'self::replace'), $it);
    }

    public static function replace($a) {
    	return 'a';
    }
}

echo b::work('abc');

?>
```

## Before

```text
a
```

## After

```text
PHP Deprecated:  Use of "self" in callables is deprecated 

Deprecated: Use of "self" in callables is deprecated 
PHP Deprecated:  Callables of the form ["B", "self::replace"] are deprecated 

Deprecated: Callables of the form ["B", "self::replace"] are deprecated 
a
```

## PHP version change

This behavior was deprecated in 8.2.

This behavior changed in 9.0.

## Error Messages

- [Use of "self" in callables is deprecated](https://php-errors.readthedocs.io/en/latest/messages/use-of-%22self%22-in-callables-is-deprecated.html)

## Analyzer

- [Functions/DeprecatedCallable](https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/DeprecatedCallable.html)
