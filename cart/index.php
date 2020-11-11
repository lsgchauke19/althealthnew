<?php
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

// Get the cart array from the session
if (empty($_SESSION['cart13'])) {
    $cart = array();
} else {
    $cart = $_SESSION['cart13'];
}

// Create a table of products
$products = array();
$products['Supplement-1'] = array('name' => 'Omega 3 Double Strength 60's', 'cost' => '356.00');
$products['Supplement-10'] = array('name' => 'Anti-Anxiety tables 30's', 'cost' => '223.00');
$products['Supplement-100'] = array('name' => 'Babies 60's', 'cost' => '145.00');

// Include cart functions
require_once('cart.php');

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_add_item';
    }
}

// Add or update cart as needed
switch($action) {
    case 'add':
        $key = filter_input(INPUT_POST, 'productkey');
        $quantity = filter_input(INPUT_POST, 'itemqty');
        althealth\cart\add_item($cart, $key, $quantity);
        $_SESSION['cart13'] = $cart;
        include('cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', 
                FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($cart[$key]['qty'] != $qty) {
                althealth\cart\update_item($cart, $key, $qty);
            }
        }
        $_SESSION['cart13'] = $cart;
        include('cart_view.php');
        break;
    case 'show_cart':
        include('cart_view.php');
        break;
    case 'show_add_item':
        include('add_item_view.php');
        break;
    case 'empty_cart':
        $cart = array();
        $_SESSION['cart13'] = $cart;
        include('cart_view.php');
        break;
}
?>