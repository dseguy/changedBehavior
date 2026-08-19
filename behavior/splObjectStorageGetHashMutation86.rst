.. _splobjectstorage::gethash()-may-no-longer-mutate-storage:

SplObjectStorage::getHash() May No Longer Mutate Storage
========================================================
.. meta::
	:description:
		SplObjectStorage::getHash() May No Longer Mutate Storage: A custom ``getHash()`` implementation in an ``SplObjectStorage`` subclass used to be free to mutate any ``SplObjectStorage`` instance -- including a different one than the one currently being hashed -- while computing the hash.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplObjectStorage::getHash() May No Longer Mutate Storage
	:twitter:description: SplObjectStorage::getHash() May No Longer Mutate Storage: A custom ``getHash()`` implementation in an ``SplObjectStorage`` subclass used to be free to mutate any ``SplObjectStorage`` instance -- including a different one than the one currently being hashed -- while computing the hash
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplObjectStorage::getHash() May No Longer Mutate Storage
	:og:type: article
	:og:description: A custom ``getHash()`` implementation in an ``SplObjectStorage`` subclass used to be free to mutate any ``SplObjectStorage`` instance -- including a different one than the one currently being hashed -- while computing the hash
	:og:url: https://php-tips.readthedocs.io/en/latest/tips/splObjectStorageGetHashMutation86.html
	:og:locale: en

A custom ``getHash()`` implementation in an ``SplObjectStorage`` subclass used to be free to mutate any ``SplObjectStorage`` instance -- including a different one than the one currently being hashed -- while computing the hash. In PHP 8.6, attempting such a mutation from inside ``getHash()`` throws an ``Error``, because ``SplObjectStorage`` internals are not reentrant during hashing.

PHP code
________
.. code-block:: php

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
   

Before
______
.. code-block:: output

   offsetSet succeeded, sideStorage count=1
   

After
______
.. code-block:: output

   Error: Modification of SplObjectStorage during getHash() is prohibited
   


PHP version change
__________________
This behavior changed in 8.6


See Also
________

* `SplObjectStorage::getHash() <https://www.php.net/splobjectstorage.gethash>`_


Error Messages
______________

  + `Modification of SplObjectStorage during getHash() is prohibited <https://php-errors.readthedocs.io/en/latest/messages/modification-of-splobjectstorage-during-gethash%28%29-is-prohibited.html>`_



