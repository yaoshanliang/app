function initMenu() 
{
	$('#menu ul').hide();
	$('#menu li a').click(
		function() 
		{
			var checkElement = $(this).next();
			if((checkElement.is('ul')) && (checkElement.is(':visible'))) 
			{
				$('#menu ul:visible').slideUp('normal');
				return false;
			}
			if((checkElement.is('ul')) && (!checkElement.is(':visible'))) 
			{
				$('#menu ul:visible').slideUp('normal');
				checkElement.slideDown('normal');
				return false;
			}
		}
		);
}

$(document).ready(function()
{	
	//show baidu map
	$("#show_baidu_map").click(function()
	{
		var map = new BMap.Map("show_area");		// 创建Map实例
		map.centerAndZoom(new BMap.Point(120.6461893558, 31.3149634197), 14);		
		map.addControl(new BMap.NavigationControl());		// 添加平移缩放控件
		map.addControl(new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT}));    
		map.addControl(new BMap.OverviewMapControl());		//添加缩略地图控件
		map.enableScrollWheelZoom();		//启用滚轮放大缩小
		map.addControl(new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP,BMAP_HYBRID_MAP]}));		//2D图，卫星图，不包含3D
	});

	//mark baidu map
	$("#mark_baidu_map").click(function()
	{
		var map = new BMap.Map("show_area");		// 创建Map实例
		map.centerAndZoom(new BMap.Point(120.6461893558, 31.3149634197), 20);		
		map.addControl(new BMap.NavigationControl());		// 添加平移缩放控件
		map.addControl(new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT}));    
		map.addControl(new BMap.OverviewMapControl());		//添加缩略地图控件
		map.enableScrollWheelZoom();		//启用滚轮放大缩小
		map.addControl(new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP,BMAP_HYBRID_MAP]}));		//2D图，卫星图，不包含3D
		
		var pt = new BMap.Point(120.6461893558, 31.3146534197);
		var myIcon = new BMap.Icon("./images/base.png", new BMap.Size(30,60));
		var marker = new BMap.Marker(pt,{icon:myIcon});  
		map.addOverlay(marker);     
		var infoWindow = new BMap.InfoWindow("<br><h2>SKLCC341</h2>Suzhou Key Laboratory of Converged Communication</br></br>");
		marker.addEventListener("click", function(){this.openInfoWindow(infoWindow);});

	});

	//Revoler_Maps_3D
	$("#Revoler_Maps_3D").click(function()
	{
		
		var URL = "./Revoler/Revoler_Maps_3D.php";
		htmlobj = $.ajax(
		{
			url:URL,
			success:function(data)
			{
				//alert(data);
				$("#show_area").html("123");
				//$("#show_area").html('<script type="text/javascript" src="http://ji.revolvermaps.com/2/1.js?i=899sciyss18&amp;s=670&amp;m=0&amp;v=true&amp;r=false&amp;b=000000&amp;n=false&amp;c=ff0000" async="async"></script>');
			},
			error:function(data)
			{
				$("#show_area").html("Sorry,error!");
			}
		});
	});

	//Revoler_Maps_2D
	$("#Revoler_Maps_2D").click(function()
	{
		var URL = "./Revoler/Revoler_Maps_2D.php";
		htmlobj = $.ajax(
		{
			url:URL,
			success:function(data)
			{
				$("#show_area").html(data);
			},
			error:function(data)
			{
				$("#show_area").html("Sorry,error!");
			}
		});
	});

	//show_QQ_Map
	$("#Panoramic_Map").click(function()
	{
		pano_container=document.getElementById('show_area');	//街景容器
		pano = new qq.maps.Panorama(pano_container, {
			pano: '10121006121117104824700',	//场景ID
			pov:{	//视角
					heading:150,	//偏航角
					pitch:0		//俯仰角
				},
			zoom:1		//缩放
		});
	});

	//show_Baidu_Library
	$("#Baidu_Library").click(function()
	{
		var URL = "./Library/Baidu_Library.php";
		$.ajax(
		{
			
			url:URL,
			success:function (data)
			{
				$('#show_area').html(data);
			}
		});
	});

	//my_QRcode
	$("#my_QRcode").click(function()
	{

		var URL = "./QRcode/my_QRcode.php";
		htmlobj = $.ajax(
		{
			url:URL,
			success:function(data)
			{
				$("#show_area").html(data);
			},
			error:function(data)
			{
				$("#show_area").html("Sorry,error!");
			}
		});
	});


	//QRcode_offline
	$("#QRcode_offline").click(function()
	{
		var URL = "./QRcode/phpqrcode/index.php";
		
		htmlobj = $.ajax(
		{
			url:URL,
			success:function(data)
			{
				$("#show_area").html(data);
			},
			error:function(data)
			{
				$("#show_area").html("Sorry,error!");
			}
		});
	});


	//QRcode_online
	$("#QRcode_online").click(function()
	{
		var URL = "./QRcode/phpqrcode/create_QRcode_online.php";
		
		htmlobj = $.ajax(
		{
			url:URL,
			success:function(data)
			{
				$("#show_area").html(data);
			},
			error:function(data)
			{
				$("#show_area").html("Sorry,error!");
			}
		});
	});

	//Fetion_send_to_myself
	$("#Fetion_send_to_myself").click(function()
	{
		var URL = "./Fetion/fetion.php";
		htmlobj = $.ajax(
		{
			url:URL,
			success:function(data)
			{
				$("#show_area").html(data);
			},
			error:function(data)
			{
				$("#show_area").html("Sorry,error!");
			}
		});
	});
	
	//Fetion_send_to_user
	$("#Fetion_send_to_user").click(function()
	{
		var URL = "./Fetion/fetion_user.php";
		htmlobj = $.ajax(
		{
			url:URL,
			success:function(data)
			{
				$("#show_area").html(data);
			},
			error:function(data)
			{
				$("#show_area").html("Sorry,error!");
			}
		});
	});

	//Fetion_send_weather
	$("#Fetion_send_weather").click(function()
	{ 
		var URL = "./Fetion/fetion_weather.php";
		htmlobj = $.ajax(
		{
			url:URL,
			beforeSend:function() 
			{
				$("#show_area").html("<h3>Wating...Wating...Wating...</h3>");
			},
			success:function(data)
			{
				$("#show_area").html(data);
			},
			error:function(data)
			{
				$("#show_area").html("Sorry,error!");
			}
		});
	});

	
});