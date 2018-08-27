<?php
function getUser($con,$fbid){
	if (!isset($fbid) || !is_numeric($fbid)) {
		return 'invalid fb id';
	} else {
		$s = 'SELECT * FROM pengguna WHERE id_fb='.$fbid;
		$e = mysqli_query($con,$s);
		$n = mysqli_num_rows($e);
		if($n<=0){
			return 'fb id is not found';
		} else {
			$r=mysqli_fetch_assoc($e);
			return $r;
		}
	}
}
?>