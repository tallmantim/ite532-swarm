<?php
session_start();
$counter = intval($_SESSION["counter"] );

$counter ++ ;

$_SESSION["counter"]=$counter;

$name = shell_exec('cat /proc/self/cgroup | grep "pids:/docker"| cut -f 3 -d/');

echo $name." ".$counter."\n";
?>
