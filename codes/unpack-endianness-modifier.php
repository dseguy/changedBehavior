<?php

print bin2hex(pack('l<', 123456));
print bin2hex(pack('l>', 123456));

print_r( unpack('l<', hex2bin('40e20100')));
print_r( unpack('l>', hex2bin('0001e240')));
