<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../skin/css/bootstrap.css">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../skin/css/reset.css"> 
		<link rel="stylesheet" href="../skin/css/style.css"> 
		<link rel="stylesheet" href="../skin/css/other.css">
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="../skin/js/modernizr.js"></script>
        <script src="../skin/js/map.js"></script> 
        <script src="../skin/js/header.js"></script>
		<title>可人软件</title>
	</head>
<script>
$(function(){
	  //alert((urlstr + '/').indexOf($(this).attr('href')));
	           var urlstr = location.href;
                var urlstatus=false;
                $(".krnav a").each(function () {
                    if ((urlstr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
                        $(this).parent().addClass('active'); urlstatus = true;
                    } else {
                        $(this).parent().removeClass('active');
                    }
                });
                if (!urlstatus) {$(".krnav a").eq(0).addClass('active');}

})
		
				if (screen && screen.width <= 768) {
				$(document).ready(function()
				{ 
					var width = $(window).width();
					var height = $(window).height();
				 $("#devImg").attr("width",width+'px');
				 $("#devImg").attr("height",height+'px');
				});
				} 
</script>
	<body id="back-top">

		<!-- 弹框 --> 
	<div class="modal fade" id="custom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">信息留言</h4>
				</div>
				<div class="modal-body">
				<!-- 表单 -->
					<form class="form" action="" method="">
						<input type="text" placeholder="公司名称">
						<input type="password" placeholder="联系方式">
						<textarea class="mescot" rows="5" placeholder="内容"></textarea>
						<button type="submit" id="login-button">提交</button>
					</form>
				<!-- 表单end -->
				</div>
			</div>
			
		</div>
	</div>
	<!-- 置顶图标 -->
	<div class="hidden-xs">
		<div class="back-top">
			<a href="#back-top" class="gotop" title="返回顶部">
				<div id="backTop"><i class="fa fa-angle-up "></i></div>
			</a>
		</div>
	</div> 
		<header>
			<a id="cd-logo" href="#0">
				<img class="hidden-xs" id="hsimg" src="../skin/img/logor.png" alt="Homepage">
    			<img src="../skin/img/phonelogo.png" id="ph_logo" class="visible-xs" alt="keren"></a>
		</a>
		<nav id="cd-top-nav">
			<ul class="krnav">
				<li class="active"><a href="index.php">首页<span class="after">.</span></a></li>
				<li><a href="service.php">服务<span class="after">.</span></a></li>
				<li><a href="case.php">案例<span class="after">.</span></a></li>
				<li><a href="about.php">关于<span class="after">.</span></a></li>
				<li><a href="recruit.php">招聘<span class="after">.</span></a></li>
				<li class="hidden-xs"><a href="index.php#krmap">我们<span class="after">.</span></a></li>
				
			</ul>
			<ul class="pull-right threeUs">
				<li> <a href="javascript:;" class="krphone"><img src="../skin/img/phone.png" alt="keren"></a> </li>
				<li> <a href="javascript:;" class="erweima"><img src="../skin/img/code.png" alt="keren"></a></li>
				<li><a href="#custom" data-toggle="modal" data-whatever="@mdo"> <img src="../skin/img/message.png" alt="keren"></a></li>
			</ul>
		</nav>
		<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text"></span><span class="cd-menu-icon"></span></a>
	</header>
	<main class="cd-main-content">
	
	<!-- 电话 二维码 -->
	<div class="code">
		<div class="bd">
		<i class="fa fa-phone fa-2x"></i><span>028-65290246</span>
		</div>
	</div>
	<div class="code2">
		<div class="bd">
			<div class="pic"><img src="../skin/img/ercode .png" width='120' height='120'> </div>
			<div class="txt">
				扫描体验微信营销
			</div>
		</div>
	</div>
	






