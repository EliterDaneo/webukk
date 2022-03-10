<?php 
// koneksi database
include '../koneksi/koneksi.php';

// menangkap data yang di kirim dari form
$id_catatan     = $_POST['id_catatan'];
$nik            = $_POST['nik'];
$tanggal        = $_POST['tanggal'];
$waktu          = $_POST['waktu'];
$lokasi         = $_POST['lokasi'];
$suhu           = $_POST['suhu'];

$format     = "\n$nik|$nama_lengkap|$tanggal|$waktu|$lokasi|$suhu";
$file       = fopen('../catatan.txt', 'a');
fwrite($file, $format);
fclose($file);

// update data ke database
mysqli_query($koneksi,"UPDATE catatan SET nik='$nik' tanggal='$tanggal', waktu='$waktu', lokasi='$lokasi', suhu='$suhu' where id_catatan='$id_catatan'");

// mengalihkan halaman kembali ke index.php
header("location:rekab_catatan.php");

?>