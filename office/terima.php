<?php
include '../koneksi.php';
$page=$_GET['page'];
$userid=$_GET['id'];

$qryAmbil = mysqli_query($con, "select * from voucher where userid='$userid'");
while ($ambilData = mysqli_fetch_array($qryAmbil)){
	$nope=$ambilData['nope'];	
}
$nope="62".substr($nope,1);

function createKode($length){
	$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for($i = 0; $i < $length; $i++) {
		$pos = rand(0, strlen($data)-1);
		$string .= $data{$pos};
	}
	return $string;
}
$kodeBaru=createKode(6);

$qryCek = mysqli_query($con, "select * from voucher where kode='$kodeBaru' and userid='$userid'");
$cek=mysqli_num_rows($qryCek);
if ($cek <= 0) {
	$sql = mysqli_query($con, "update voucher set status='diterima',kode='$kodeBaru' where userid='$userid'");
	//$a="https://api.whatsapp.com/send?phone=$nope&text=Kami%20dari%20SriwijayaWisata%2E%20Selamat%20claim%20voucher%20anda%20berhasil%2C%20silahkan%20klik%20localhost%3A81%2Fsriwijayawisata%2Fvoucher%2F%3Fkode%3D$kodeBaru";
	$a="https://api.whatsapp.com/send?phone=$nope&text=Kami%20dari%20SriwijayaWisata%2E%20Selamat%20claim%20voucher%20anda%20berhasil%2C%20berikut%20ini%20kode%20voucher%20anda%20$kodeBaru";
}
	
?>
<html>
<head>
	<meta http-equiv="refresh" content="1;url=<?php echo $a; ?>" />
</head>
<body>
<div id="page-wrapper">

</div>
</body>
</html>
