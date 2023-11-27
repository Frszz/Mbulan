<?php
// Koneksi Database
require_once "../../../config/config.php";

$id_aktv = $_GET['id_aktv'];

if( delete_aktv($id_aktv) > 0 ) {
    echo "
    <script>
        alert('Data Dihapus');
        document.location.href = '../../dashboard.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus');
        document.location.href = '../../dashboard.php';
    </script>
    "; 
}

?>