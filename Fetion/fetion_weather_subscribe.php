First, you should be my Fetion friend
<?php

$city_code = isset($_GET['city_code'])?$_GET['city_code']:'101010100';
?>



<div class="info">
<form target = "fetion_weather_subscribe"  id = "send_to_user_form" method = "post" action = "../content/templates/iat/app/Fetion/fetion_weather_subscribe_action.php" >

	<div>
		<select id="s_province" name="s_province"></select>&nbsp;&nbsp;
	    <select id="s_city" name="s_city" ></select>&nbsp;&nbsp;
	    <select id="s_county" name="s_county"></select>
	  
	  
    </div>
    <div id="show"></div>
    <input type="text" name="telephone">
    <input type = "submit" value = "Subscribe">
</div>


</br>
<iframe  name = "fetion_weather_subscribe" width="600" frameborder="0"></iframe><!--让表单提交，目标刷新页是iframe-->
<script type="text/javascript">
	function send_to_user()
	{
		var URL = "../content/templates/iat/app/Fetion/fetion_weather_subscribe_action.php";
		$.ajax(
		{
			url:URL,
			success:function(data)
			{
				
				//$("#show_map_area").append(data);
				//$("#show_map_area").append("Successfully send··</br>");
			},
			error:function()
			{
				$("#show_area").html("Sorry,error!");
			}
		});

	}
</script>





<?php
$city_codes = isset($_GET['city_code'])?$_GET['city_code']:'101010100';

?>

	<?php
	function get_provices()
	{
		require 'fetion_weather_city_codes.php';
		
		$provices = array();
		foreach($city_codes as $key=>$arr)
		{
			$provices[$key] = $arr[0];
		}		
		return $provices;
	}

	
	function get_cities( $provice_id )
	{
		require 'fetion_weather_city_codes.php';

		$cities = array();
		foreach($city_codes[$provice_id] as $key=>$val)
		{
			if(is_array($val))
			{
				$cities[$key] = $val[0];
			}
		}
		return $cities;
	}

?>

<body>

	<div class="select_city_form">
	
		<!-- <form id="form_select_city" action="./" method="get"> -->
		选择城市：
		
		<?php
		$province_id = isset($_GET['province_id'])?$_GET['province_id']:'';
		$city_id = isset($_GET['city_id'])?$_GET['city_id']:'';
		$district_id = isset($_GET['district_id'])?$_GET['district_id']:'';
		?>
		<select name="province_id" id="province_id">
			<option value=""> - 请选择省或直辖市 - </option>
			<?php
			$provices =get_provices();
			foreach($provices as $key=>$val)
			{
				//print_r($provices);
				?>
				<option value="<?php echo $key; ?>"<?php
					if($province_id==$key) echo ' selected="selected"';
				?>><?php echo $val; ?></option>
				<?php
			}
			?>
		</select>
		
		<select name="city_id" id="city_id"<?php if(!$province_id) echo ' style="display:none;"'; ?>>
			<option value=""> - 请选择市或区 - </option>
			<?php
			if($province_id)
			{
				$cities = get_cities( $province_id );
				print_r($cities);
				foreach($cities as $key=>$val)
				{
					?>
					<option value="<?php echo $key; ?>"<?php
						if($city_id==$key) echo ' selected="selected"';
					?>><?php echo $val; ?></option>
					<?php
				}
			}
			?>
		</select>
		
		<select name="district_id" id="district_id"<?php if($city_id=='' || strlen($city_id)==4) echo ' style="display:none;"'; ?>>
			<option value=""> - 请选择县或区 - </option>
			<?php
			if($province_id && $city_id)
			{
				$districts = get_districts( $province_id, $city_id );
				foreach($districts as $key=>$val)
				{
					?>
					<option value="<?php echo $key; ?>"<?php
						if($district_id==$key) echo ' selected="selected"';
					?>><?php echo $val; ?></option>
					<?php
				}
			}
			?>
		</select>
		
		<input type="hidden" name="city_code" id="city_code" value="<?php echo $city_code; ?>">
		<!-- </form> -->
	</div>
	



	
	
</div>

</body>

<script>

$(function(){

		
	var $province_id = $("#province_id");
	var $city_id = $("#city_id");
	var $district_id = $("#district_id");
	
	var eProvince_id = document.getElementById("province_id");
	var eCity_id = document.getElementById("city_id");
	var eDistrict_id = document.getElementById("district_id");

	$province_id.change(function(){
		
		eCity_id.options.length=1;
		eDistrict_id.options.length=1;
		
		if($(this).val()!="")
		{
			$city_id.show();
			
			$.ajax({
				type: "GET",
				url: "../content/templates/iat/app/Fetion/fetion_get_city.php?type=cities&province_id="+$(this).val(),
				dataType: "json",
				success: function(json)
				{
					for(var x in json)
					{
						alert(x);
						eCity_id.options.add(new Option(json[x],x));
					}
				}				
			});
			
			$district_id.hide();
		}
		else
		{
			$city_id.hide();			
			$district_id.hide();
		}
	});
	
	$city_id.change(function(){
		eDistrict_id.options.length=1;
		
		if($(this).val()!="")
		{
			if($(this).val().length==2)
			{
				$district_id.show();
				$.ajax({
					type: "GET",
					url: "../content/templates/iat/app/Fetion/fetion_get_city.php?type=districts&province_id="+$province_id.val()+"&city_id="+$(this).val(),
					dataType: "json",
					success: function(json)
					{
						for(var x in json)
						{
							eDistrict_id.options.add(new Option(json[x],x));
						}
					}				
				});
			}
			else
			{
				$("#city_code").val( $province_id.val()+$city_id.val() );
				document.getElementById("form_select_city").submit();
			}
		}
		else
		{
			$district_id.hide();
		}
	});
	
	$district_id.change(function(){
		if($(this).val()!="")
		{
			$("#city_code").val( $province_id.val()+$city_id.val()+$district_id.val() );
			document.getElementById("form_select_city").submit();
		}
	});
});
</script>
