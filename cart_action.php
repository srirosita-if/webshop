<?php
session_start();

$action = $_GET['action'];
$id = $_GET['id'];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($action == "add") {
    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = 1;
    } else {
        $_SESSION['cart'][$id]++;
    }
}

if ($action == "min") {
    $_SESSION['cart'][$id]--;
    if ($_SESSION['cart'][$id] <= 0) unset($_SESSION['cart'][$id]);
}

if ($action == "del") {
    unset($_SESSION['cart'][$id]);
}

header("Location: cart.php");
exit;
