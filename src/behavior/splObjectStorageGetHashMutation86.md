# SplObjectStorage::getHash() May No Longer Mutate Storage

<script type="application/ld+json">{"@context":"https://schema.org","@type":"TechArticle","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splObjectStorageGetHashMutation86.html","headline":"SplObjectStorage::getHash() May No Longer Mutate Storage","name":"SplObjectStorage::getHash() May No Longer Mutate Storage","description":"A custom `getHash()` implementation in an `SplObjectStorage` subclass used to be free to mutate any `SplObjectStorage` instance, including a different one than the one currently being hashed, while computing the hash.","url":"https://php-changed-behaviors.readthedocs.io/en/latest/behavior/splObjectStorageGetHashMutation86.html","inLanguage":"en","dateModified":"2026-08-13T15:48:59+00:00","about":{"@type":"SoftwareApplication","name":"PHP","applicationCategory":"DeveloperApplication"},"isPartOf":{"@type":"WebSite","@id":"https://php-changed-behaviors.readthedocs.io/en/latest/","name":"PHP Changed Behaviors","url":"https://php-changed-behaviors.readthedocs.io/en/latest/"},"breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"PHP Changed Behaviors","item":"https://php-changed-behaviors.readthedocs.io/en/latest/"},{"@type":"ListItem","position":2,"name":"SplObjectStorage::getHash() May No Longer Mutate Storage"}]}}</script>

A custom `getHash()` implementation in an `SplObjectStorage` subclass used to be free to mutate any `SplObjectStorage` instance, including a different one than the one currently being hashed, while computing the hash. In PHP 8.6, attempting such a mutation from inside `getHash()` throws an `Error`, because `SplObjectStorage` internals are not reentrant during hashing.

## PHP code

```php
<?php

class WatchfulStorage extends SplObjectStorage {
    public SplObjectStorage $sideStorage;
    public function getHash(object $object): string {
        $this->sideStorage->offsetSet(new stdClass());
        return spl_object_hash($object);
    }
}

$watch = new WatchfulStorage();
$watch->sideStorage = new SplObjectStorage();

try {
    $watch->offsetSet(new stdClass());
    echo "offsetSet succeeded, sideStorage count=".count($watch->sideStorage)."\n";
} catch (\Error $e) {
    echo "Error: ".$e->getMessage()."\n";
}

?>
```

## Before

```text
offsetSet succeeded, sideStorage count=1
```

## After

```text
Error: Modification of SplObjectStorage during getHash() is prohibited
```

## PHP version change

This behavior changed in 8.6.

## See Also

- [SplObjectStorage::getHash()](https://www.php.net/splobjectstorage.gethash)

## Error Messages

- [Modification of SplObjectStorage during getHash() is prohibited](https://php-errors.readthedocs.io/en/latest/messages/modification-of-splobjectstorage-during-gethash%28%29-is-prohibited.html)
