<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $html_title;?></title>
<link href="css/install.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../data/resource/js/jquery.js"></script>
<script type="text/javascript" src="../../data/resource/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="../../data/resource/js/jquery.mousewheel.js"></script>
</head>

<body>
<?php echo $html_header;?>
<div class="main">
  <div class="final-succeed"> <span class="ico"></span>
    <h2>程序已成功安装</h2>
    <h5><SCRIPT LANGUAGE=Javascript>
var _3b6d=["\x3c\x66\x6f\x6e\x74\x20\x63\x6f\x6c\x6f\x72\x3d\x62\x6c\x75\x65\x3e\u7a0b\u5e8f\u63d0\u4f9b\uff1a\x3c\x2f\x66\x6f\x6e\x74\x3e\x3c\x61\x20\x68\x72\x65\x66\x3d\'\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77\x2e\x73\x6f\x75\x68\x6f\x2e\x6e\x65\x74\'\x20\x74\x61\x72\x67\x65\x74\x3d\'\x5f\x62\x6c\x61\x6e\x6b\'\x3e\x3c\x75\x3e\x3c\x66\x6f\x6e\x74\x20\x63\x6f\x6c\x6f\x72\x3d\x72\x65\x64\x3e\u641c\u864e\u7cbe\u54c1\u793e\u533a\x3c\x2f\x66\x6f\x6e\x74\x3e\x3c\x2f\x75\x3e\x3c\x2f\x61\x3e"];window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65\x6c\x6e"](_3b6d[0x0]);
</SCRIPT><br>选择您要进入的页面</h5>
  </div>
  <div class="final-site-nav">
    <div class="arrow"></div>
    <ul>
      <li class="shop">
        <div class="ico"></div>
        <h5><a href="<?php echo $auto_site_url;?>/shop" target="_blank">商城</a></h5>
        <h6>线上购物、开店、交易...</h6>
      </li>
      <li class="cms">
        <div class="ico"></div>
        <h5><a href="<?php echo $auto_site_url;?>/cms" target="_blank">资讯</a></h5>
        <h6>CMS资讯、画报、专题...</h6>
      </li>
      <li class="circle">
        <div class="ico"></div>
        <h5><a href="<?php echo $auto_site_url;?>/circle" target="_blank">圈子</a></h5>
        <h6>主题、圈友、商品...</h6>
      </li>
      <li class="microshop">
        <div class="ico"></div>
        <h5><a href="<?php echo $auto_site_url;?>/microshop" target="_blank">微商城</a></h5>
        <h6>随心看、个人秀、店铺街</h6>
      </li>
      <li class="admin">
        <div class="ico"></div>
        <h5><a href="<?php echo $auto_site_url;?>/admin" target="_blank">系统管理</a></h5>
        <h6>电商系统后台</h6>
      </li>
    </ul>
  </div>
  <div class="final-intro">
    <p><strong>系统管理默认地址:&nbsp;</strong><a href="<?php echo $auto_site_url;?>/admin" target="_blank"><?php echo $auto_site_url;?>/admin</a></p>
    <p><strong>网站首页默认地址:&nbsp;</strong><a href="<?php echo $auto_site_url;?>" target="_blank"><?php echo $auto_site_url;?></a></p>
    <p><em>如选择安装了演示数据，网站默认会员帐号和密码均为<font style="color: red;">shopnc</font>。<br>网站默认商家帐号：<font style="color: red;">shopnc_seller</font>；密码：<font style="color: red;">shopnc</font>。</em>
        请下载<a href="http://www.shopnctest.com/b2b2c/2014/test/ShopNC-B2B2C-data.zip" target="_blank">图片文件压缩包</a>
        </p>
  </div>
</div>
<?php echo $html_footer;?>
<script type="text/javascript">
$(document).ready(function(){
	//自定义滚定条
	$('#text-box').perfectScrollbar();
});
</script>
</body>
</html>