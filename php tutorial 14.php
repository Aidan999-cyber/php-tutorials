<?php

// local variables

function myFunc()
{
    $price = 10;
    echo $price;
}

// myFunc();

// echo $price;


// global variables

$name = 'mario';

// function sayHello()
// {
//     global $name;

//     $name = 'yoshi';

//     echo "hello $name";
// }

// sayHello();

// echo $name;


// passing variables by reference

function sayHello(&$name)
{
    $name = 'yoshi';

    echo "hello $name";
}

sayHello($name);

echo $name;
