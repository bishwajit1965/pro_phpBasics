<?php

$d = __DIR__;
echo $d;

$array_a = new ArrayIterator(['a', 'b', 'c']);
$array_b = new ArrayIterator(['d', 'e', 'f']);

$iterator = new AppendIterator;
$iterator->append($array_a);
$iterator->append($array_b);

foreach ($iterator as $current) {
    echo $current;
}
