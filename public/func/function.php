<?php

//koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'mobilmantab');

    function query($query) {
        global $conn;
        $result = mysqli_query ($conn, $query);
        $rows = []; 
        while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    

    function tambah($data) {
        global $conn;

        $gambar= htmlspecialchars($data["gambar"]);
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $harga = htmlspecialchars($data["harga"]);
        $warna = htmlspecialchars($data["warna"]);

        $query = "INSERT INTO datamobil VALUES ('', '$gambar', '$nama', '$jenis', '$harga', '$warna')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }



    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM datamobil WHERE id = $id");
        return mysqli_affected_rows($conn);
    }



    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $gambar= htmlspecialchars($data["gambar"]);
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $harga = htmlspecialchars($data["harga"]);
        $warna = htmlspecialchars($data["warna"]);

        $query = "UPDATE datamobil SET 
                    gambar = '$gambar',
                    nama = '$nama',
                    jenis = '$jenis',
                    harga = '$harga',
                    warna = '$warna'
                    WHERE id = $id 
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>