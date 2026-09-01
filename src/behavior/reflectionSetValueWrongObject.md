# ReflectionProperty::setValue() Deprecates A Wrong Object Type

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/reflectionSetValueWrongObject.html","headline":"ReflectionProperty::setValue() Deprecates A Wrong Object Type","name":"ReflectionProperty::setValue() Deprecates A Wrong Object Type","description":"`ReflectionProperty::setValue()` (and `ReflectionProperty::setRawValue()`) accept an object as the first argument to set the property on.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/reflectionSetValueWrongObject.html","inLanguage":"en","dateModified":"2026-09-01T07:47:39+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"ReflectionProperty::setValue() Deprecates A Wrong Object Type"}]}}</script>

`ReflectionProperty::setValue()` (and `ReflectionProperty::setRawValue()`) accept an object as the first argument to set the property on. Until PHP 8.6, passing an object that is not an instance of the class the property was declared in was silently accepted, and the property was simply created on that unrelated object. In PHP 8.6, doing so emits a deprecation notice.

## PHP code

```php
<?php

class A {
    public int $prop = 1;
}

class B {
    public int $prop = 0;
}

$rp = new ReflectionProperty(A::class, 'prop');
$rp->setValue(new B(), 42);
print "done\n";

?>
```

## Before

```text
done
```

## After

```text
PHP Deprecated:  Calling ReflectionProperty::setValue() with a given object that is not an instance of the class this property was declared in is deprecated in /codes/reflectionSetValueWrongObject.php on line 12

Deprecated: Calling ReflectionProperty::setValue() with a given object that is not an instance of the class this property was declared in is deprecated in /codes/reflectionSetValueWrongObject.php on line 12
done
```

## PHP version change

This behavior was deprecated in 8.6.

This behavior changed in .

## See Also

- [ReflectionProperty::setValue](https://www.php.net/manual/en/reflectionproperty.setvalue.php)
- [ReflectionProperty::setRawValue](https://www.php.net/manual/en/reflectionproperty.setrawvalue.php)

## Error Messages

- [Calling ReflectionProperty::setValue() with a given object that is not an instance of the class this property was declared in is deprecated](https://php-errors.readthedocs.io/en/latest/messages/calling-reflectionproperty%3A%3Asetvalue%28%29-with-a-given-object-that-is-not-an-instance-of-the-class-this-property-was-declared-in-is-deprecated.html)
