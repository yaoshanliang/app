<?php
ini_set('display_errors', 'on');
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
$PNG_WEB_DIR = 'temp/';

include "qrlib.php";	// QRcode lib

$data = 'demo qrcode'; // data
$ecc = 'H'; // L-smallest, M, Q, H-best
$size = 10; // 1-50

$filename = $PNG_TEMP_DIR.'qrcode_'.time().'.png';
QRcode::png($data, $filename, $ecc, $size, 2);
chmod($filename, 0777);
echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';
?> 