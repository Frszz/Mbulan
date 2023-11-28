<?php
// Koneksi Database
    date_default_timezone_set('Asia/Jakarta');
    session_start();

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_mbulan';
    $con = mysqli_connect($host, $user, $pass, $db);

    mysqli_select_db($con, $db);

// Fungsi Query Read Data
    function query($query){
        global $con;
        $result = mysqli_query($con, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

// Fungsi Insert Data Pelanggan
    function insert_pelanggan($data_pelanggan){
        global $con;

        $nama_pelanggan = htmlspecialchars($data_pelanggan['nama_pelanggan']);
        $usia_pelanggan = htmlspecialchars($data_pelanggan['usia_pelanggan']);
        $tensi_pelanggan = htmlspecialchars($data_pelanggan['tensi_pelanggan']);
        $penyakit_pelanggan = htmlspecialchars($data_pelanggan['penyakit_pelanggan']);
        $obat_pelanggan = htmlspecialchars($data_pelanggan['obat_pelanggan']);
        $dosis_obat = htmlspecialchars($data_pelanggan['dosis_obat']);
        $tgl_konsultasi = htmlspecialchars($data_pelanggan['tgl_konsultasi']);

        $query = "INSERT INTO tbl_pelanggan VALUES
                ('', 
                '$nama_pelanggan', 
                '$usia_pelanggan', 
                '$tensi_pelanggan',
                '$penyakit_pelanggan',
                '$obat_pelanggan',
                '$dosis_obat',
                '$tgl_konsultasi'
                )
                ";
                mysqli_query($con, $query);

                return mysqli_affected_rows($con);
    }

// Fungsi Insert Data Obat
    function insert_obat($data_obat){
        global $con;

        $foto_obat = htmlspecialchars($data_obat['foto_obat']);
        $nama_obat = htmlspecialchars($data_obat['nama_obat']);
        $kode_obat = htmlspecialchars($data_obat['kode_obat']);
        $harga_obat = htmlspecialchars($data_obat['harga_obat']);
        $tgl_masuk = htmlspecialchars($data_obat['tgl_masuk']);
        $persediaan = htmlspecialchars($data_obat['persediaan']);
        $tgl_kadaluwarsa = htmlspecialchars($data_obat['tgl_kadaluwarsa']);

        $query = "INSERT INTO tbl_obat VALUES
                ('', 
                '$foto_obat', 
                '$nama_obat', 
                '$kode_obat',
                '$harga_obat',
                '$tgl_masuk',
                '$persediaan',
                '$tgl_kadaluwarsa'
                )
                ";
                mysqli_query($con, $query);

                return mysqli_affected_rows($con);
    }

// Fungsi Insert Data Aktivitas
    function insert_aktv($data_aktv){
        global $con;

        $tgl_aktv = htmlspecialchars($data_aktv['tgl_aktv']);
        $ket_aktv = htmlspecialchars($data_aktv['ket_aktv']);

        $query = "INSERT INTO tbl_aktv VALUES
                ('', 
                '$tgl_aktv', 
                '$ket_aktv'
                )
                ";
                mysqli_query($con, $query);

                return mysqli_affected_rows($con);
    }

// Fungsi Delete Data Pelanggan
    function delete_pelanggan($id_pelanggan){
        global $con;

        mysqli_query($con, "DELETE FROM tbl_pelanggan WHERE id_pelanggan = $id_pelanggan");

        return mysqli_affected_rows($con);
    }

// Fungsi Delete Data Obat
    function delete_obat($id_obat){
        global $con;

        mysqli_query($con, "DELETE FROM tbl_obat WHERE id_obat = $id_obat");

        return mysqli_affected_rows($con);
    }

//// Fungsi Delete Data Aktivitas
    function delete_aktv($id_aktv){
        global $con;

        mysqli_query($con, "DELETE FROM tbl_aktv WHERE id_aktv = $id_aktv");

        return mysqli_affected_rows($con);
    }

// Fungsi Update Data Pelanggan
    function update_pelanggan($data_pelanggan) {
        global $con;

        $id_pelanggan = $data_pelanggan['id_pelanggan'];
        $nama_pelanggan = htmlspecialchars($data_pelanggan['nama_pelanggan']);
        $usia_pelanggan = htmlspecialchars($data_pelanggan['usia_pelanggan']);
        $tensi_pelanggan = htmlspecialchars($data_pelanggan['tensi_pelanggan']);
        $penyakit_pelanggan = htmlspecialchars($data_pelanggan['penyakit_pelanggan']);
        $obat_pelanggan = htmlspecialchars($data_pelanggan['obat_pelanggan']);
        $dosis_obat = htmlspecialchars($data_pelanggan['dosis_obat']);
        $tgl_konsultasi = htmlspecialchars($data_pelanggan['tgl_konsultasi']);

        $query = "UPDATE tbl_pelanggan SET
                        nama_pelanggan = '$nama_pelanggan',
                        usia_pelanggan = '$usia_pelanggan',
                        tensi_pelanggan = '$tensi_pelanggan',
                        penyakit_pelanggan = '$penyakit_pelanggan',
                        obat_pelanggan= '$obat_pelanggan',
                        dosis_obat = '$dosis_obat',
                        tgl_konsultasi = '$tgl_konsultasi'

                        WHERE id_pelanggan = $id_pelanggan
                    ";
                mysqli_query($con, $query);

                return mysqli_affected_rows($con);
    }

// Fungsi Update Data Obat
    function update_obat($data_obat) {
        global $con;

        $id_obat = $data_obat['id_obat'];
        $foto_obat = htmlspecialchars($data_obat['foto_obat']);
        $nama_obat = htmlspecialchars($data_obat['nama_obat']);
        $kode_obat = htmlspecialchars($data_obat['kode_obat']);
        $harga_obat = htmlspecialchars($data_obat['harga_obat']);
        $tgl_masuk = htmlspecialchars($data_obat['tgl_masuk']);
        $persediaan = htmlspecialchars($data_obat['persediaan']);
        $tgl_kadaluwarsa = htmlspecialchars($data_obat['tgl_kadaluwarsa']);

        $query = "UPDATE tbl_obat SET
                        foto_obat = '$foto_obat',
                        nama_obat = '$nama_obat',
                        kode_obat = '$kode_obat',
                        harga_obat = '$harga_obat',
                        tgl_masuk = '$tgl_masuk',
                        persediaan = '$persediaan',
                        tgl_kadaluwarsa = '$tgl_kadaluwarsa'

                        WHERE id_obat = $id_obat
                    ";
                mysqli_query($con, $query);

                return mysqli_affected_rows($con);
    }

// Fungsi Update Data Aktivitas
    function update_aktv($data_aktv){
        global $con;

        $id_aktv = $data_aktv['id_aktv'];
        $tgl_aktv = htmlspecialchars($data_aktv['tgl_aktv']);
        $ket_aktv = htmlspecialchars($data_aktv['ket_aktv']);

        $query = "UPDATE tbl_aktv SET
                    tgl_aktv = '$tgl_aktv',
                    ket_aktv = '$ket_aktv'

                    WHERE id_aktv = $id_aktv
                ";
                mysqli_query($con, $query);

                return mysqli_affected_rows($con);
    }

?>