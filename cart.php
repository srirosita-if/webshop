<?php
session_start();
include 'products.php';

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keranjang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="title">🛍 Keranjang Belanja 🛍</h1>

<table class="table">
<tr>
    <th>Produk</th><th>Harga</th><th>Qty</th><th>Total</th><th>Aksi</th>
</tr>

<?php
$grand = 0;
foreach ($cart as $id => $qty):
    $item = $products[$id];
    $total = $qty * $item['price'];
    $grand += $total;
?>
<tr>
    <td><?= $item['name'] ?></td>
    <td>Rp <?= number_format($item['price']) ?></td>
    <td><?= $qty ?></td>
    <td>Rp <?= number_format($total) ?></td>
    <td>
        <a href="cart_action.php?action=add&id=<?= $id ?>">➕</a>
        <a href="cart_action.php?action=min&id=<?= $id ?>">➖</a>
        <a href="cart_action.php?action=del&id=<?= $id ?>">❌</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<h3>Total Bayar: Rp <?= number_format($grand) ?></h3>

<a class="btn" href="checkout.php">Checkout 💝</a>
<a class="btn2" href="index.php">Tambah Produk</a>

</body>
</html>
