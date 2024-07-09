<?php
/*
simple access counter for php3
(c)1998 David W. Bettis
dbettis@eyeintegrated.com
medify by Wilson Peng
*/
$counterFile = "/tmp/counter.txt";
function displayCounter($counterFile) {
$fp = fopen($counterFile,"rw");
$num = fgets($fp,5);
$num += 1;
print "$num";
exec( "rm -rf $counterFile");
exec( "echo $num > $counterFile");
}

if (!file_exists($counterFile)) {
exec( "echo 0 > $counterFile");
}

displayCounter($counterFile);

