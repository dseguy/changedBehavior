<?php

class MyHandler implements \SessionHandlerInterface {
    public function open($path, $name): bool { return true; }
    public function close(): bool { return true; }
    public function read($id): string { return ''; }
    public function write($id, $data): bool { return true; }
    public function destroy($id): bool { return true; }
    public function gc($max_lifetime): int|false { return 0; }
}

var_dump(session_set_save_handler(new MyHandler()));

?>
