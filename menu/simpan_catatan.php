<?php

session_start();
$nik = $_SESSION['nik'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$format = "\n$nik|$nama_lengkap|$tanggal|$waktu|$lokasi|$jam|$lokasi|$suhu";
$file = fopen('../catatan.txt', 'a');
fwrite($file, $format);
fclose($file);

include '../koneksi/koneksi.php';
$sql = "INSERT INTO catatan(nik,tanggal,waktu,lokasi,suhu) VALUES ('$nik', '$tanggal','$waktu','$lokasi','$suhu')";
$query = mysqli_query($koneksi, $sql);

if($query){ ?>
    <script>
        alert("Data Catatan Sudah Tersimpan");
        window.location.assign("user.php");
    </script>
    <?php

}else{ ?>
    <script>
        alert("Data Catatan Tidak Tersimpan");
        window.location.assign("simpan_catatan.php");
    </script>
    <?php

}