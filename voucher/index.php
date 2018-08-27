<?php session_start();
include "../koneksi.php"; 
$kode=$_GET['kode'];
function getUser($con,$kode){
	if (!isset($kode)) {
		return 'URL kurang lengkap';
	} else {
		$s = "SELECT * FROM voucher WHERE kode='$kode'";
		$e = mysqli_query($con,$s);
		$n = mysqli_num_rows($e);
		if($n<=0){
			return 'kode tidak tersedia';
		} else {
			$r=mysqli_fetch_assoc($e);
			return $r;
		}
	}
}
$user = getUser($con,$kode);

?>


<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="../images/logo2.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>SriwijayaWisata | Download Voucher</title>

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	    <meta name="viewport" content="width=device-width" />

	    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	    <link href="assets/bootstrap-tour/css/bootstrap-tour.min.css" rel="stylesheet">
	    <link href="home/css/ct-paper.css" rel="stylesheet"/>
	    <link href="home/css/demo.css" rel="stylesheet" />
	    <link href="home/css/examples.css" rel="stylesheet" />		
		<link href="assets/css/style.css" rel="stylesheet">	


			<script src="bootstrap3/js/jquery.min.js"></script>
	    <script src="bootstrap3/js/bootstrap.min.js"></script>
	    <script src="assets/bootstrap-tour/js/bootstrap-tour.min.js"></script>


	    <!--     Fonts and icons     -->
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	

		<style media="screen">
			
			.imageOption:hover {
				opacity: 1;
			}


			/* .container .btn { */
			.divCanvas .downloadBtn {
			  position: absolute;
			  top: 100%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			  -ms-transform: translate(-50%, -50%);
			  background-color: #555;
			  color: white;
			  font-size: 16px;
			  padding: 12px 24px;
			  border: none;
			  cursor: pointer;
			  border-radius: 5px;
				opacity: 0.5;
			}
			.downloadBtn:hover {
				opacity: 1;
			}
		</style>
	</head>

	<body class="search">
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WV7W67N" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
	    <nav class="navbar navbar-relative navbar-ct-transparent navbar-burger" role="navigation-demo">
	      <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          
	          <a class="navbar-brand" href="javascript:;"><?php echo "Download Voucher"; ?> </a>
	        </div>

	        </div><!-- /.container-->
	    </nav>

	    <div class="wrapper">
	        <div class="main">
	            <div class="section section-white section-search">
	                <div class="container">
										<div class="row">									

													<!-- preview result image
													<div id="exTab1" class="containerx"> -->
														<div id="imageDiv" class="col-xs-12 text-center">
															<p>
															 NB : Untuk melihat voucher, silahkan klik lihat. dan jika ingin mendownload voucher, silahkan klik download
															 </p>
															
														<div class="tab-content xclearfix">
															
															<!-- promote content -->
														  <div class="tab-pane active" id="1a">
														 
																<br>
																<!-- <label>Promote Picture</label> -->

																	<!-- preview options -->
																	<div id="imageOptions" class="form-group">
																		<?php
																			
																				// pr($x);
																					echo'<button onclick="promoteOptionClick(this);"
																						src="img/voucher.png"																					
																						textX="340"
																						textY="220"
																						class="imageOption btn btn-info"
																						data-design="0"
																					> Lihat </button>';
																					// class="imageOption '.($i==0?'active':'').'"
																			
																		 ?>
																	</div>

																	<div class="form-group">
																		<div>
																			<img id="promotePreview" width="450" src="img/no_preview.png" alt="" />
																		</div>

																		<div class="divCanvas">
																			<a id="promoteDownload" style="display:none;" href="#" class="downloadBtn">Download</a>
																			<canvas id="promoteCanvas"></canvas>
																		</div>
																	</div>

															</div>


														</div>
												  </div>								

	                <!--</div>-->
		            </div>
	        </div>
	    </div>

				

	</body>

	<script>
		$(document).ready(function(){
			console.log('ready');
		});
// ---------
		function downloadCanvas(link, canvasId, filename) {
		    link.href = document.getElementById(canvasId).toDataURL();
		    link.download = filename;
		}
