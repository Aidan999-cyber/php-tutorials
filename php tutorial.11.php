<?php

$price = 20;

// if ($price < 30) {
//     echo 'the condition is met';
// }

// if ($price < 10) {
//     echo 'the condition is met';
// } else {
//     echo 'the condition is not met';
// }

// if ($price < 10) {
//     echo 'the first condition is met';
// } elseif ($price < 30) {
//     echo 'the second condition is met';
// } else {
//     echo 'no conditions are met';
// }


$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// foreach ($products as $product) {

//     if ($product['price'] < 15) {
//         echo $product['name'] . '<br />';
//     }

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <h1>Products</h1>

    <ul>
        <?php foreach ($products as $product) { ?>

            <?php if ($product['price'] > 15) { ?>

                <li><?php echo $product['name']; ?></li>

            <?php } ?>

        <?php } ?>
    </ul>

</body>

</html>