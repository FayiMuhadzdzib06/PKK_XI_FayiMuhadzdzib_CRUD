<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
for($x=1;$x<=10;$x++){
	echo $x;
	//membuat perulangan yang menampilkan angka satu sampai sepuluh sesuai dengan aturan yang sudah di buat pada kondisi di atas.
}
?>
<br>

<p>bilangan ganjil</p>
<?php
 
for($bil = 1; $bil <= 20; $bil++){
    if( ($bil % 2) == 1){
        echo "$bil <br>";
    }
}
 
?>
<br>
<p>Bilangan genap</p>
<?php
 
for($bil = 1; $bil <= 20; $bil++){
    if( ($bil % 2) == 0){
        echo "$bil <br>";
    }
}
 
?>
</body>[[]]
</html>