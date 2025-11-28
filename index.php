<?php session_start(); ?>
<?php include 'products.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Lucu Pink</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="title">🎀 Pink Cute Shop 🎀</h1>

<div class="container">
<?php foreach($products as $id => $p): ?>
    <div class="card">
        <h3><?= $p['name'] ?></h3>
        <p>Rp <?= number_format($p['price']) ?></p>
        <a href="cart_action.php?action=add&id=<?= $id ?>" class="btn" onclick="added()">Tambah 💗</a>
    </div>
<?php endforeach; ?>
</div>

<a href="cart.php" class="cart-btn">🛒 Lihat Keranjang</a>

<script src="script.js"></script>
</body>
</html>
