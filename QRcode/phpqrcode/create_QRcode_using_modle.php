<?php

    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    $PNG_WEB_DIR = './QRcode/phpqrcode/temp/';
    $filename = "";
    include "qrlib.php"; 
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 
    
        
        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty!!!');
            

        $filename = 'temp/qrcode_'.time().'.png';
        //echo $filename;
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
        QRcode::png('iat.net.cn', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }   
    echo "<h5>here is your QRcode</h5> ";
    echo '<img src="'.$filename.'" />'; 

?>