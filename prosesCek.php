<?php
include "koneksi.php";

$userid = $_POST['userid'];

$qry=mysqli_query($con, "select * FROM voucher where userid='$userid'");
$cekQry=mysqli_num_rows($qry);
if ($cekQry > 0) {
	while ($data=mysqli_fetch_array($qry)){
		if ($data['status'] == "menunggu"){
			echo "<h3> Claim voucher anda sedang kami proses </h3>";
		} else if($data['status'] == "diterima"){
			echo "<h3> Claim voucher berhasil, mohon cek whatsApp anda :) </h3>";
		} else if($data['status'] == "ditolak"){
			echo "<h3> Mohon maaf, claim voucher anda ditolak. Mohon Periksa Kembali User ID anda saat melakukan Claim Voucher </h3>";		
		} else {
			echo "<h3> Mohon maaf, claim voucher anda ditolak. Mohon Periksa Kembali User ID anda saat melakukan Claim Voucher </h3>";			
		}
	}	
} else {
		echo "<h3> Anda belum melakukan Claim Voucher </h3>";					
}	
  	

?>
