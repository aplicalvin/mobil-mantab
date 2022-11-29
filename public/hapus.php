<?php 
require './func/function.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
        <script>
            alert('data berhasil dimusnahkan!');
            document.location.href = 'Admin-carimobil.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dimusanahkan!');
            document.location.href = 'Admin-carimobil.php';
        </script>
    ";
} 

?>