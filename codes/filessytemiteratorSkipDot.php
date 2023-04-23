<?php

mkdir('/tmp/fsisd', 0777);
file_put_contents('/tmp/fsisd/a.txt', 'a');

$it = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::CURRENT_AS_FILEINFO);
foreach ($it as $fileinfo) {
    echo $fileinfo->getFilename() . "\n";
}

unlink('/tmp/fsisd/a.txt');
rmdir('/tmp/fsisd');

?>
