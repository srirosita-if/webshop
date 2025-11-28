<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="title">💞 Checkout 💞</h1>

<form action="confirm_order.php" method="post" class="form">
    <div class="form-group">
        <label>Nama Penerima</label>
        <input type="text" name="name" required>
    </div>

    <div class="form-group">
        <label>Alamat Lengkap</label>
        <textarea name="address" required></textarea>
    </div>

    <label>Metode Pembayaran</label>
    <select name="payment">
        <option>Dana</option>
        <option>OVO</option>
        <option>Bank Transfer</option>
    </select>

    <button type="submit" class="btn">Bayar Sekarang 💕</button>
</form>

</body>
</html>
