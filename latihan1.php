<?php
// $GET data ini terambil dengan cara GET

$siswa = [
    [
        "Nama" => "Fayi Muhadzdzib",
        "Umur" => "15",
        "Hobi" => "Game dan Menggambar"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Siswa</h1>

    <u1>
        <?php foreach ($siswa as $sws): ?>
            <ul>
                <li><a href="latihan2.php?Nama=<?= $sws["Nama"]; ?>
            &Umur=<?= $sws ["Umur"];?>
            &Hobi=<?= $sws ["Hobi"];?>
            "><?= $sws["Nama"]; ?></li>
                </a>
            </ul>
        <?php endforeach; ?>
    </u1>

</body>

</html>