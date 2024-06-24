<?php
$rows = [
    [
        'title' => '1',
    ],

    [
        'title' => '2',
    ],

    [
        'title' => '3',
    ],

    [
        'title' => '4',
    ],

    [
        'title' => '5',
    ],

    [
        'title' => '6',
    ],

    [
        'title' => '7',
    ],
        [
        'title' => '8',
    ],

    [
        'title' => '9',
    ],

    [
        'title' => '10',
    ]
];

foreach ($rows as $k => $product) {
    echo "<div>". $product['title'] ."</div>";
    if ($k == 3) echo ("3333");
}