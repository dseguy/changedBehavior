# __sleep() Method Enforces Return Type

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nonArrayWithSleep.html","headline":"__sleep() Method Enforces Return Type","name":"__sleep() Method Enforces Return Type","description":"__sleep is a magic method that lists the name of the variables to serialize.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/nonArrayWithSleep.html","inLanguage":"en","dateModified":"2025-09-03T17:18:41+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"__sleep() Method Enforces Return Type"}]}}</script>

__sleep is a magic method that lists the name of the variables to serialize. It should come as an array, and is enforced as such since PHP 8.0.

## PHP code

```php
<?php

class x {
	function __sleep() {
		return 3;
	}
}

serialize(new x);

?>
```

## Before

```text
PHP Notice:  serialize(): __sleep should return an array only containing the names of instance-variables to serialize

Notice: serialize(): __sleep should return an array only containing the names of instance-variables to serialize
```

## After

```text
PHP Warning:  serialize(): x::__sleep() should return an array only containing the names of instance-variables to serialize

Warning: serialize(): x::__sleep() should return an array only containing the names of instance-variables to serialize
```

## PHP version change

This behavior changed in 8.0.

## Error Messages

- [serialize(): __sleep should return an array only containing the names of instance-variables to serialize](https://php-errors.readthedocs.io/en/latest/messages/__sleep-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize..html)
