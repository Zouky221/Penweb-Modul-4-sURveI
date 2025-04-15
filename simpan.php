<?php
include 'db.php';
$nama = $_POST['nama'];
$pilihan = $_POST['pilihan'];

$sql = "INSERT INTO survei (nama, pilihan) VALUES ('$nama', '$pilihan')";
$conn->query($sql);
header("Location: grafik.php");
?>
