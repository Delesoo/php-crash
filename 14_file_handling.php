<?php
    $file = 'extras/users.txt';

    if(file_exists($file)) {
        // echo readfile($file);
        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($file, 'w');
        $contents = 'vaime' . PHP_EOL . 'test2' . PHP_EOL . 'test';
        fwrite($handle, $contents);
        echo $handle;
    }