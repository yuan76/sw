<?php
include "koneksi.php";

$userid = $_POST['userid'];
$nama = $_POST['nama'];
$nope = $_POST['nope'];
//echo $userid." ".$nama." ".$nope;

$qryId = mysqli_query($con, "select * from voucher where userid='$userid'");
$cekId=mysqli_num_rows($qryId);
if ($cekId <= 0) {
	$sql = "insert into voucher (id,userid,nama,nope,status,kode)
			values (NULL,'$userid','$nama','$nope','menunggu',NULL);";	
	$query=mysqli_query($con,$sql);
			if($query){
				echo "<script> alert('Claim voucher berhasil, permintaan anda sedang di proses');
				window.location='klaim.php'</script>";
			} else {
				echo "<script> alert('Claim voucher gagal, Mohon ulangi');
				window.location='klaim.php'</script>";
			}	
} else {
	echo "<script> alert('Mohon maaf, permintaan tidak boleh lebih dari satu kali');
				window.location='klaim.php'</script>";
}
	
		

?>
