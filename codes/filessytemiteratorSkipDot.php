<?php

mkdir('/tmp/fsisd', 0777);
file_put_contents('/tmp/fsisd/a.txt', 'a');
file_put_contents('/tmp/fsisd/.b', 'b');

$it = new FilesystemIterator(dirname('/tmp/fsisd/a.txt'), FilesystemIterator::CURRENT_AS_FILEINFO);
foreach ($it as $fileinfo) {
    echo $fileinfo->getFilename() . "\n";
}

unlink('/tmp/fsisd/a.txt');
unlink('/tmp/fsisd/.b');
rmdir('/tmp/fsisd');

?>
