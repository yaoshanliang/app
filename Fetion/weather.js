
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
				url: "get_city.php?type=cities&province_id="+$(this).val(),
				dataType: "json",
				success: function(json)
				{
					for(var x in json)
					{
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
					url: "get_city.php?type=districts&province_id="+$province_id.val()+"&city_id="+$(this).val(),
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