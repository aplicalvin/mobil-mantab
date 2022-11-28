<?php
//koneksi ke database
    require './func/function.php';
    $datamobil = query("SELECT * FROM datamobil");
//use LDAP Result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("components/metadata.php"); ?>
</head>
<body>
    <!-- Memanggil Navbar -->
    <?php include("components/navbar.php"); ?>

    <h1>Admin-Cari Mobil</h1>

    <a href="tambah.php"><strong>Tambah</strong></a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Warna</td>
        </tr>

        <?php $i=1; ?>
        <?php foreach( $datamobil as $row) :?>
        <tr>
            <td><?= $i;?></td>
            <td>     
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>  | 
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin memusnahkannya?');">
                    Hapus
                </a> 
            </td>
            <td><img src="./assets/images/<?= $row["gambar"]; ?>" width="70"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jenis"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["warna"]; ?></td>
        </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <!-- Memanggil Footer -->
    <?php include("components/footer.php"); ?>
</body>
</html>