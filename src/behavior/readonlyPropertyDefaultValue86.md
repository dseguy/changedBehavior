# Readonly Properties Can Have Default Values

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/readonlyPropertyDefaultValue86.html","headline":"Readonly Properties Can Have Default Values","name":"Readonly Properties Can Have Default Values","description":"A `readonly` property could not declare a default value.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/readonlyPropertyDefaultValue86.html","inLanguage":"en","dateModified":"2026-09-06T08:47:44+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Readonly Properties Can Have Default Values"}]}}</script>

A `readonly` property could not declare a default value. Until PHP 8.6, doing so was a fatal compile-time error, `Readonly property Class::$prop cannot have default value`. In PHP 8.6, a `readonly` property may declare a default value, which is used whenever the constructor does not explicitly initialize it. Assigning to the property once it already holds its default value, even from inside the constructor, still throws the usual `Cannot modify readonly property` error.

## PHP code
```php
<?php

class Point {
    public readonly int $x = 0;
    public function __construct(?int $x = null) {
        if ($x !== null) {
            $this->x = $x;
        }
    }
}

$p = new Point();
var_dump($p->x);

try {
    $p2 = new Point(5);
    var_dump($p2->x);
} catch (\Error $e) {
    echo "Error: ".$e->getMessage()."\n";
}

?>
```
## Before
```text
PHP Fatal error:  Readonly property Point::$x cannot have default value in /codes/readonlyPropertyDefaultValue86.php on line 4
```
## After
```text
int(0)
Error: Cannot modify readonly property Point::$x
```
## PHP version change
This behavior changed in 8.6.

## See Also

- [Readonly properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)
- [PHP 8.6 NEWS](https://www.php.net/ChangeLog-8.php#8.6.0)

## Error Messages

- [Cannot modify readonly property Point::$x](https://php-errors.readthedocs.io/en/latest/messages/readonly-properties-can-have-default-values.html)

## Extension