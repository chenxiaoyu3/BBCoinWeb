

<link rel="Shortcut Icon" href="<?=asset_url().'img/favicon.ico'?>" />
<!-- onePageScroll -->
<script src="<?=asset_url().'js/jquery.onepage-scroll.js'?>"></script>
<link rel="stylesheet" href="<?=asset_url().'css/onepage-scroll.css'?>">
<!-- end onePageScroll -->
<link rel="stylesheet" href="<?=asset_url().'css/index.css'?>">
<style type="text/css">
	body {background: url(<?=asset_url().'img/background.gif'?>);}
	#logo {background: url(<?=asset_url().'img/bbtitle.png'?>) no-repeat; width: 200px; height: 300px; display: block;}
	#download { background: url(<?=asset_url().'img/download2.png'?>) no-repeat; width:242px; height:83px; display: block; margin:100px 0px 0px 12px; }
	#vcode {background: url(<?=asset_url().'img/vcode.png'?>) no-repeat; width: 256px; height: 256px; margin: 20px 0px 0px 0px; display: block;}
	#update_log{display: block;margin-top: 100px;}
	#contact{color: #6f6f6f}
</style>
<title>BB看盘 比特时代看盘工具</title>
<meta name="description" content="比特币 山寨币 看盘软件 安卓 BB看盘 可能是最好的山寨币看盘工具 比特时代看盘工具" />
</head>
<body>
<div class="main">
	<section> 
		<div class="container" >
			<div class="row">
				<div class="col-md-6 demo-ver">
					<img src="<?=asset_url().'img/ph3.png'?>">
				</div>		
			</div>
		</div>
	</section>
	<section> 
		<div class="container" >
			<div class="row">
				<div class="col-md-6 demo-ver">
					<img src="<?=asset_url().'img/ph4.png'?>">
				</div>		
			</div>
		</div>
	</section>
	<section> 
		<div class="container-fluid" >
			<div class="row">
				<div class="col-md-6">
					<img class="demo-hor" src="<?=asset_url().'img/ph7.png'?>">
				</div>		
			</div>
		</div>
	</section>
</div>
<div id="download_container" class="container" >
	<div style="height:150px"></div>
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<a id="logo"></a>
			<a id="download" href="http://ggcoin.sinaapp.com/welcome/downloadAPK"></a>
			<a id="vcode"></a>
			<div id="contact">bbkanpan<a>@</a>gmail.com</div>
			<h1 id="donate">接受捐赠：</br>XRP:rMPszrrd7Jwrf6ysFT6L3aeJsAVC87N3rQ<br/>LTC:LKX1s5yZL1VFVU1VURSkCP1RZzMu6cVXGF</h1>
		</div>		
	</div>
</div>
<ul class="onepage-pagination">
	<li>
		<a data-index="1" href="#1" class="active"></a>
	</li>
	<li>
		<a data-index="2" href="#2"></a>
	</li>
	<li>
		<a data-index="3" href="#3"></a>
	</li>
</ul>

<script type="text/javascript">
$(document).ready(function(){
	$(".main").onepage_scroll({
		sectionContainer: "section",
		easing: "ease-in-out",
		animationTime: 1000,
		pagination: true,
		updateURL: false,
		direction: "vertical" 
	});
});
</script>
</body>