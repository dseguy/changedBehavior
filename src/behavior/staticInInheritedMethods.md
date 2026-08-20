# Static Variables Are Linked To Their Method

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticInInheritedMethods.html","headline":"Static Variables Are Linked To Their Method","name":"Static Variables Are Linked To Their Method","description":"Static variables are linked to their method: any call to that method should access the same property.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/staticInInheritedMethods.html","inLanguage":"en","dateModified":"2025-11-25T05:57:26+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Static Variables Are Linked To Their Method"}]}}</script>

Static variables are linked to their method: any call to that method should access the same property. 



Until PHP 8.1, the static variables used to be linked to the class: this meant that changing the call to the class lead to different values of the static variable. The new behavior is the expcted one. 

## PHP code

```php
<?php
class A {
    public static function counter() {
        static $counter = 0;
        $counter++;
        return $counter;
    }
}
class B extends A {}
var_dump(A::counter()); // int(1)
var_dump(A::counter()); // int(2)
var_dump(B::counter()); // int(3), previously int(1)
var_dump(B::counter()); // int(4), previously int(2)
?>
```

## Before

```text
int(1)
int(2)
int(1)
int(2)
```

## After

```text
int(1)
int(2)
int(3)
int(4)
```

## PHP version change

This behavior changed in 8.1.

## Analyzer

- [Variables/InheritedStaticVariable](https://exakat.readthedocs.io/en/latest/Reference/Rules/Variables/InheritedStaticVariable.html)
