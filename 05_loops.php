<?php
    // for($x= 0; $x <= 10; $x++) {
    //     echo $x;
    // }

    // $x = 1;

    // while($x <= 15) {
    //     echo 'Number' . $x . '<br>';
    //     $x++;
    // }

    $posts = ['first', 'second', 'third'];

    // foreach($posts as $post) {
    //     echo "$post";
    // }

    foreach($posts as $key => $post) {
        echo $key +1 . ' - ' . $post . '<br>';
    }

    $human = [
        'first_name' => 'test',
        'last_name' => 'test3',
        'has_money' => true,
        'has_big_d' => false,
        'money' => 123.22,
    ];

    foreach($human as $key => $value) {
        echo $key . ' - ' . $value . '<br>';
    }

