<?php
 
function foo() {
    yield /*a*/  from [3];
} 

foreach(foo() as $i) {
    print $i;
}
?>