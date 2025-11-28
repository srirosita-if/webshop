<?php
session_start();
include 'products.php';

$name = $_POST['name'];
$address = $_POST['address'];
$payment = $_POST['payment'];
$cart = $_SESSION['cart'];

$grand = 0;
?>
<!DOCTYPE html>
<html>
<head>
<title>Pesanan Berhasil</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="title">🎉 Pesanan Berhasil 🎉</h1>

<p>Terima kasih <b><?= $name ?></b> sudah belanja 💗</p>
<p>Pesanan akan dikirim ke:</p>
<p><b><?= $address ?></b></p>
<p>Metode Pembayaran: <b><?= $payment ?></b></p>

<h2>Detail Pesanan:</h2>

<table class="table">
<tr><th>Produk</th><th>Qty</th><th>Total</th></tr>

<?php foreach ($cart as $id => $qty): 
    $item = $products[$id];
    $total = $qty * $item['price'];
    $grand += $total;
?>
<tr>
<td><?= $item['name'] ?></td>
<td><?= $qty ?></td>
<td>Rp <?= number_format($total) ?></td>
</tr>
<?php endforeach; ?>
</table>

<h2>Total Tagihan: Rp <?= number_format($grand) ?></h2>

<a class="btn2" href="index.php">Belanja Lagi 💖</a>

<?php unset($_SESSION['cart']); ?>
</body>
</html>
