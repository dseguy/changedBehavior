# New Cases In Switch

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/newCasesInSwitch.html","headline":"New Cases In Switch","name":"New Cases In Switch","description":"With PHP 8.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/newCasesInSwitch.html","inLanguage":"en","dateModified":"2026-08-12T15:30:23+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"New Cases In Switch"}]}}</script>

With PHP 8.0, the result of comparisons between empty values, such as 0, `''` (empty string), or `[]` (empty array), have changed. The impact is obvious with the `==` operator, and it is less obvious with `switch`, which relies on the same underlying code.



In particular, when there are several falsy cases in a switch, the selection of cases may be different between PHP versions, like in this illustration. 



In PHP 7.4 and older, `0 == ''`, so the first case is selected. After PHP 8.0, `0 != ''`, and the second case is selected.

## PHP code

```php
<?php

foreach([0, '', null, []] as $a )
	switch($a) {
		case 0;
			print Zero\n;
			break;
			
		case '':
			print Empty string\n;
			break;
			
		case []:
			print []\n;
			break;
	}

?>
```

## Before

```text
Zero
Zero
Zero
[]
```

## After

```text
Zero
Empty string
Zero
[]
```

## PHP version change

This behavior changed in 8.0.
