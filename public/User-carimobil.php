<?php
//koneksi ke database
    require './func/function.php';
    $datamobil = query("SELECT * FROM datamobiluser");
//use LDAP Result;
if(isset($_GET['keyword'])) {
    $keyword= $_GET["keyword"];
    $datamobil = query("SELECT * FROM datamobiluser WHERE nama LIKE '%$keyword%'");
    if(count($datamobil)===0){
        echo "
        <script>
            alert('data tidak ditemukan!');
            document.location.href = 'User-carimobil.php';
        </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("components/metadata.php"); ?>

        <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MobilMantab - Mobil Listrik Berkualitas, Lebih Hemat, Ramah Lingkungan</title>
    <link rel="shortcut icon" href="assets/Favicon.png" type="image/x-icon" />
    <!-- css -->
    <link rel="stylesheet" href="css/output.css" />
    <link rel="stylesheet" href="css/suplement.css" />

    <!-- SwiperJS -->
    <link rel="stylesheet" href="swiperjs/swiper-bundle.min.css" />
</head>
<body>
    <!-- Memanggil Navbar -->
    <?php include("components/navbar.php"); ?>

    <div>
        <h1 class="font-bold text-2xl text-center">Cari Mobil Idaman Anda Disini</h1>
        <form action="" method="GET" class="flex   justify-center gap-4">
            <input name="keyword" type="text" placeholder="Search..." autocomplete="off" class="border-2 border-black rounded-lg" size="45"> 
            <button type="submit" name="submit" class="rounded-lg border-4 text border-red-500 bg-red-500 text-white px-2 py-1" >Search</button>
        </form>
    </div>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Warna</th>
            <th>Harga</td>
            <th>Aksi</td>
        </tr>
        <?php $i=1; ?>
        <?php foreach( $datamobil as $row) :?>
        <tr>
            <td><?= $i;?></td>
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