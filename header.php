<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>家常菜做法大全有图_简单好吃家常菜的做法_菜谱大全带图片_美食家</title>
<meta http-equiv="mobile-agent" content="format=html5; url=http://m.jucanw.com/" />
<meta name="Keywords" content="家常菜做法大全,简单家常菜做法大全,好吃的家常菜做法,菜谱大全" />
<meta name="Description" content="美食家最受欢迎的美食做法咨询网站，专业的养生食谱网教你如何做出简单好吃的家常菜及地方特色小吃，美食视频对所有家常菜谱进行DIY视频讲解。" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/skin/head.css"  rel="stylesheet" type="text/css" />
<link href="/skin/index.css"  rel="stylesheet" type="text/css" />
<link href="/skin/list.css"  rel="stylesheet" type="text/css" />
<link href="/skin/game.css"  rel="stylesheet" type="text/css" />
<link href="/skin/wenzhang.css"  rel="stylesheet" type="text/css" />
<link href="/skin/wenzhang.css"  rel="stylesheet" type="text/css" />
<script src="/ks_inc/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="/skin/js/fxxz.js" ></script>
</head>
<?php
$fid = array(
	'ylys'=>'养生食谱',
	'jccp'=>'家常菜',
	'yfsp'=>'孕妇食谱',
	'etsp'=>'儿童食谱',
	'lrsp'=>'老人食谱',
	'xcms'=>'西餐美食',
	'ssms'=>'瘦身美食',
	'tsxc'=>'特色小吃',
	'scbk'=>'食材百科',
	'mssp'=>'美食视频',
	'zt'=>'美食专题'
);
$command = mysql_connect("23.248.162.241","debug","hdp@5C01") or die("mysql connect error!");
mysql_select_db("web",$command);
//$command = mysql_connect("192.168.1.122","admin","admin") or die("mysql connect error!");
//mysql_select_db("haodianpu",$command);
mysql_query("set names 'utf8'");
?>

<body>
	<script src="/ks_inc/common.js" type="text/javascript"></script>
	<div id="head_top"> 
		<div id="fx_top">
		<div id="fx_top_left"> 美食家提供专业的<strong>养生食谱大全</strong> </div>
		<div id="fx_top_right">
		    <ul>
		        <li><span><img src="/skin/images/ico_14.gif"  width="12" height="12" /></span><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://'+location.hostname+(location.port!=''?':':'')+location.port);" href="#">设为首页</a></li>
		        <li><span><img src="/skin/images/gif-0257.gif" width="12" height="12" /></span><a href="#" onclick="javascript:window.external.addFavorite('http://'+location.hostname+(location.port!=''?':':'')+location.port,'美食家');">加入收藏</a></li>
		    </ul> 
		</div> 
		</div>
	  	<div id="fx_top_box">
		    <div id="head_logo">
		        <a href="/"><img src="/skin/logo.png" alt="美食家" width="240" height="60" border="0" /></a>
		    </div>
	    	<div id="head_search">
	      		<div id="search_div">
		       		<SCRIPT language=javascript>
						function g(formname)	{
							var url = "http://www.baidu.com/baidu";
							formname.action = url;
							return true;
						}
					</SCRIPT>
					<form name="f1" target="_blank" onsubmit="return g(this)">
						<div class="searchsd"> 
							<input name=word  maxlength="100" class="textbox" value="茼蒿" onclick="if(this.value=='茼蒿'){this.value='';}" onfocus="this.select();">
							<input type="submit" value="美食搜索">
							<input name=tn type=hidden value="bds">
							<input name=cl type=hidden value="3" >
							<input name=ct type=hidden value="2097152">
							<input name=si type=hidden value="www.jucanw.com">
							<input name=s type=hidden value="on">
						</div>
					</form>
	      		</div>
		      	<div class="hotKeyword">
		       		<b>热门: <a href="http://www.jucanw.com/plus/tags.asp?n=%C8%E2" target="_blank" title="TAG:肉&#10;被搜索了74210次">肉</a> <a href="http://www.jucanw.com/plus/tags.asp?n=%CB%AE%B9%FB%BC%F5%B7%CA+%BD%A1%BF%B5%CA%DD%C9%ED20%BD%EF" target="_blank" title="TAG:水果减肥 健康瘦身20斤&#10;被搜索了57435次">水果减肥 健康瘦身20斤</a> <a href="http://www.jucanw.com/plus/tags.asp?n=%B6%B9" target="_blank" title="TAG:豆&#10;被搜索了51544次">豆</a> <a href="http://www.jucanw.com/plus/tags.asp?n=%D3%AA%D1%F8%D0%A1%B4%BA%BE%ED%B5%C4%D7%F6%B7%A8" target="_blank" title="TAG:营养小春卷的做法&#10;被搜索了22866次">营养小春卷的做法</a> <a href="http://www.jucanw.com/plus/tags.asp?n=%BA%EC%D4%E6%C1%AB%D7%D3%B3%E0%B6%B9%CC%C0%B5%C4%D7%F6%B7%A8" target="_blank" title="TAG:红枣莲子赤豆汤的做法&#10;被搜索了22045次">红枣莲子赤豆汤的做法</a> </b>  
		      	</div>
	 		</div>
		</div>
	</div>

	<div class="youxi_all" id="tabs">
		<div class="tab_left"></div>
	  	<div class="tabsC">
	    	<ul class="menu_1">
				<li><a  href="/"  rel="nofollow">首页</a></li>
				<li><a href="/show.php?f_type=ylys" target="_blank">养生食谱</a></li>
				<li><a href="/show.php?f_type=jccp" target="_blank">家常菜谱</a></li>
				<li><a href="/show.php?f_type=yfsp" target="_blank">孕妇食谱</a></li>
				<li><a href="/show.php?f_type=etsp" target="_blank">儿童食谱</a></li>
				<li><a href="/show.php?f_type=lrsp" target="_blank">老人食谱</a></li>
				<li><a href="/show.php?f_type=xcms" target="_blank">西餐美食</a></li>
				<li><a href="/show.php?f_type=ssms" target="_blank">瘦身美食</a></li>
				<li><a href="/show.php?f_type=tsxc" target="_blank">特色小吃</a></li>
				<li><a href="/show.php?f_type=scbk" target="_blank">食材百科</a></li>
				<li><a href="/show.php?f_type=mssp" target="_blank">美食视频</a></li>
      </ul>
	  	</div>
		<div class="tab_right"></div>
	</div>
	
   			
   			
