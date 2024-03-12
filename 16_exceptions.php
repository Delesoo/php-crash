<?php
    function inverse($x) {
        if (!$x) {
            throw new Exception('division by zero');
        }

        return 1/$x;
    }

    echo inverse(2);

    try {
        echo inverse(2);
        echo inverse(0);
    } catch (Exception $e) {
        echo 'cought didi yle', $e->getMessage(), ' ';
    }

    