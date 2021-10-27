<?php 
// koneksikan ke  database

$koneksi = mysqli_connect("localhost", "root", "", "pkk");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($sws = mysqli_fetch_assoc($result)){
        $rows[] = $sws;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    //ambil data dari form ( input )
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gamabar = htmlspecialchars($data["gamabar"]);


    //upload gambar
    $gambar = upload();
    if (!$gambar){
        return false;
    }

    // query insert data
    $query = "INSERT INTO siswa
    VALUES (id, '$nim', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ($error === 4){
        echo "<script>
        alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['JPG', 'jpeg', 'png', 'jpg', 'PNG', 'JPEG'];
    $ekstensiGambar = explode('.', $nameFile);
    // fungsi explode itu string menjadi array , kalau nama
    // filenya fayi.jpg itu menjadi ['fayi','jpg']
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar');
            </script>";
    }

    //cek jika filenya ukurannya terlalu besar

}


function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    $query = "SELECT * FROM siswa
                WHERE
                nim LIKE '%keyword%' OR
                nama LIKE '%keyword%' OR
                email LIKE '%keyword%' OR
                jurusan LIKE '%keyword%' 
            ";
    return query($query);
}
?>