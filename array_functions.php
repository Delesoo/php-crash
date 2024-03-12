<?php
    // $fruits = ['apple', 'pear', 'orange'];

    // $fruits[] = 'grape';
    // array_push($fruits, 'blueberry');

    // $chunked = array_chunk($fruits, 3);

    // print_r($chunked);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);

    print_r($arr3);

    $a = ['red', 'blue', 'green'];
    $b = ['chemikai', 'vaime', 'uime'];

    $c = array_combine($a, $b);

    // print_r($c);

    $numbers = range(1, 20);
    // print_r($numbers);

    $newNumbers = array_map(function($number) {
        return "Number $number";
    }, $numbers);

    // print_r($newNumbers);

    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

    print_r($sum);