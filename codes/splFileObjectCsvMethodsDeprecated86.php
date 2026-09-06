<?php

file_put_contents(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.csv', "a,b,c\n");

$file = new SplFileObject(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.csv');
var_dump($file->fgetcsv());

$out = new SplFileObject(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.out.csv', 'w');
var_dump($out->fputcsv(['x', 'y']));

unlink(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.csv');
unlink(sys_get_temp_dir().'/splFileObjectCsvMethodsDeprecated86.out.csv');

?>
