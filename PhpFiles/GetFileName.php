<?php

$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    $data = $fileinfo->getFilename();
    echo $fileinfo->getFilename() . "<br>";
    echo $data . "<br>";
}
