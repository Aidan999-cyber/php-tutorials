<?php

// multidimensional arrays

$blogs = [
    ['mario party', 'mario', 'lorem', 30],
    ['mario kart cheats', 'toad', 'lorem', 25],
    ['zelda hidden chests', 'link', 'lorem', 50]
];

// print_r($blogs);

// print_r($blogs[1]);

// echo $blogs[1][1];


// associative arrays inside an array

$blogs = [
    [
        'title' => 'mario party',
        'author' => 'mario',
        'content' => 'lorem',
        'likes' => 30
    ],
    [
        'title' => 'mario kart cheats',
        'author' => 'toad',
        'content' => 'lorem',
        'likes' => 25
    ],
    [
        'title' => 'zelda hidden chests',
        'author' => 'link',
        'content' => 'lorem',
        'likes' => 50
    ]
];

// echo $blogs[2]['author'];

// echo count($blogs);

$blogs[] = [
    'title' => 'castle party',
    'author' => 'peach',
    'content' => 'lorem',
    'likes' => 100
];

// print_r($blogs);

$poppedBlog = array_pop($blogs);

print_r($poppedBlog);
