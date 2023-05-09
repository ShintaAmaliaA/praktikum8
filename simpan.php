<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$nim			=$POST['nim']
$nama			=$POST['nama']
$jurusan		=$POST['jurusan']
$jenis_kelamin  =$POST['jenis_kelamin']
$alamat		 	=$POST['alamt']
//query SQL untuk insert data
$query="INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', alamat='$alamat'";
mysqli_query($koneksi, $query);
//mangalihkan ke halaman index.php
header("location:index.php");
?>