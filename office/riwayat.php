
<div id="page-wrapper">
    <section class="content-header">
      <h1>
        List Claim Voucher
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <?php
        include "../koneksi.php";
        error_reporting(0);

        $qry = mysqli_query($con,"select * from voucher where status='diterima' or status='ditolak' order by nama asc");
        echo "<div class='table-responsive'>
              <div class='col-xs-10'>
              <table class='table table-striped'>
              <thead class='list'> <tr> <td> UserID </td> <td> Nama </td> <td> Nomor HP/WA </td> <td> Action </td> </tr> </thead> <tbody>";
        while ($data=mysqli_fetch_array($qry)){
          echo "<tr> <td> ".$data['userid']."</td> <td>".$data['nama']."</td> <td>".$data['nope']."</td> <td> <a href='index.php?page=semula&id=$data[userid]'> <button class='btn btn-info'> Kembalikan </button> </a> </td> </tr>";
        }
        echo "</tbody> </table> </div> </div>";
        ?>
    </section>
</div>	
