
<?php
    include 'lib/helper.php';

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'p_piket';

    $mysqli = mysqli_connect($host,$user,$pass,$db)or die ('Tidak dapat koneksi ke database');
    ?>