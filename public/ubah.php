<?php 
// koneksi ke DBMS
require './func/function.php';

//ambil data di URL
$id = $_GET["id"];

//query data datamobil berdasarkan id
$datamobil = query("SELECT * FROM datamobil WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {

        //cek apakah data berhasil diubah atau tidak
        if (ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'Admin-carimobil.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah!');
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
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Data</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $datamobil["id"]; ?>">
        <ul>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required
                value="<?= $datamobil["gambar"]; ?>">
            </li>
             <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required
                value="<?= $datamobil["nama"]; ?>">
            </li>
             <li>
                <label for="jenis">Jenis :</label>
                <input type="text" name="jenis" id="jenis" required
                value="<?= $datamobil["jenis"]; ?>">
            </li>
             <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required
                value="<?= $datamobil["harga"]; ?>">
            </li>
             <li>
                <label for="warna">Warna :</label>
                <input type="text" name="warna" id="warna" required
                value="<?= $datamobil["warna"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">
                    Ubah data!!!
                </button>
            </li>
        </ul>

    </form>
</body>
</html>