<head>
	<title>app</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel = "shortcut icon" href = "./images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/iat.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=C1e4e2b050755a542005cdb306e22788"></script>
	<script src="http://map.qq.com/api/js?v=2.exp&key=d84d6d83e0e51e481e50454ccbe8986b"></script>
    <script type="text/javascript" src="./js/jsized.snow.min.js"></script>
 
</head>


<body>
<div class="header">
<!--[if lte IE 9]> 
	<div id="ie9-warning" >小 i 温馨提示：检测到您正在使用 Internet Explorer，可能有些效果差异以及功能无法展示。建议您使用以下浏览器
		<a href="http://www.google.com/chrome/?hl=zh-CN">Chrome</a> / 
		<a href="http://www.mozillaonline.com/">Firefox</a> / 
		<a href="http://www.apple.com.cn/safari/">Safari</a>
	</div> 
	<script type="text/javascript"> 
		function position_fixed(el, eltop, elleft)
		{ 
			if(!window.XMLHttpRequest) 
				window.onscroll = function()
				{ 
					el.style.top = (document.documentElement.scrollTop + eltop)+"px"; 
					el.style.left = (document.documentElement.scrollLeft + elleft)+"px"; 
				} 
			else 
				el.style.position = "fixed"; 
			} 
			position_fixed(document.getElementById("ie9-warning"),0, 0); 
	</script> 
<![endif]-->  
</div>
<div class="wrap">
	<div id = "show_area">
		<script type="text/javascript">
		
	  	pano_container=document.getElementById('show_area');	//街景容器
		pano = new qq.maps.Panorama(pano_container, {
			pano: '10121006121117104824700',	//场景ID
			pov:{	//视角
					heading:135,	//偏航角
					pitch:-10		//俯仰角
				},
			zoom:2		//缩放
		});
		
	   </script>
	</div>
		

	<div id = "left_menu">
		<ul id="menu">
			<li>
				<script charset="UTF-8" src="http://chabudai.sakura.ne.jp/blogparts/honehoneclock/honehone_clock_tr.js"></script>
				</script>
			</li>
			<li>
				<a href="#">Baidu_Map</a>
				<ul>
					<li id = "show_baidu_map"><a>show</a></li>
					<li id = "mark_baidu_map"><a>mark</a></li>
				</ul>
			</li>
			<!-- <li>
				<a href="#">Revoler_Maps</a>
				<ul>
					<li id = "Revoler_Maps_3D"><a>3D_Maps</a></li>
					<li id = "Revoler_Maps_2D"><a>2D_Maps</a></li>
				</ul>
			</li> -->
			<li>
				<a href="#">QQ_Map</a>
				<ul>
				
					<li id = "Panoramic_Map"><a>Panoramic_Map</a></li>
					
					
				</ul>
			</li>
			<li>
				<a href="#">Fetion</a>
				<ul>
				
					<li id = "Fetion_send_to_myself"><a>send_to_myself</a></li>
					<li id = "Fetion_send_to_user"><a>user_to_user</a></li>
					
					<li id = "Fetion_send_weather"><a>Fetion_send_weather</a></li>
				</ul>
			</li>
			<li>
				<a href="#">QRcode</a>
				<ul>
					<li id = "my_QRcode"><a>my_QRcode</a></li>
					<li id = "QRcode_offline"><a>QRcode_offline</a></li>
					<li id = "QRcode_online"><a>QRcode_online</a></li>
				</ul>
			</li>
			
			<li>
				<a href="#">Baidu_Library</a>
				<ul>
					<li id = "Baidu_Library"><a>Baidu_Library</a></li>
					
				
				</ul>
			</li>
			<li>
				<script type="text/javascript" src="http://ji.revolvermaps.com/2/1.js?i=899sciyss18&amp;s=196&amp;m=0&amp;v=true&amp;r=false&amp;b=2f3030&amp;n=false&amp;c=ff0000" async="async"></script>
			</li>
		</ul>
		<script>
			$(document).ready(function() {initMenu();});
			createSnow('./images', 60);
    	</script>
	</div>
</div>
</body>
</html>
