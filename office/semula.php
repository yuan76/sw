<?php
include '../koneksi.php';
$page=$_GET['page'];
$userid=$_GET['id'];

$sql = "update voucher set status='menunggu',kode=NULL where userid='$userid'";
$query=mysqli_query($con,$sql);
if($query){
	echo "<script> alert('Berhasil dikembalikan seperti semula');
	window.location='?page=riwayat';</script>";
} else {
	echo "<script> alert('Gagal dikembalikan seperti semula');
	window.location='?page=riwayat';</script>";
}
?>
