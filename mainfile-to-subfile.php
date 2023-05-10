<?php

//you have to create main.txt and sub.txt
$main = explode("\n", file_get_contents('main.txt'));
$sub = explode("\n", file_get_contents('sub.txt'));
$sub = array_diff($sub, $main);
file_put_contents('sub.txt', implode("\n", $sub));
