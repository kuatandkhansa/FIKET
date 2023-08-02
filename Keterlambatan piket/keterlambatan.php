<?php
include 'lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama                     =@$_POST['nama'];
    $kelas            =@$_POST['kelas'];
    $tanggal           =@$_POST['tanggal'];
    $jam                   =@$_POST['jam'];
    $keterangan                 =@$_POST['keterangan'];
    

    if (empty($nama)) {
        flash('error', 'Mohon Masukan nama Dengan Benar');
        } elseif (empty($kelas)) {
            flash('error1', 'Mohon Masukan kelas Lengkap Dengan Benar');
        } 
    
    $sql = "INSERT INTO p_piket VALUES
    ('$nama','$kelas','$tanggal','$jam','$keterlambatan')";

    $mysqli->query($sql) or die ($mysqli->error);
    header('location: v_keterlambatan.php');
        }
 $success = flash('success');
 $error = flash('error');
 $error1 = flash('error1');
    
$sql = "SELECT * FROM keterlambatan";
$dataKelas = $mysqli->query($sql) or die($mysqli->error);

include 'v_keterlambatan.php';

?>