# Ternary Associativity

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ternaryAssociativity.html","headline":"Ternary Associativity","name":"Ternary Associativity","description":"The ternary operator used to have a left associativity : it would process first the `then` and `else` clauses, before executing itself.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ternaryAssociativity.html","inLanguage":"en","dateModified":"2026-02-06T21:29:59+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"Ternary Associativity"}]}}</script>

The ternary operator used to have a left associativity : it would process first the `then` and `else` clauses, before executing itself.



Since PHP 8.0, the ternary operator produces a fatal error when the nested ternaries are ambiguous.



The update forces the code to use parenthesis, and set the priorities between the operators explicitly.



This doesn't apply to the `then` clause, which is always unambiguous.

## PHP code

```php
<?php

$a = 2;
print $a == 1 ? 'one'
     : $a == 2 ? 'two'
     : $a == 3 ? 'three'
     : 'other';

?>
```

## Before

```text
three
```

## After

```text
Fatal error: Unparenthesized `a ? b : c ? d : e` is not supported. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` 
```

## PHP version change

This behavior was deprecated in 7.4.

This behavior changed in 8.0.

## See Also

- [PHP RFC: Deprecate left-associative ternary operator](https://wiki.php.net/rfc/ternary_associativity)

## Error Messages

- [Unparenthesized \`a ? b : c ? d : e\` is not supported.](https://php-errors.readthedocs.io/en/latest/messages/unparenthesized-%60a-%3F-b-%3A-c-%3F-d-%3A-e%60-is-not-supported..html)

## Analyzer

- [Php/NestedTernaryWithoutParenthesis](https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/NestedTernaryWithoutParenthesis.html)
