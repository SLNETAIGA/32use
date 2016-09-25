<?php
public function code2ihe( string $code ){
$code = str_split($code);
	$ys = $xs = count($code)/2;
	$img = imagecreatetruecolor($xs, $ys);
	foreach(range(0, $ys) as $ya){
   $na = $ya;
		$xa=0;
		while($xa<=$xs){
			$cld = imagecolorallocate($img, $xa, $code[$na], $ya);
			imagesetpixel($img, $xa, $ya, $cld);
			$xa++;
    $na++;
		}
	}
	return $img;
	}


function ihe2code( resource $img ){
		$res = array();
		foreach( range(0, imagesy($img)) as $yy){

			foreach( range(0, imagesx($img)) as $xx){
				$col_1 = _BR_.imagecolorat($img, $xx, $yy);
				$res .= chr( ($col_1 >> 8) & 0xFF /6);
			}
		}
		return $res;
	}

?>