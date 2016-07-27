<?php include("./header.php"); 
$f_type = isset($_GET['f_type'])?$_GET['f_type']:'';
$condition = !empty($f_type)?"where f_type='{$f_type}'":'';
$page = isset($_GET['page'])&&is_numeric($_GET['page'])&&$_GET['page']>0?$_GET['page']:1;
$start = ($page-1)*15;
$limit = " limit {$start},18";
$sql = "select food_id,food_type,food_name,food_pic,create_time from `food_menu` {$condition} order by create_time desc {$limit}";
$res = mysql_query($sql);

$p_res = mysql_query("select count(id) pages from `food_menu` {$condition}");
$p_rows = mysql_fetch_assoc($p_res);
$pages = ceil($p_rows['pages']/18);
$n_page = ($page+1)<$pages?$page+1:$pages;
$p_page = ($page-1)>0?$page-1:1;
?>
 <!--内容开始-->
<div class="youxi_all" id="ss">您当前位置：
	<a  href="/index.php">美食家</a> &gt;&gt;
	<a  href="/show.php?f_type=<?php echo $f_type ?>"><?php echo $fid[$f_type] ?></a> &gt;&gt; 频道首页 
</div>
<div class="youxi_all">
	<div id="content">


<div id="content_left">
	<div id="back"><?php echo $fid[$f_type] ?></div>
	<?php while($row = mysql_fetch_assoc($res)){ 
			if($row['food_pic'])
	?>

	<div class="List_like"> 
	  	<div id="list_img" style="background: url(/up/2011-8/2011810163632.jpg) no-repeat scroll">
	     	<a href="/detail.php?food_id=<?php echo $row['food_id'].'&f_type={$f_type}' ?>" target="_blank"><img src="<?php echo $row['food_pic'] ?>"  width="170" border="0" height="140" alt="<?php echo $row['food_name'] ?>"></a>
	  	</div>
	   	<div id="list_text">
	   		<span><a href="/detail.php?food_id=<?php echo $row['food_id'].'&f_type={$f_type}' ?>" target="_blank"><?php echo $row['food_name'] ?></a> </span>   
	   	</div>
	   	<div id="list_shuxing">
	           <em>0</em>   时间:<b><?php echo $row['create_time'] ?></b>  类型:<b><?php echo $row['food_type'] ?></b>   
	   	</div>        
	</div>
	<?php } ?>
	<div id="fenye" class="plist" style="margin-top:6px;text-align:right;">
		<span>共 <?php echo $p_rows['pages'] ?> 篇  页次:<?php echo $page ?>/<?php echo $pages; ?>页  
		<?php 
			if($page == 1){
				echo "首页&nbsp;上一页&nbsp;";
			}else{
				echo "<a href='/show.php?f_type={$f_type}&page=1'>首页</a>&nbsp;";
				echo "<a href='/show.php?f_type={$f_type}&page={$p_page}'>上一页</a>&nbsp;";
			}
			if($page == $pages){
				echo "下一页&nbsp;尾页";
			}else{
				echo "<a href='/show.php?f_type={$f_type}&page={$n_page}'>下一页</a>&nbsp;";
				echo "<a href='/show.php?f_type={$f_type}&page={$pages}'>尾页</a>";
			}
		?>
		  
		转到：
		<form action="./show.php" method="get" style="width:110px;float:right;">
			<select id="turnpage" size="1" name="page">
			<?php 
				for($i=1;$i<=$pages;$i++){
					echo "<option value='{$i}'>第{$i}页</option>"	;
				}
			?>
			</select>
			<input type="hidden" value="<?php echo $f_type; ?>" name="f_type"/>
			<input type="submit" value="确定"/>
		</form>
		</span>
	</div>
	<div class="clear"> </div>
</div>
<div id="content_right">
		<div id="listfl"> 
 		<h3> 美食分类</h3>
			<ul>
 			<li><a  href="/jccp/jccp_1363.html">家常菜谱</a> <b>『10906』</b> </li>  
			<li><a  href="/yfsp/yfsp_1364.html">孕妇食谱</a> <b>『267』</b> </li>  
			<li><a  href="/etsp/etsp_1365.html">儿童食谱</a> <b>『1223』</b> </li>  
			<li><a  href="/lrsp/lrsp_1366.html">老人食谱</a> <b>『528』</b> </li>  
			<li><a  href="/ylys/ylys_1367.html">医疗药膳</a> <b>『1453』</b> </li>  
			<li><a  href="/xcms/xcms_1368.html">西餐美食</a> <b>『1519』</b> </li>  
			<li><a  href="/ssms/ssms_1369.html">瘦身美食</a> <b>『786』</b> </li> 
			<li><a  href="/tsxc/tsxc_1149.html">特色小吃</a> <b>『546』</b> </li>
			<li><a  href="/scbk/scbk_1150.html">食材百科</a> <b>『371』</b> </li>
			<li><a  href="/mssp/mssp_1151.html">美食视频</a> <b>『137』</b> </li>
		</ul>
		</div>
		<div id="commgame">
   		<h3>推荐美食 </h3>
		<dl>
		   <dt> <a href="http://www.jucanw.com/ylys/3855.html" target="_blank"> <img src="http://www.jucanw.com/UploadFiles/2015/295/2015122600323567790.jpg"> </a></dt>
		   <dd><a href="http://www.jucanw.com/ylys/3855.html" target="_blank">红枣莲子赤豆汤</a></dd>
		   <dd> 主料:红枣，莲子，赤豆... </dd>
		</dl>
		<dl>
		   <dt> <a href="http://www.jucanw.com/ylys/18904.html" target="_blank"> <img src="http://www.jucanw.com/UploadFiles/2015/295/2015120416044545880.jpg"> </a></dt>
		   <dd><a href="http://www.jucanw.com/ylys/18904.html" target="_blank">生姜羊肉粥</a></dd>
		   <dd> 主料:生姜20克、羊肉1... </dd>
		</dl>
		<dl>
		   <dt> <a href="http://www.jucanw.com/ylys/4059.html" target="_blank"> <img src="http://www.jucanw.com/UploadFiles/2015/295/2015120411264956812.jpg"> </a></dt>
		   <dd><a href="http://www.jucanw.com/ylys/4059.html" target="_blank">白萝卜涮羊肉</a></dd>
		   <dd> 主料:羊肉片350克，白萝... </dd>
		</dl>
		<dl>
		   <dt> <a href="http://www.jucanw.com/ylys/18787.html" target="_blank"> <img src="http://www.jucanw.com/UploadFiles/2015/295/2015111912420119775.jpg"> </a></dt>
		   <dd><a href="http://www.jucanw.com/ylys/18787.html" target="_blank">醋泡透明鸡蛋(预防禽流</a></dd>
		   <dd> 主料:鸡蛋2个 </dd>
		</dl>
		<dl>
		   <dt> <a href="http://www.jucanw.com/ylys/18785.html" target="_blank"> <img src="http://www.jucanw.com/UploadFiles/2015/295/2015111910151077912.jpg"> </a></dt>
		   <dd><a href="http://www.jucanw.com/ylys/18785.html" target="_blank">醋泡黑豆的正确做法</a></dd>
		   <dd> 主料:黑豆 </dd>
		</dl>
		</div>
</div>
</div>
</div>

<?php include("./footer.php"); ?>