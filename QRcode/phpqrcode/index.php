<?php 
echo "<h3>QRcode based on offline library</h3></br>";
	$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
	$PNG_WEB_DIR = './QRcode/phpqrcode/temp/';

	include "qrlib.php";    
	
	if (!file_exists($PNG_TEMP_DIR))
	{
		@mkdir($PNG_TEMP_DIR,0777);
	}
	
	
	$filename = $PNG_TEMP_DIR.'test.png';
	$errorCorrectionLevel = 'H';
	$matrixPointSize = 10;
   
	echo '<hr/><form target = "create_QRcode" method="post" action = "./QRcode/phpqrcode/create_QRcode_using_modle.php">
		Data:&nbsp;<input name="data" value="'.(isset($_REQUEST['data'])?htmlspecialchars($_REQUEST['data']):'').'" />&nbsp;
		ECC:&nbsp;<select name="level">
			<option value="L"'.(($errorCorrectionLevel=='L')?' selected':'').'>L - smallest</option>
			<option value="M"'.(($errorCorrectionLevel=='M')?' selected':'').'>M</option>
			<option value="Q"'.(($errorCorrectionLevel=='Q')?' selected':'').'>Q</option>
			<option value="H"'.(($errorCorrectionLevel=='H')?' selected':'').'>H - best</option>
		</select>&nbsp;
		Size:&nbsp;<select name="size">';
		
	for($i=1;$i<=10;$i++)
		echo '<option value="'.$i.'"'.(($matrixPointSize==$i)?' selected':'').'>'.$i.'</option>';
		
	echo '</select>&nbsp&nbsp&nbsp&nbsp;
		<input type="submit" value="<==CREATE==>"></form><hr/>';
		
?>
<iframe name = "create_QRcode" frameborder="0"  scrolling="no" width="500px" height="500px">

</iframe>
