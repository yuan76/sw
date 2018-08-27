<?php
include "../koneksi.php";
$Qry1 = mysqli_query($con,"select count(id) from voucher where status='menunggu'");
$data1 = mysqli_fetch_row($Qry1);
$Qry2 = mysqli_query($con,"select count(id) from voucher where status='diterima'");
$data2 = mysqli_fetch_row($Qry2);
$Qry3 = mysqli_query($con,"select count(id) from voucher where status='ditolak'");
$data3 = mysqli_fetch_row($Qry3);

?>
<br> <br>
<section class="content-header">
  <h1>
    Halaman Utama
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-4 col-xs-6">
      <div class="small-box" style="background-color:#48c5a3; color:#FFFFFF">
        <div class="inner" style="text-align:center">
          <h3>
            <?php if (isset($data1[0])) {
              echo $data1[0];
            } else {
              echo "0";
            }
            ?>
			<sup style="font-size: 18px"> Orang</sup>
          </h3>
        </div>
        <div class="small-box-footer">
          Total Claim Voucher Menunggu
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <div class="small-box" style="background-color:#af9c8b; color:#FFFFFF">
        <div class="inner" style="text-align:center">
          <h3>
		     <?php if (isset($data2[0])) {
              echo $data2[0];
            } else {
              echo "0";
            }
            ?>
			<sup style="font-size: 18px"> Orang</sup>
		  </h3>
        </div>
        <div class="small-box-footer">
          Total Claim Voucher Diterima
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-xs-6">
      <div class="small-box" style="background-color:#4d80b4; color:#FFFFFF">
        <div class="inner" style="text-align:center">
          <h3>
            <?php if (isset($data3[0])) {
              echo $data3[0];
            } else {
              echo "0";
            }
            ?>
			<sup style="font-size: 18px"> Orang</sup>
          </h3>
        </div>
        <div class="small-box-footer">
          Total Claim Voucher Ditolak
        </div>
      </div>
    </div>
    
  </div>
</section>
