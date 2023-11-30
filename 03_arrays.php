<?php
    $numbers = [1,2,3,4,5];
    $fruits = array('apple', ' banana', 'pear');

    // access element
    echo $fruits[0]; // this will print 'apple'

    // Associative array
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    echo $colors[4]; // this will print 'blue'

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    echo $hex['blue'];

    $person = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@mail.com'
    ];

    echo $person['email'];

    $people = [
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@mail.com'
        ],
        [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@mail.com'
        ],
        [
            'first_name' => 'Ben',
            'last_name' => 'Brown',
            'email' => 'ben@mail.com'
        ]
        ];

        echo $people[2]['email'];

        var_dump(json_encode($people));
?>