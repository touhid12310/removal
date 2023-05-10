<?php

//same file multiple duplicate removed
$lines = explode("\n", file_get_contents('main.txt'));
$counts = array_count_values($lines);

$lines = array_filter($lines, function($line) use ($counts) {
    return $counts[$line] === 1;
});

$lines = array_map(function($line) {
    return preg_replace('/\s+/', '', $line);
}, $lines);

file_put_contents("main.txt", implode("\n", $lines));