<?php 
// koneksi ke DBMS
require './func/function.php';

// cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {

        //cek apakah data berhasil ditambahkan atau tidak
        if (tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'Admin-carimobil.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'Admin-carimobil.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
             <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
             <li>
                <label for="jenis">Jenis :</label>
                <input type="text" name="jenis" id="jenis" required>
            </li>
             <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required>
            </li>
             <li>
                <label for="warna">Warna :</label>
                <input type="text" name="warna" id="warna" required>
            </li>
            <li>
                <button type="submit" name="submit">
                    Tambah data!!!
                </button>
            </li>
        </ul>

    </form>
</body>
</html>