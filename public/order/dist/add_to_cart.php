<?php

session_start();

if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price'])) {
    $product = [
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'quantity' => 1,
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $cart = $_SESSION['cart'];

    if (array_key_exists($product['id'], $cart)) {
        ++$cart[$product['id']]['quantity'];
    } else {
        $cart[$product['id']] = $product;
    }

    $_SESSION['cart'] = $cart;
}

header('Location: http://127.0.0.1:8000/order/dist/order.php');
exit;
