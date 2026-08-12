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