// ---------
		var pcanvas= document.getElementById('promoteCanvas');
		var pcontext= pcanvas.getContext('2d');
		var pimgs=[];
		var pimagesOK=0;
		var pimageURLs	= [];

		var pimgUrl1 = '';
		var pimgUrl2 = '';
		var pe,ptipe,pprofile_x,pprofile_y,ptext_x,ptext_y;
		var pObjProp=[];

		document.getElementById('promoteDownload').addEventListener('click', function() {
		    downloadCanvas(this, 'promoteCanvas',  'voucher_SriwijayaWisata.png');
		}, false);

		function promoteOptionClick(el) {
			pimageURLs=[];
			pObjProp=[];
			console.log('promoteOptionClick');
			$(".imageOption.active").removeClass("active");
			$(el).addClass("active");

			pe = el;
			src = $(el).attr('src');
			pprofile_x = $(el).attr('profileX');
			pprofile_y	= $(el).attr('profileY');
			profile_w = $(el).attr('profileW');
			profile_h = $(el).attr('profileH');
			ptext_x = $(el).attr('textX');
			ptext_y = $(el).attr('textY');
			pObjProp.push(pprofile_x);
			pObjProp.push(pprofile_y);
			pObjProp.push(profile_w);
			pObjProp.push(profile_h);
			pObjProp.push(ptext_x);
			pObjProp.push(ptext_y);

			var profUrl = 'img/foto.jpg';
			var templUrl = src ;
			pimageURLs.push(templUrl); // layer 1 (bottom) : promote
			pimageURLs.push(profUrl); // layer 2 (top) : profile
			promoteLoadImage(promoteObjProp);
		}

		function promoteObjProp() {
			console.log('promoteObjProp');
			console.log(pObjProp);
			pcanvas.width = pimgs[0].naturalWidth;
			pcanvas.height = pimgs[0].naturalHeight;

		 	var imgX = pObjProp[0];
		 	var imgY = pObjProp[1];
		 	var imgW = pObjProp[2];
		 	var imgH = pObjProp[3];
		 	var txtX = pObjProp[4];
		 	var txtY = pObjProp[5];
			pcontext.drawImage(pimgs[0],0,0);
			pcontext.drawImage(pimgs[1],imgX,imgY,imgW,imgH);
			pcontext.fillText("<?php echo $user['nama'];?>", txtX, txtY); // 400
			pcontext.fillText("<?php echo $user['nope'];?>", txtX,parseFloat(txtY)+20); // 420
			pcontext.fillText("<?php echo $user['kode'];?>", txtX,parseFloat(txtY)+40); //440
		}

		function promoteLoadImage(promoteObjPropx) {
			console.log('promoteLoadImage');
			console.log('-- sebelum hapus ');
				console.log(pimgs);
				console.log(pimageURLs);
			pimgs=[];
			console.log('-- setelah hapus ');
				console.log(pimgs);
				console.log(pimageURLs);

			$('#promotePreview').attr('style','display:none');
			// context.clearRect(0, 0, canvas.width, canvas.height);

			console.log(pimageURLs.length);
			for (var i=0; i<pimageURLs.length; i++) { // iterate through the pimageURLs array and create new images for each
				var img = new Image(); // create a new image an push it into the pimgs[] array
				pimgs.push(img);

				img.crossOrigin = "anonymous";
				img.onload = function(){// when this image loads, call this img.onload
					pimagesOK++; // this img loaded, increment the image counter
					if (pimagesOK>=pimageURLs.length ) { // if we've loaded all images, call the callback
						promoteObjPropx();
						$('#promoteDownload').removeAttr('style');
					}
				};

				img.onerror=function(){ // notify if there's an error
					alert("failed load profile");
				}

				img.src = pimageURLs[i]; // set img properties
			}
		}

		function promoteResetForm () {
			$('#promoteCanvas').html('');
			$('#promotePreview').removeAttr('style');

			pimgs=[];
			pimagesOK=0;
			pimageURLs	= [];
			pimgUrl1 = '';
			pimgUrl2 = '';
			pe,ptipe='',pprofile_x='',pprofile_y='';
			pObjProp=[];
		}

	</script>

	<script src="home/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="home/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>

	<!--  Plugins -->
	<script src="home/js/ct-paper-checkbox.js"></script>
	<script src="home/js/ct-paper-radio.js"></script>
	<script src="home/js/ct-paper-bootstrapswitch.js"></script>

	<!--  for fileupload -->
	<script src="home/js/jasny-bootstrap.min.js"></script>

	<script src="home/js/ct-paper.js"></script>
</html>
