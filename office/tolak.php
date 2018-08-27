<?php
include '../koneksi.php';
$page=$_GET['page'];
$userid=$_GET['id'];

$sql = "update voucher set status='ditolak' where userid='$userid'";
$query=mysqli_query($con,$sql);
if($query){
	echo "<script> alert('Claim Berhasil Ditolak');
	window.location='?page=halClaim';</script>";
} else {
	echo "<script> alert('Claim Gagal Ditolak');
	window.location='?page=halClaim';</script>";
}
?>
