<?php
// Koneksi Database
require_once "../../../config/config.php";

$id_pelanggan = $_GET['id_pelanggan'];

if( delete_pelanggan($id_pelanggan) > 0 ) {
    echo "
    <script>
        alert('Data Dihapus');
        document.location.href = '../../pelanggan.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus');
        document.location.href = '../../pelanggan.php';
    </script>
    "; 
}

?>