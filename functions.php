<?php

// require MySQL Connection
require('database/DBcontroller.php');

// require Product class
require('database/Product.php');

// require Cart class
require('database/Cart.php');

//dbController object
$db= new DBcontroller();

//Product object
$product= new Product($db);
$product_shuffle = $product->getData();

//cart object
$cart = new Cart($db);


