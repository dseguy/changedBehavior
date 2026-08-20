# static Cannot Be Used Anymore In Callable Arrays

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticInCallable.html","headline":"static Cannot Be Used Anymore In Callable Arrays","name":"static Cannot Be Used Anymore In Callable Arrays","description":"PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticInCallable.html","inLanguage":"en","dateModified":"2026-08-12T07:13:58+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"static Cannot Be Used Anymore In Callable Arrays"}]}}</script>

PHP supports a callable syntax, based on array: it must be an array of two elements, where the index 0 is the object or the class, and the index 1 is the method name.



Until PHP 8.2, it was possible to use the keyword `static`, to make the callable dependent on the context of usage of the callable. 



In the example, static would be calling the static method `replace`, in A, or in any other class where it is used. 



Since PHP 8.2, this is a deprecated feature, and it will be removed in PHP 9.

## PHP code

```php
<?php
class A
{
    public static function work($it) {
		return preg_replace_callback('~\w+~', array('static', 'static::replace'), $it);
    }
    
    public static function replace($a) {
    	return 'a';
    }
}

echo a::work('abc');

?>
```

## Before

```text
a
```

## After

```text
PHP Deprecated:  Use of "static" in callables is deprecated

Deprecated: Use of "static" in callables is deprecated
PHP Deprecated:  Callables of the form ["A", "static::replace"] are deprecated

Deprecated: Callables of the form ["A", "static::replace"] are deprecated
a
```

## PHP version change

This behavior was deprecated in 8.2.

This behavior changed in 9.0.

## Error Messages

- [Use of "static" in callables is deprecated](https://php-errors.readthedocs.io/en/latest/messages/use-of-%22static%22-in-callables-is-deprecated.html)

## Analyzer

- [Functions/DeprecatedCallable](https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/DeprecatedCallable.html)
