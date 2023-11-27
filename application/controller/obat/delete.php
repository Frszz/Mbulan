<?php
// Koneksi Database
require_once "../../../config/config.php";

$id_obat = $_GET['id_obat'];

if( delete_obat($id_obat) > 0 ) {
    echo "
    <script>
        alert('Data Dihapus');
        document.location.href = '../../obat.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus');
        document.location.href = '../../obat.php';
    </script>
    "; 
}

?>