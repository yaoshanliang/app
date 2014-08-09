<?php
require_once ('PHPFetion.php');
require_once('fetion_config.php');
$city_code = 101190401;

$content = get_weather($city_code);


echo '<h2>Recent weather has already been sent</h2>';
echo $content;
$fetion = new PHPFetion($fetion_me, $fetion_pw);
$fetion->send($fetion_me, $content);


function get_weather($city_code)
{
    $URL='http://www.weather.com.cn/weather/'.$city_code.'.shtml';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = trim(curl_exec($ch));
    curl_close($ch);

    $day_1 = trim('<!--今明后7d大包 begin-->');
    $day_2 = trim('<!--今明后7d大包 end-->');

    $str = explode($day_1,$output);
  
    $str = explode($day_2, $str[1]);
    $str = Html_to_Text($str[0]);
    
    return $str;
}
function Html_to_Text($str)
{
    $str = preg_replace("/<sty(.*)\/style>|<scr(.*)\/script>|<!--(.*)-->/isU","",$str);
    $alltext = "";
    $start = 1;
    for($i=0;$i<strlen($str);$i++)
    {
        if($start==0 && $str[$i]==">")
        {
            $start = 1;
        }
        else if($start==1)
        {
            if($str[$i]=="<")
            {
                $start = 0;
                $alltext .= " ";
            }
            else if(ord($str[$i])>31)
            {
                $alltext .= $str[$i];
            }
        }
    }
    $alltext = str_replace("　"," ",$alltext);
    $alltext = preg_replace("/&([^;&]*)(;|&)/","",$alltext);
    $alltext = preg_replace("/[ ]+/s"," ",$alltext);
    return $alltext;
}

?>