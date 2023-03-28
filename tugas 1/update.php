<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$nama =$_POST['nama'];
$nip =$_POST['nip'];
$noHp =$_POST['noHp'];
$email =$_POST['email'];


//update data ke database
mysqli_query($koneksi,"update pegawai set nama='$nama',nip='$nip',noHp='$noHp',email='$email' where nama'$nama'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>