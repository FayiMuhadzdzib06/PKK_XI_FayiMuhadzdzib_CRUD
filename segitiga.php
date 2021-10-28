<html>
<head>
    <title>Luas Segitiga</title>
</head>
<body>
    <h1>Hitung Luas Segitiga</h1>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required></td>
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
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        // menghitung luas segitiga
        $luas_segitiga = 1/2 * $alas * $tinggi;

        echo "Diketahui :<br />";
        echo "Alas = $alas<br />";
        echo "Tinggi = $tinggi<br />";
        echo "Maka Luas Segitiga Adalah 1/2 ($alas x $tinggi) = $luas_segitiga";
    }
    ?>
</body>
</html>