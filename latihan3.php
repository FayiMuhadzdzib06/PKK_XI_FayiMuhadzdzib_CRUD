<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 ( POST )</title>
</head>
<body>
    <?php if (isset($_POST["submit"])) : ?>
        <h1> Halo, Selamat Datang <?= $_POST["Nama"];?></h1>
    <?php endif; ?>

    <!-- form digunakan dengan metode post -->
    <form action="" method="post">
        Masukan nama :
        <input type="text" name="Nama">
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>