<?php
include 'fetion_weather_subscribe.php';


$reponse = array();

$type = $_GET['type'];
if($type=='provices')
{
	$reponse = get_provices();
}
else if($type=='cities')
{
	$province_id = $_GET['province_id'];
	$reponse = get_cities( $province_id );
}
else if($type=='districts')
{
	$province_id = $_GET['province_id'];
	$city_id = $_GET['city_id'];
	$reponse = get_districts( $province_id, $city_id );
}

echo json_encode( (object)$reponse );

?>
