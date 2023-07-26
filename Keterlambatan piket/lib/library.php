
<?php
    include 'lib/helper.php';

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'p_piket';

    $mysqli = mysqli_connect($host,$user,$pass,$db)or die ('Tidak dapat koneksi ke database');
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }
    
    // Query untuk mengambil data siswa dari tabel
    $sql = "SELECT * FROM keterlambatan";
    $keterlambatan = $koneksi->query($sql);
    ?>
    
    ?>