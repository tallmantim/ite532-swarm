<?php
session_start();

$name = shell_exec('cat /proc/self/cgroup | grep "pids:/docker"| cut -f 3 -d/');

echo $name."\n";
?>
