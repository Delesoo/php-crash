<?php
    $cifrebi = [1,3,12,21];

    var_dump($cifrebi);
    echo $cifrebi[2];

    $colors = [
        1 => 'test1',
        2 => 'test2',
        3 => 'test3',
    ];

    $human = [
        'first_name' => 'testname',
        'last_name' => 'test',
        'has_money' => true,
        'has_big_d' => false,
        'money' => 123.22,
    ];

    echo $human['first_name'];

    $persons = [
        [
            'first_name' => 'testname2',
            'last_name' => 'test2',
            'has_money' => true,
            'has_big_d' => false,
            'money' => 123.22,
        ],
        [
            'first_name' => 'uuux',
            'last_name' => 'dzalian',
            'has_money' => true,
            'has_big_d' => false,
            'money' => 1232131.22,
        ],
        [
            'first_name' => 'abaa',
            'last_name' => 'ariqaa',
            'has_money' => true,
            'has_big_d' => false,
            'money' => 122113.22,
        ]
    ];

    var_dump(json_encode($persons));