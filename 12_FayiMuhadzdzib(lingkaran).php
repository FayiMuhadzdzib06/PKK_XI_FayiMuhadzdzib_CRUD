<html>
<head>
<title>Luas Lingkaran</title>
</head>
<body>
    <h1>Hitung Luas Lingkaran</h1>
    <h2>Isi Data :</h2>
    <form action:"./" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
        <td>Jari-jari</td>
        <td>:</td>
        <td><input type="text" name="jari" required></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Hitung"></td>
    </tr>
    </table>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $jari = $_POST['jari'];
        $phie = 22/7;

        // menghitung luas lingkaran
        $luas_lingkaran = $phie*($jari*$jari);

        echo "Diketahui :<br />";
        echo "Jari-jari = $jari<br />";
        echo "Phie = $phie<br />";
        echo "Maka Luas Lingkaran adalah [$phie x $jari x $jari] = $luas_lingkaran";
    }
    ?>
</body>
</html>

